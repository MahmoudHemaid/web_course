<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Payment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'CheckNum' => $this->faker->uuid,
            'CustomerID' => Customer::all()->random()->id,
            "PaymentDate" => $this->faker->dateTime(),
            "Amount" => (float) $this->faker->randomFloat(2, 0, 9999),
        ];
    }
}
