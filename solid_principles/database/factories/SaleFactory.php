<?php

namespace Database\Factories;

use App\Models\Sale;

use Illuminate\Database\Eloquent\Factories\Factory;

class SaleFactory extends Factory
{
    protected $model = Sale::class;

    public function definition()
    {



        return [

            'product_id' => $this->faker->numberBetween(1, 10), // Assuming Product IDs from 1 to 50 exist
            'user_id' => $this->faker->numberBetween(1, 4), // Assuming User IDs from 1 to 100 exist
        ];
    }
}



