<?php

namespace App\Services;

interface PriceCalculatorInterface
{
    public function calculateFinalPrice($product);
}
