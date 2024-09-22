<?php

namespace App\Http\Controllers\Mall;

use App\Http\Controllers\Controller;
use App\Models\Game\Player\Player;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function auth(Request $request): RedirectResponse
    {
        if (!$request->hasValidSignature()) {
            abort(401);
        }

        // Validate the request data
        $validated = $request->validate([
            'pid' => 'required|exists:player.player,id',
            'sid' => 'required|int',
        ]);

        // Fetch the player's account
        $player = Player::findOrFail($validated['pid']);
        $account = $player->account;

        // Authenticate user
        Auth::login($account);
        $request->session()->regenerate();

        // Save user's IP address
        $account->ip = $request->ip();
        $account->saveOrFail();

        return redirect(route('mall'));
    }
}
