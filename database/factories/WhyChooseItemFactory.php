<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WhyChooseItem>
 */
class WhyChooseItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'icon' => fake()->randomElement(['fas fa-magic', 'fas fa-stethoscope', 'fas fa-landmark', 'fas fa-share-alt', 'fas fa-bullhorn', 'fas fa-sitemap']),
            'heading' => ucfirst(fake()->realTextBetween(10, 60)),
            'text' => fake()->paragraph(10),
        ];
    }
}
