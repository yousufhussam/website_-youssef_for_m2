<?php

namespace App\View\Composers;

use App\Models\Shop\ShopCategory;
use Illuminate\View\View;

class ShopComposer
{
    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        // Fetch the amount of items in storage
        $view->with('storageCount', 10);

        // Fetch the amount of items in storage
        $view->with('discountDesc', "20% reducere la chipsuri");

        // Fetch the shop categories
        $view->with('categories', ShopCategory::all());
    }
}
