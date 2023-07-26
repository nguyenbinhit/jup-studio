<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'uuid' => fake()->uuid(),
            'customer_name' => fake()->name(),
            'customer_email' => fake()->unique()->safeEmail(),
            'image_id' => Image::factory(),
            'comment' => fake()->word(),
            'stars' => fake()->randomNumber(),
        ];
    }
}
