<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Model::unguard();
        Schema::disableForeignKeyConstraints();

        DB::table('orders')->truncate();
        DB::table('customers')->truncate();
        DB::table('users')->truncate();

    $this->call(UsersTableSeeder::class);
    $this->call(LugaresTableSeeder::class);

    Model::reguard();

    Schema::enableForeignKeyConstraints();

    $this->command->info('Tablas iniciadas correctamente');

    /*private function seedLugares()
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
    }*/
    }
}
