<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LugaresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        self::seedLugares();
        $this->command->alert('Tabla vehiculos inicializada con datos!');
    }
    private function seedLugares()
    {
        DB::table('lugares')->truncate();
        DB::table('lugares')->insert([
            'name' => 'El Mostacho',
            'tipo' => 'Restaurante',
            'ubicacion' => 'Calle San Isidoro, Cartagena',
            'descripcion' => 'Un lugar acogedor, perfecto para ir en familia',
            'imagen' => 'https://media-cdn.tripadvisor.com/media/photo-s/0f/a8/0b/f2/chef-momo-restaurante.jpg'
        ]);
        DB::table('lugares')->insert([
            'name' => 'VivaGym',
            'tipo' => 'Gimnasio',
            'ubicacion' => 'El paseo Alfonso XIII, Cartagena',
            'descripcion' => 'Buen gimnasio',
            'imagen' => 'https://funziona.fit/wp-content/uploads/2019/01/VIVA-COLOR.jpg'
        ]);
        DB::table('lugares')->insert([
            'name' => 'Synergym',
            'tipo' => 'Gimnasio',
            'ubicacion' => 'Calle Los Rosales, Cartagena',
            'descripcion' => 'Muy nuevo y con buenos monitores',
            'imagen' => 'https://ponferradahoy.com/wp-content/uploads/2022/05/construccion-de-gimnasio-synergim-2.jpg'
        ]);
    }
}
