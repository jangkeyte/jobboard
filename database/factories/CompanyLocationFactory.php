<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CompanyLocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $random_array = array(
            'Ho Chi Minh', 
            'Ha Noi', 
            'Long An', 
            'Dong Nai', 
            'Binh Duong', 
            'Binh Phuoc', 
            'Vung Tau', 
            'Tien Giang', 
            'Vinh Long', 
            'Can Tho', 
            'Tra Vinh', 
            'Kien Giang', 
            'Dong Thap', 
            'Dak Lak', 
            'Kon Tum', 
            'Long Khanh', 
            'Tay Ninh', 
            'Ben Tre', 
            'Hau Giang', 
            'Soc Trang', 
            'Bac Lieu', 
            'Ca Mau'
        );
        return [
            'name' => fake()->unique()->randomElement($random_array),
        ];
    }
}
