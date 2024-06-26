<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobLocation>
 */
class JobLocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'name' => fake()->unique()->randomElement(['Ho Chi Minh', 'Ha Noi', 'Long An', 'Dong Nai', 'Binh Duong', 'Binh Phuoc', 'Vung Tau', 'Tien Giang', 'Vinh Long', 'Can Tho', 'Tra Vinh', 'Kien Giang', 'Dong Thap', 'Dak Lak', 'Kon Tum', 'Long Khanh', 'Tay Ninh', 'Ben Tre', 'Hau Giang', 'Soc Trang', 'Bac Lieu', 'Ca Mau']),
        ];
    }
}
