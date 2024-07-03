<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'teaching_hours_id'];

    /**
     * Get the teaching hours associated with the teacher.
     */
    public function teachingHour()
    {
        return $this->belongsTo(TeachingHour::class, 'teaching_hours_id');
    }
}