<?php

namespace App\Http\Controllers\Patch;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class PatchLandingController extends Controller
{
    public function home(): View
    {
        return view('patch/home');
    }

    public function notice(): View
    {
        return view('patch/notice');
    }
}
