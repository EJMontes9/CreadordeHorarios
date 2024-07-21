<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_id',
        'teacher_id',
    ];

    // Relación muchos a uno con Subject
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    // Relación muchos a uno con Teacher
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
