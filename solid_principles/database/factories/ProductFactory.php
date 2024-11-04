<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [

            'name' => $this->faker->word(), // Random product name in English
            'price' => $this->faker->randomFloat(2, 10, 50), // Random price between 10 and 1000

        ];
    }
}
