<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeachingHour extends Model
{
    protected $table = 'teaching_hours';
    // Si tienes campos específicos que pueden ser asignados masivamente, inclúyelos aquí
    protected $fillable = ['job_title', 'dedication_time', 'minimum_hours', 'maximum_hours'];
}