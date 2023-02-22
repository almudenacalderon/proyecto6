<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrenador extends Model
{
    use HasFactory;

    protected $table = "entrenadores";

    protected $fillable = [
        'id',
        'name',
        'email',
        'imagen',
        'pais',
        'ciudad',
        'sexo',
        'telefono'

    ];
    public function rutinas()
    {
        return $this->hasMany(Rutina::class, 'entrenador_id');
    }

    public function users()
    {
        return $this->hasMany(User::class, 'entrenador_id');
    }
}
