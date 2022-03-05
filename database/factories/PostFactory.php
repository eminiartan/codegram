<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'caption' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'image' => '/uploads/no_image.jpg',
        ];
    }
}
