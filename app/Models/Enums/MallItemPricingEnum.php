<?php

namespace App\Models\Enums;

enum MallItemPricingEnum: string
{
    case CASH = 'CASH';
    case MILEAGE = 'MILEAGE';

    public function name(): string
    {
        return match($this) {
            self::CASH => __('mall/main.currency.cash'),
            self::MILEAGE => __('mall/main.currency.mileage')
        };
    }

    public function longName(): string
    {
        return match($this) {
            self::CASH => __('mall/main.currency.cash_long'),
            self::MILEAGE => __('mall/main.currency.mileage_long')
        };
    }
}
