<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Candidate>
 */
class CandidateFactory extends Factory
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
        return [
            'name' => fake()->name(),
            'designation' => fake()->jobTitle(),
            'username' => fake()->userName(),
            'email' => fake()->unique()->safeEmail(),
            'password' => static::$password ??= Hash::make('password'),
            'photo' => 'default.png',
            'biography' => fake()->paragraph(10),
            'phone' => fake()->phoneNumber(),
            'country' => fake()->country(),
            'address' => fake()->address(),
            'state' => fake()->randomElement(['Ho Chi Minh', 'Ha Noi', 'Long An', 'Dong Nai', 'Binh Duong', 'Binh Phuoc', 'Vung Tau', 'Tien Giang', 'Vinh Long', 'Can Tho', 'Tra Vinh', 'Kien Giang', 'Dong Thap', 'Dak Lak', 'Kon Tum', 'Long Khanh', 'Tay Ninh', 'Ben Tre', 'Hau Giang', 'Soc Trang', 'Bac Lieu', 'Ca Mau']),
            'city' => fake()->city(),
            'zip_code' => fake()->postcode(),
            'gender' => fake()->randomElement(['Male', 'Female']),
            'marital_status' => fake()->randomElement(['Married', 'Unmarried', 'Divorced']),
            'date_of_birth' => fake()->date(),
            'website' => fake()->url(),
            'status' => 1,
        ];
    }
}
