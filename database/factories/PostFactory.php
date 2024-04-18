<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
//            'title' => $this->faker->sentence(),
            'title' => $this->faker->realTextBetween(10, 30),
            'tags' => join(",", $this->faker->words(rand(1, 5))),
            'body' => $this->faker->realTextBetween(1000, 2000),
        ];
    }
}
