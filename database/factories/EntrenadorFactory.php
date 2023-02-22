<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EntrenadorFactory extends Factory
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
            'email' => $this->faker->unique()->safeEmail(),
            'imagen' => $this->faker->imageUrl(),
            'pais' => $this->faker->country(),
            'ciudad' => $this->faker->city(),
            'sexo' => $this->faker->randomElement(['male', 'female']),
            'telefono' => $this->faker->mobileNumber(),
        ];
    }
}
