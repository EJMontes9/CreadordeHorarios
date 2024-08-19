<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cycle',
        'affinity',
        'teacher_ci',
    ];

    // Relación con el modelo Teacher
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_ci', 'ci');
    }
}
