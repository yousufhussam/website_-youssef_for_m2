<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     */
    public function login(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'login' => 'required|string',
            'password' => 'required|string',
        ]);

        if ($validator->fails())
            return redirect('user/login')->withErrors($validator)->withInput();

        $credentials = $validator->validated();

        // Validate the credentials
        if (!Auth::once($credentials)) {
            return redirect('user/login')->withErrors([
                'login' => 'The provided credentials do not match our records.',
            ])->onlyInput('login');
        }

        // The user is now available
        $user = Auth::user();

        // Check if the user is banned
        if ($user->status->isBlocked()) {
            Auth::logout();

            $request->session()->invalidate();

            return redirect('user/login')->withErrors([
                'login' => 'Your account is blocked.',
            ])->onlyInput('login');
        }

        // Authenticate user
        Auth::login($user);
        $request->session()->regenerate();

        // Save user's IP address
        $user->ip = $request->ip();
        $user->saveOrFail();

        return redirect()->intended('user/administration');
    }


    /**
     * Log the user out of the application.
     */
    public function logout(Request $request): View
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return view('user/logout');
    }
}
