<?php

namespace Database\Factories;

use App\Enums\EmployeeStatus;
use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
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
            'name' => fake()->name(),
            'email' => fake()->email(),
            'image_id' => Image::factory(),
            'position' => fake()->word(),
            'description' => fake()->word(), // Mô tả
            'socials' => null, // Mạng xã hội
            'status' => EmployeeStatus::Publish,
        ];
    }
}
