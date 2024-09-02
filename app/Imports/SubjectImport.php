<?php

namespace App\Imports;

use App\Models\Subject;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Log;

class SubjectImport implements ToModel, WithHeadingRow
{
    private $failedRows = 0;
    private $failedDetails = [];

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        Log::info('Fila leída:', $row);

        // Saltar filas que son completamente null
        if (count(array_filter($row, function ($value) {
                return $value !== null;
            })) === 0) {
            Log::info('Fila vacía encontrada, saltándola.');
            return null;
        }

        try {
            // Validar que los datos necesarios no sean null
            if (is_null($row['name']) || is_null($row['cycle']) || is_null($row['teacher_ci'])) {
                throw new \Exception('Faltan datos necesarios en la fila.');
            }

            // Verificar que el teacher_ci existe en la tabla teachers
            $teacher = \App\Models\Teacher::where('ci', $row['teacher_ci'])->first();
            if (!$teacher) {
                throw new \Exception('El teacher_ci no existe en la tabla teachers.');
            }

            // Intentar crear el objeto Subject
            return new Subject([
                'name' => $row['name'],
                'cycle' => $row['cycle'],
                'affinity' => $row['affinity'],
                'teacher_ci' => $row['teacher_ci'],
            ]);
        } catch (QueryException $qe) {
            $this->failedRows++;
            $this->failedDetails[] = ['row' => $row, 'error' => $qe->getMessage()];
            Log::error('Error de restricción de clave externa: ' . $qe->getMessage(), $row);
            // Continuar procesando las demás filas
            return null;
        } catch (\Exception $e) {
            $this->failedRows++;
            $this->failedDetails[] = ['row' => $row, 'error' => $e->getMessage()];
            Log::error('Error al procesar fila: ' . $e->getMessage(), $row);
            // Continuar procesando las demás filas
            return null;
        }
    }

    // Método para lanzar la excepción al finalizar la importación
    public function failedImport()
    {
        if ($this->failedRows > 0) {
            Log::error("Total de filas fallidas: {$this->failedRows}");
            foreach ($this->failedDetails as $detail) {
                Log::error('Detalle de Fila Fallida:', $detail);
            }
            throw new \Exception("Se encontraron {$this->failedRows} filas que no se pudieron insertar.");
        }
    }

    // Método que Laravel Excel llamará después de la importación
    public function __destruct()
    {
        $this->failedImport();
    }
}