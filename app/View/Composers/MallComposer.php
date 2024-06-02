<?php

namespace App\View\Composers;

use App\Models\Mall\MallCategory;
use Illuminate\View\View;

class MallComposer
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

        // Fetch the mall categories
        $view->with('categories', MallCategory::all());
    }
}
