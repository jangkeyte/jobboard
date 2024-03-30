<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $lang = 10.7570852;
        $long = 106.6856516;        
        $langtitude = fake()->latitude($min = ($lang - (rand(0,20) / 1000)), $max = ($lang + (rand(0,20) / 1000)));
        $longitute = fake()->longitude($min = ($long - (rand(0,20) / 1000)), $max = ($long + (rand(0,20) / 1000)));

        return [
            'company_id' => fake()->numberBetween(1, 20),
            'title' => fake()->jobTitle(),
            'description' => fake()->paragraph(10),
            'responsibility' => fake()->paragraph(10),
            'skill' => fake()->paragraph(10),
            'education' => fake()->paragraph(10),
            'benefit' => fake()->paragraph(10),
            'deadline' => fake()->date(),
            'vacancy' => fake()->numberBetween(1, 50),
            'job_category_id' => fake()->numberBetween(1, 68),
            'job_location_id' => fake()->numberBetween(1, 63),
            'job_type_id' => fake()->numberBetween(1, 5),
            'job_experience_id' => fake()->numberBetween(1, 10),
            'job_gender_id' => fake()->numberBetween(1, 3),
            'job_salary_range_id' => fake()->numberBetween(1, 11),
            'map_code' => $langtitude . ',' . $longitute,
            'is_featured' => fake()->boolean(),
            'is_urgent' => fake()->boolean(),
        ];
    }
}
