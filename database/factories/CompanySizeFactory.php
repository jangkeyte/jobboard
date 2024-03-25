<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CompanySizeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $random_array = array(
            '2 - 5 Persons', 
            '5 - 10 Persons', 
            '10 - 20 Persons', 
            '20 - 50 Persons', 
            '50 - 100 Persons', 
            '100+ Persons');
        return [
            'name' => fake()->unique()->randomElement($random_array),
        ];
    }
}
