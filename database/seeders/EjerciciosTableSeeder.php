<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Ejercicio;
use App\Models\Rutina;

class EjerciciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        self::seedEjercicios();
        $this->command->alert('Tabla ejercicios inicializada con datos!');
    }
    private function seedEjercicios()
    {
        DB::table('ejercicios')->truncate();

        DB::table('ejercicios')->insert([
            'name' => 'Press de banca',
            'repeticiones' => 5,
            'sets' => 5,
            'categoria' => 'Pecho'
        ]);
        DB::table('ejercicios')->insert([
            'name' => 'Peso muerto',
            'repeticiones' => 10,
            'sets' => 3,
            'categoria' => 'Pierna'
        ]);
        DB::table('ejercicios')->insert([
            'name' => 'Press de hombros',
            'repeticiones' => 5,
            'sets' => 5,
            'categoria' => 'Hombro'
        ]);
        DB::table('ejercicios')->insert([
            'name' => 'Sentadilla',
            'repeticiones' => 12,
            'sets' => 3,
            'categoria' => 'Pierna'
        ]);
        DB::table('ejercicios')->insert([
            'name' => 'Remo a una mano',
            'repeticiones' => 12,
            'sets' => 4,
            'categoria' => 'Espalda'
        ]);

        // $ejercicios = Ejercicio::factory()->count(5)
        // ->create();

        // $ejercicios = Ejercicio::factory()->count(5)
        // ->has(Rutina::factory()->count(10))
        // ->create();

        // foreach ($ejercicios as $ejercicio) {
        //     $ejercicio->rutinas()->attach($ejercicio->id);
        // }
    }
}
