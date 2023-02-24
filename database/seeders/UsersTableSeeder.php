<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;
use App\Models\User;
use App\Models\Order;
use App\Models\Role;

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

        $userAdmin = User::create([
            'name' => env('ADMIN_NAME'),
            'email' => env('ADMIN_EMAIL'),
            'password' => Hash::make(env('ADMIN_PASS')),
            'email_verified_at' => now()
        ]);

        /*$userEntrenadores = User::create([
            'id' => 3,
            'name' => 'Entrenador',
            'email' => 'entrenador.es',
            'password' => Hash::make('12345678'),
            'email_verified_at' => now()
        ]);*/

        $roleAdmin = Role::create([
            'name' => 'Admin'
        ]);
        $roleCustomer = Role::create([
            'name' => 'Customer'
        ]);

        $roleEntrenador = Role::create([
            'name' => 'Entrenador'
        ]);
        $userAdmin->roles()->attach($roleAdmin->id);
        
        $userCustomers = User::factory(10)
        ->has(Customer::factory()
        ->has(Order::factory()->count(3))
        ->count(1))
        ->create();

        foreach ($userCustomers as $userCustomer) {
            $userCustomer->roles()->attach($roleCustomer->id);
        }

        $userEntrenadores = User::factory(5)
        ->has(Customer::factory()
        ->has(Order::factory()->count(3))
        ->count(1))
        ->create();

        foreach ($userEntrenadores as $userEntrenador) {
            $userEntrenador->roles()->attach($roleEntrenador->id);
        }
    }
}
