<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobSalaryRange>
 */
class JobSalaryRangeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'name' => fake()->unique()->randomElement(['$100 - $200', '$200 - $300', '$300 - $500', '$500 - $1.000', '$1.000 - $2.000', '$2.000 - $5.000', '$5.000 - $10.000', '$10.000 - $20.000', '$20.000+']),
        ];
    }
}
