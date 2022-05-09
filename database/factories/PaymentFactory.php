<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Payment;

class PaymentFactory extends Factory
{
    protected $model = Payment::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'amount' => $this->faker->randomFloat($maxDecimal = 2, $min = 15, $max = 500),
            'payed_at' => $this->faker->dateTimeBetween($startDate = '-1 year', $endDate = 'now', $timezone = null),
        ];

        
    }
}
