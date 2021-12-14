<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'brand_judul'=> $this->faker->sentence(mt_rand(1,3)),
           'brand_desc'=> $this->faker->paragraph(),
           'brand_image'=> $this->faker->sentence(mt_rand(1,3))
        ];
    }
}