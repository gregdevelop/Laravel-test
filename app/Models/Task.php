<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

    // Opcional: Define la tabla si no sigue la convención
    // protected $table = 'tasks';

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'title',
        'description',
        'status',
        'due_date',
    ];

    // Opcional: Cast de los campos para formateo automático
    protected $casts = [
        'status' => 'boolean',
        'due_date' => 'datetime',
    ];

    // Relación ejemplo: Cada tarea pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
