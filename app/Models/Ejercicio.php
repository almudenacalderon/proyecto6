<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejercicio extends Model
{
    use HasFactory;

    protected $table = "ejercicios";

    protected $fillable = [
        'id',
        'name',
        'repeticiones',
        'sets',
        'categoria'
    ];

    public function rutinas()
    {
        return $this->belongsToMany(Rutina::class, 'ejercicio_rutina', 'ejercicio_id', 'rutina_id');
    }
}

