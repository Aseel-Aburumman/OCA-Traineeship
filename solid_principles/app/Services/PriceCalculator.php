<?php

namespace App\Services;

class PriceCalculator implements PriceCalculatorInterface 
{
    protected $discounts = [];

    public function addDiscount($discount)
    {
        $this->discounts[] = $discount;
    }

    public function calculateFinalPrice($product)
    {
        $price = $product->price;

        foreach ($this->discounts as $discount) {
            $price -= $discount->apply($product);
        }

        return $price;
    }
}
