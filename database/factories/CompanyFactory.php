<?php

namespace Database\Factories;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

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
            'company_name' => fake()->company(),
            'person_name' => fake()->name(),
            'username' => fake()->userName(),
            'email' => fake()->unique()->safeEmail(),
            'password' => static::$password ??= Hash::make('password'),
            'logo' => 'default.png',
            'phone' => fake()->phoneNumber(),
            'address' => fake()->address(),
            'company_location_id' => fake()->numberBetween(1, 63),
            'company_industry_id' => fake()->numberBetween(1, 68),
            'company_size_id' => fake()->numberBetween(1, 9),
            'founded_on' => fake()->numberBetween(1990, 2024),
            'website' => fake()->url(),
            'description' => fake()->paragraph(10),
            'oh_mon' => '8:00 AM - 6:00 PM',
            'oh_tue' => '8:00 AM - 6:00 PM',
            'oh_web' => '8:00 AM - 6:00 PM',
            'oh_thu' => '8:00 AM - 6:00 PM',
            'oh_fri' => '8:00 AM - 6:00 PM',
            'oh_sat' => '8:00 AM - 12:00 AM',
            'oh_sun' => '8:00 AM - 10:00 AM',
            'map_code' => $langtitude . ',' . $longitute,
            'facebook' => 'https://facebook.com/' . fake()->lexify('????????'),
            'twitter' => 'https://twitter.com/' . fake()->lexify('????????'),
            'linkedin' => 'https://linkedin.com/' . fake()->lexify('????????'),
            'instagram' => 'https://instagram.com/' . fake()->lexify('????????'),
            'status' => 1,
        ];
    }
}
