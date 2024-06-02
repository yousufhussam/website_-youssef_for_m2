<?php

namespace App\Models\Mall;

use App\Models\Enums\MallItemPricingEnum;
use App\Models\Game\ItemProto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\Auth;

class MallItem extends Model
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
        'pricing' => MallItemPricingEnum::class,
    ];

    /**
     * Get the associated item_proto entry
     *
     * @return HasOne
     */
    public function proto(): HasOne
    {
        return $this->hasOne(ItemProto::class, 'vnum', 'vnum');
    }

    /**
     * @return bool
     */
    public function userCanBuy(): bool
    {
        $user = Auth::user();

        if ($this->pricing == MallItemPricingEnum::CASH)
            return $user->cash >= $this->price;
        elseif ($this->pricing == MallItemPricingEnum::MILEAGE)
            return $user->mileage >= $this->price;

        return false;
    }

    public static function getSuggestions(int $maxCount, MallItem $forItem = null, string $frontpageDisplay = null)
    {
        $query = MallItem::query();

        // Ignore the current item if specified
        if ($forItem)
            $query = $query->whereNotIn('vnum', [$forItem->vnum]);

        // Select items that are to be shown on the frontpage
        if ($frontpageDisplay)
            $query = $query->where('other', $frontpageDisplay);

        $items = $query->get();

        // Just return what we selected if we don't have enough items in the database
        if ($items->count() <= $maxCount)
            return $items;

        return $items->random($maxCount);
    }
}
