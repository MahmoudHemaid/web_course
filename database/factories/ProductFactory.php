<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Productline;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ProductlineID' => Productline::all()->random()->id,
            "Name" => $this->faker->name,
            "Scale" => $this->faker->numberBetween(1, 5),
            "Vendor" => $this->faker->company,
            "PdtDescription" => $this->faker->words(15, true),
            "QtyInStock" => $this->faker->numberBetween(0, 99999),
            "BuyPrice" => $this->faker->randomFloat(2, 0, 9999),
            "MSRP" => $this->faker->word
        ];
    }
}
