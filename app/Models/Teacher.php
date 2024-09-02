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

    public function details()
    {
        return $this->hasMany(TeacherDetail::class, 'teacher_ci', 'ci');
    }

}
