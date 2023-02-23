<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Entrenador;
use App\Models\User;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Role;

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
        Entrenador::truncate();

        Entrenador::create([
            'name' => 'Juan Riquelme',
            'email' => 'eljuanri@gmail.com',
            'imagen' => 'https://amadorruiz.com/wp-content/uploads/2022/01/AMADOR.png',
            'pais' => 'España',
            'ciudad' => 'Murcia',
            'sexo' => 'Hombre',
            'telefono' => 978123456
        ]);

        $roleCustomer = Role::create([
            'name' => 'Customer'
        ]);

        Entrenador::factory(10)
        ->has(
            User::factory()->count(2)
            ->has(Customer::factory()
            ->has(Order::factory()->count(3))
            ->count(2))
        )
        ->create();

        $userCustomers = User::where('id', '!=' , 1)->get();

        foreach ($userCustomers as $userCustomer) {
            $userCustomer->roles()->attach($roleCustomer->id);
        }
    }
}
