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
    public function definition(): array
    {
        $heading = ucfirst(fake()->realTextBetween(10, 60));
        return [
            'heading' => $heading,
            'slug' => strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $heading))),
            'short_description' => fake()->sentence(),
            'description' => fake()->paragraph(10),
            'total_view' => fake()->numberBetween(0, 20),
            'photo' => 'default.jpg',
            'title' => $heading,
            'meta_description' => fake()->paragraph(2)
        ];
    }
}
