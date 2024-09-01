<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'ci',
        'first_name',
        'last_name',
        'date_of_birth',
        'age',
        'gender',
        'nacionality',
        'num_cellphone',
        'email',
        'email_ug',
        'dedication',
        'contract_type',
        'den_puesto',
        'third_level_title',
        'fourth_level_title',
        'date_of_admission',
        'career',
        'rol',
        'master_degree',
        'doctorate',
        'specialty',
        'researcher',
        'contract_hours',
        'period',
        'teacher_schedule_hours',
        'class_preparation_hours',
        'research_hours',
        'management_hours',
        'social_knowledge_management_hours',
        'pre_professional_practice_tutoring_hours',
        'academic_tutoring_hours',
        'thesis_tutoring_hours',
        'individual_tutoring_hours',
        'group_tutoring_hours',
        'complex_thesis_tutoring_hours',
        'community_practice_tutoring_hours',
        'distributive_hours',
        'utah_hours',
        'academic_hours',
        'managements',
    ];

    /**
     * Get the teaching hours associated with the teacher.
     */
    public function teachingHour()
    {
        return $this->belongsTo(TeachingHour::class, 'teaching_hours_id');
    }

    public function historic()
    {
        return $this->hasMany(Historic::class, 'IDENTIFICACION', 'ci');
    }

    // Relación con el modelo Subject
    public function subjects()
    {
        return $this->hasMany(Subject::class, 'teacher_ci', 'ci');
    }

    public function projects()
    {
        return $this->hasMany(Project::class, 'teacher_id', 'ci');
    }

}
