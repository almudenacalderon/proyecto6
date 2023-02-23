<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Entrenador;

class RutinaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'descripcion' => $this->faker->text(),
            'meta' => $this->faker->word(),
            'entrenador_id' => Entrenador::all()->random()->id,
        ];
    }
}
