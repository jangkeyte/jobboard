<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CompanyIndustryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->randomElement(['Accounting Firm', 'Software Company', 'IT Company', 'Real Estate Company', 'Law Firm', 'Health Care', 'Agriculture', 'Construction', 'Education', 'Entertainment', 'Manufacturing', 'Mining', 'Pharmaceutical', 'Enery', 'Hospitality', 'Media', 'Computer', 'Electronics', 'Food Industry', 'Insurance', 'Transportation', 'Aerospace', 'Computer Industry', 'Retail', 'Telecommunication', 'Advertising & Marketing', 'Banking', 'Economic Sector', 'Food & Beverage', 'Agriculture', 'Forestry', 'Fishing & Hunting', 'Logging', 'Apartment Rental', 'Commercial Leasing', 'Land Leasing']),
        ];
    }
}
