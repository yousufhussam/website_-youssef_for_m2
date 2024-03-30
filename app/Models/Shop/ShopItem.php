<?php

namespace App\Models\Shop;

use App\Models\Enums\ShopItemPricingEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ShopItem extends Model
{
    /**
     * The connection name for the model.
     *
     * @var string|null
     */
    protected $connection = 'website';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'category_id',
        'old_price',
        'price',
        'pricing',
        'quantity',
        'image',
        'description',
        'other',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'pricing' => ShopItemPricingEnum::class,
    ];

    /**
     * @return bool
     */
    public function userCanBuy(): bool
    {
        $user = Auth::user();

        if ($this->pricing == ShopItemPricingEnum::CASH)
            return $user->cash >= $this->price;
        elseif ($this->pricing == ShopItemPricingEnum::MILEAGE)
            return $user->mileage >= $this->price;

        return false;
    }
}
