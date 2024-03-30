<?php

namespace App\Models\Enums;

enum ShopItemPricingEnum: string
{
    case CASH = 'CASH';
    case MILEAGE = 'MILEAGE';

    public function description(): string
    {
        return match($this) {
            self::CASH => __('shop/main.currency.cash'),
            self::MILEAGE => __('shop/main.currency.mileage')
        };
    }
}
