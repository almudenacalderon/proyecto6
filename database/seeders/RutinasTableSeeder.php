<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Entrenador;
use App\Models\Ejercicio;

class RutinasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        self::seedRutinas();
        $this->command->alert('Tabla rutinas inicializada con datos!');
    }
    private function seedRutinas()
    {
        DB::table('rutinas')->truncate();

        DB::table('rutinas')->insert([
            'name' => 'Rutina tren superior',
            'descripcion' => 'Los ejercicios deben ejecutarse en series de tres, entre 8-10 repeticiones',
            'meta' => 'Hipertrofia',
            'entrenador_id' => Entrenador::all()->random()->id,
            'ejercicio_id' => Ejercicio::all()->random()->id
        ]);
        DB::table('rutinas')->insert([
            'name' => 'Rutina de abdomen',
            'descripcion' => 'Los ejercicios deben ejecutarse en series de tres, entre 10-15 repeticiones',
            'meta' => 'Hipertrofia',
            'entrenador_id' => Entrenador::all()->random()->id,
            'ejercicio_id' => Ejercicio::all()->random()->id
        ]);
        DB::table('rutinas')->insert([
            'name' => 'Rutina tren inferior',
            'descripcion' => 'Los ejercicios deben ejecutarse en series de tres. Número de repeticiones llegar hasta el fallo muscular',
            'meta' => 'Fuerza',
            'entrenador_id' => Entrenador::all()->random()->id,
            'ejercicio_id' => Ejercicio::all()->random()->id
        ]);
    }
}
