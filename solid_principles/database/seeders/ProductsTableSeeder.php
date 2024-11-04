<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {

        // Add more products as needed
        Product::factory()->count(10)->create();
    }
}
