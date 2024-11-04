<?php

namespace App\Services;

class LoyaltyDiscount implements DiscountInterface {
    public function apply($product) {
        return 5;
    }
}
