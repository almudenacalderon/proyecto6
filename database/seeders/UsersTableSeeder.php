<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        self::seedUsers();
        $this->command->alert('Tabla users inicializada con datos!');
    }
    private function seedUsers() {
        DB::table('users')->truncate();
        DB::table('users')->insert([
                'name'=>'admin',
                'email'=>env('ADMIN_EMAIL', 'admin@app.test'),
                'password'=>bcrypt(env('ADMIN_PASS', 'password')),
            ]);
    }
}
