<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EjercicioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker = \Faker\Factory::create('es_ES');
        return [
            'name' => $this->faker->name(),
            'repeticiones' => $this->faker->randomDigit(0),
            'sets' => $this->faker->randomDigit(0),
            'categoria' => $this->faker->word(),
        ];
    }
}
