<?php

namespace Database\Factories;

use App\Models\Productline;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductlineFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Productline::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'DescInText' => $this->faker->words(20, true),
            'DescInHTML' => "<html></html>",
            "Image" => $this->faker->imageUrl()
        ];
    }
}
