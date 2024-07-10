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
        'age',
        'gender',
        'num_cellphone',
        'email',
        'dedication',
        'contract_type',
        'third_level_title',
        'fourth_level_title',
        'date_of_admission',
        'career_assigned',
        'cycle',
        'career',
        'teaching_hours_id',
    ];

    /**
     * Get the teaching hours associated with the teacher.
     */
    public function teachingHour()
    {
        return $this->belongsTo(TeachingHour::class, 'teaching_hours_id');
    }
}