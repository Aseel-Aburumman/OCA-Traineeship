<?php

namespace App\Services;

class SeasonalDiscount implements DiscountInterface
{
    public function apply($product)
    {
        return $product->price * 0.10;
    }
}
