<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AcaraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'acara_title'=> $this->faker->sentence(mt_rand(1,3)),
            'acara_excerpt'=> $this->faker->sentence(mt_rand(3,8)),
            'acara_desc'=> $this->faker->paragraph()
        ];
    }
}
