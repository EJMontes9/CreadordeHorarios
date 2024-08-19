<?php

namespace App\Imports;

use App\Models\Project;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Log;

class ProjectImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        Log::info('Fila leída:', $row);

        // Saltar filas que son completamente null
        if (count(array_filter($row, function($value) { return $value !== null; })) === 0) {
            Log::info('Fila vacía encontrada, saltándola.');
            return null;
        }

        // Validar que los datos necesarios no sean null
        if (is_null($row['name']) || is_null($row['year']) || is_null($row['teacher_id'])) {
            Log::error('Faltan datos necesarios en la fila.', $row);
            throw new \Exception('Faltan datos necesarios en la fila.');
        }

        return new Project([
            'name' => $row['name'],
            'year' => $row['year'],
            'research_project' => $row['research_project'],
            'position' => $row['position'],
            'teacher_id' => $row['teacher_id'],
        ]);
    }
}