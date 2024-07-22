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
        // 'career_assigned',
        // 'cycle',
        'career',
        // 'teaching_hours_id',
        'rol',
        'master_degree',
        'doctorate',
        'specialty',
        'researcher',
        'contract_hours',
        'afinity',
    ];

    /**
     * Get the teaching hours associated with the teacher.
     */
    public function teachingHour()
    {
        return $this->belongsTo(TeachingHour::class, 'teaching_hours_id');
    }
}
