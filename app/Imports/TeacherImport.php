<?php

namespace App\Imports;

use App\Models\Teacher;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;


class TeacherImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    // Debugear el proceso de importación
    public function model(array $row)
    {
        Log::info('Fila leída:', $row);

        // Saltar filas que son completamente null
        if (count(array_filter($row, function($value) { return $value !== null; })) === 0) {
            Log::info('Fila vacía encontrada, saltándola.');
            return null;
        }

        // Validar que los datos necesarios no sean null
        if (is_null($row['ci']) || is_null($row['first_name']) || is_null($row['last_name'])) {
            Log::error('Faltan datos necesarios en la fila.', $row);
            throw new \Exception('Faltan datos necesarios en la fila.');
        }

        $dateOfBirth = $this->validateAndFormatDate($row['date_of_birth']);
        $dateOfAdmission = $this->validateAndFormatDate($row['date_of_admission']);

        return new Teacher([
            'ci' => $row['ci'],
            'first_name' => $row['first_name'],
            'last_name' => $row['last_name'],
            'date_of_birth' => $dateOfBirth,
            'age' => $row['age'],
            'gender' => $row['gender'],
            'nacionality' => $row['nacionality'],
            'num_cellphone' => $row['num_cellphone'],
            'email' => $row['email'],
            'email_ug' => $row['email_ug'],
            'dedication' => $row['dedication'],
            'contract_type' => $row['contract_type'],
            'den_puesto' => $row['den_puesto'],
            'third_level_title' => $row['third_level_title'],
            'fourth_level_title' => $row['fourth_level_title'],
            'date_of_admission' => $dateOfAdmission,
            'career' => $row['career'],
            'rol' => $row['rol'],
            'master_degree' => $row['master_degree'],
            'doctorate' => $row['doctorate'],
            'specialty' => $row['specialty'],
            'researcher' => $row['researcher'],
            'contract_hours' => $row['contract_hours'],
            'period' => $row['period'],
            'teacher_schedule_hours' => $row['teacher_schedule_hours'],
            'class_preparation_hours' => $row['class_preparation_hours'],
            'research_hours' => $row['research_hours'],
            'management_hours' => $row['management_hours'],
            'social_knowledge_management_hours' => $row['social_knowledge_management_hours'],
            'pre_professional_practice_tutoring_hours' => $row['pre_professional_practice_tutoring_hours'],
            'academic_tutoring_hours' => $row['academic_tutoring_hours'],
            'thesis_tutoring_hours' => $row['thesis_tutoring_hours'],
            'individual_tutoring_hours' => $row['individual_tutoring_hours'],
            'group_tutoring_hours' => $row['group_tutoring_hours'],
            'complex_thesis_tutoring_hours' => $row['complex_thesis_tutoring_hours'],
            'community_practice_tutoring_hours' => $row['community_practice_tutoring_hours'],
            'distributive_hours' => $row['distributive_hours'],
            'utah_hours' => $row['utah_hours'],
            'academic_hours' => $row['academic_hours'],
            'managements' => $row['managements'],
        ]);
    }

    private function validateAndFormatDate($date)
    {
        if (is_null($date)) {
            return null;
        }

        if (is_numeric($date)) {
            $baseDate = Carbon::createFromFormat('Y-m-d', '1900-01-01');
            $calculatedDate = $baseDate->addDays($date - 2); // restar 2 días ya que Excel maneja el 1/1/1900 como día 2
            return $calculatedDate->format('Y-m-d');
        }

        try {
            $formattedDate = Carbon::createFromFormat('m/d/Y', $date);
            return $formattedDate->format('Y-m-d');
        } catch (\Exception $e) {
            try {
                $formattedDate = Carbon::createFromFormat('Y-m-d', $date);
                return $formattedDate->format('Y-m-d');
            } catch (\Exception $e) {
                return null;
            }
        }
    }
}
