<?php

namespace App\Imports;

use App\Models\TeacherDetail;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Log;

class TeacherDetailImport implements ToModel, WithHeadingRow
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
        if (is_null($row['period']) || is_null($row['teacher_ci'])) {
            Log::error('Faltan datos necesarios en la fila.', $row);
            throw new \Exception('Faltan datos necesarios en la fila.');
        }

        return new TeacherDetail([
            'teacher_ci' => $row['teacher_ci'],
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
}