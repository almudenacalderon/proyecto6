<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntrenadoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        self::seedEntrenadores();
        $this->command->alert('Tabla entrenadores inicializada con datos!');
    }
    private function seedEntrenadores()
    {
        DB::table('entrenadores')->truncate();

        DB::table('entrenadores')->insert([
            'name' => 'Juan Riquelme',
            'email' => 'eljuanri@gmail.com',
            'imagen' => 'https://amadorruiz.com/wp-content/uploads/2022/01/AMADOR.png',
            'pais' => 'España',
            'ciudad' => 'Murcia',
            'sexo' => 'Hombre',
            'telefono' => 978123456
        ]);

    }
}
