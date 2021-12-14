<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_name' => $this->faker->sentence(mt_rand(1,4)),
            'product_image' => $this->faker->image(),
            'product_desc' => $this->faker->paragraph(mt_rand(1, 2)),
            'product_price' => 1,
            'tag_id' => 1
        ];
    }
}
