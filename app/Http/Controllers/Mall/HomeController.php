<?php

namespace App\Http\Controllers\Mall;

use App\Http\Controllers\Controller;
use App\Models\Mall\MallItem;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function home(): View
    {
        $largeSuggestions = MallItem::getSuggestions(2, frontpageDisplay: 'recommend_desc');
        $smallSuggestions = MallItem::getSuggestions(8 - (2 * $largeSuggestions->count()), frontpageDisplay: 'recommend');

        return view('mall/home', [
            'suggestions' => $largeSuggestions->merge($smallSuggestions),
        ]);
    }
}
