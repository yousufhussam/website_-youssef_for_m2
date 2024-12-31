<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Game\Player\Player;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class CharactersController extends Controller
{
    public function show(): View
    {
        $characters = Player::where('account_id', Auth::user()->id)->get();
        return view('user/characters', [
            'characters' => $characters
        ]);
    }
}
