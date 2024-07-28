<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'link',
        'name',
        'parent_id', // Añadir parent_id a fillable
    ];

    // Relación para obtener el documento padre
    public function parent()
    {
        return $this->belongsTo(Document::class, 'parent_id');
    }

    // Relación para obtener los documentos hijos
    public function children()
    {
        return $this->hasMany(Document::class, 'parent_id');
    }

}
