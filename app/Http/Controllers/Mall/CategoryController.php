<?php

namespace App\Http\Controllers\Mall;

use App\Http\Controllers\Controller;
use App\Models\Mall\MallCategory;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function show(int $id): View
    {
        $category = MallCategory::find($id);

        return view('mall/category', [
            'category' => $category
        ]);
    }
}
