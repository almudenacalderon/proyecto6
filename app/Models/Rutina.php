<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rutina extends Model
{
    use HasFactory;

    protected $table = "rutinas";

    protected $fillable = [
        'id',
        'name',
        'descripcion',
        'meta',
        'entrenador_id',
        'ejercicio_id'
    ];
    public function entrenador()
    {
        return $this->belongsTo(Entrenador::class, 'entrenador_id');
    }
    public function ejercicio()
    {
        return $this->hasMany(Ejercicio::class, 'ejercicio_id');
    }
}
