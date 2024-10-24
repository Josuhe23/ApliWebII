<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Especialidad;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Especialidad>
 */
class EspecialidadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             //'id'=> $this->faker->factory(),
             'nombre' => $this->faker->word(),
             'correo_elec_esp' => $this->faker->email(),
        ];
    }
}
