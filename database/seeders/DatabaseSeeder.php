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
        DB::table('roles')->truncate();
        DB::table('role_user')->truncate();
        DB::table('ejercicio_rutina')->truncate();

    $this->call(UsersTableSeeder::class);
    $this->call(EntrenadoresTableSeeder::class);
    $this->call(LugaresTableSeeder::class);
    $this->call(EjerciciosTableSeeder::class);
    $this->call(RutinasTableSeeder::class);


    Model::reguard();

    Schema::enableForeignKeyConstraints();

    $this->command->info('Tablas iniciadas correctamente');

    }
}
