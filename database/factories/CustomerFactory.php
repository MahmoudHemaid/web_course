<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'SalesRepEmployeeNum' => Employee::all()->random()->id,
            "Name" => $this->faker->name,
            "FirstName" => $this->faker->firstName,
            "LastName" => $this->faker->lastName,
            "Phone" => $this->faker->phoneNumber,
            "Address1" => $this->faker->address,
            "Address2" => $this->faker->secondaryAddress,
            "City" => $this->faker->city,
            "State" => $this->faker->state,
            "PostalCode" => (int) $this->faker->postcode,
            "Country" => $this->faker->country,
            "CreditLimit" => (float) $this->faker->randomFloat(2, 0, 9999),
        ];
    }
}
