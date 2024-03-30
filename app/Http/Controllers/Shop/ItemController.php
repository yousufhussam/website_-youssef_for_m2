<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Shop\ShopCategory;
use App\Models\Shop\ShopItem;
use Illuminate\View\View;

class ItemController extends Controller
{
    public function show(int $id): View
    {
        $item = ShopItem::find($id);

        return view('shop/item/show', [
            'item' => $item
        ]);
    }
}
