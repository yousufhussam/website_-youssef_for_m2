<?php

namespace App\Models\Enums;

enum MallItemPricingEnum: string
{
    case CASH = 'CASH';
    case MILEAGE = 'MILEAGE';

    public function description(): string
    {
        return match($this) {
            self::CASH => __('mall/main.currency.cash'),
            self::MILEAGE => __('mall/main.currency.mileage')
        };
    }
}
