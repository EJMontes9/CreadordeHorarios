<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'teacher_ci', 'period', 'teacher_schedule_hours', 'class_preparation_hours',
        'research_hours', 'management_hours', 'social_knowledge_management_hours',
        'pre_professional_practice_tutoring_hours', 'academic_tutoring_hours',
        'thesis_tutoring_hours', 'individual_tutoring_hours', 'group_tutoring_hours',
        'complex_thesis_tutoring_hours', 'community_practice_tutoring_hours',
        'distributive_hours', 'utah_hours', 'academic_hours', 'managements'
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
