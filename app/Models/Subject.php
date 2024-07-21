<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'degrees',
    ];

    // Relación uno a muchos con Schedule (si es necesario)
    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
