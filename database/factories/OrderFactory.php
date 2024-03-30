<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $days = fake()->randomElement(['19', '29', '49']);
        $random_day = fake()->numberBetween(1, 9);
        return [
            'company_id' => fake()->numberBetween(1, 20),
            'package_id' => fake()->numberBetween(1, 3),
            'order_no' => time() + fake()->numberBetween(1, 9999),
            'paid_amount' => fake()->randomElement(['19', '29', '49']),
            'payment_method' => fake()->randomElement(['Paypal', 'QR Code', 'Momo', 'Banking', 'Stripe']),
            'start_date' =>  date('Y-m-d', strtotime("+$random_day days")),
            'expire_date' => date('Y-m-d', strtotime("+$days days")),
            'currently_active' => '1',
        ];
    }
}
