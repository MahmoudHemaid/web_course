<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Order_Product;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class Order_ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order_Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'OrderID' => Order::all()->random()->id,
            'ProductCode' => Product::all()->random()->Code,
            'Qty' => $this->faker->numberBetween(1, 9999),
            'PriceEach' => (float) $this->faker->randomFloat(2, 0, 9999)
        ];
    }
}
