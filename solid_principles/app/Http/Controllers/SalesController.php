<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Product;
use App\Services\PriceCalculatorInterface;
use App\Services\PriceCalculator;
use App\Services\SeasonalDiscount;
use App\Services\LoyaltyDiscount;

class SalesController extends Controller
{
    protected $priceCalculator;

    // Dependency Injection:
    public function __construct(PriceCalculator $priceCalculator)
    // public function __construct(PriceCalculatorInterface  $priceCalculator)

    {
        $this->priceCalculator = $priceCalculator;
    }

    public function calculateSalePrice($productId)
    {
        $product = Product::find($productId);

        // $this->priceCalculator->addDiscount(new SeasonalDiscount());
        $this->priceCalculator->addDiscount(new LoyaltyDiscount());

        $finalPrice = $this->priceCalculator->calculateFinalPrice($product);

        return response()->json(['final_price' => $finalPrice]);
    }
}
