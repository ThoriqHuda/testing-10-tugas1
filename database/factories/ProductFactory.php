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
            'name' => $this->faker->randomElement(['Jordan 3']),
            'price' => $this->faker->randomElement(['60000', '120000','150000']),
            'category' => $this->faker->randomElement(['Jordan']),
            'file' => 'post.jpg'
            
        ];
    }
}
