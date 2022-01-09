<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   $name = $this->faker->sentence();
        return [
            'name' => $name,
            'description' => $this->faker->paragraph(),
            'slug'=> Str::slug($name, '-'),
            'categoria' => $this->faker->randomElement(['desarrollo web','Diseño web'])
        ];
    }
}
