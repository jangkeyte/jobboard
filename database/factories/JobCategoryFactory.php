<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobCategory>
 */
class JobCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->randomElement(['Accounting', 'Automotive', 'Construction', 'Education Training', 'Health Care', 'Restaurant', 'Sales', 'Engineering', 'Marketing', 'Data Entry']),
            'icon' => fake()->randomElement(['fas fa-magic', 'fas fa-stethoscope', 'fas fa-landmark', 'fas fa-share-alt', 'fas fa-bullhorn', 'fas fa-sitemap']),
        ];
    }
}
