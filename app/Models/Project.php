<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // Define the table name
    protected $table = 'projects';

    // Define the fillable attributes
    protected $fillable = [
        'name',
        'year',
        'research_project',
        'position',
        'teacher_id'
    ];

    // Define the relationship with the Teacher model
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'ci');
    }
}