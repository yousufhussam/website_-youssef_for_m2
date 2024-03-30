<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Shop\ShopCategory;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function show(int $id): View
    {
        $category = ShopCategory::find($id);

        return view('shop/category', [
            'category' => $category
        ]);
    }
}
