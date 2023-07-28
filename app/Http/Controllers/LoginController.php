<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
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
            'login' => ['required'],
            'password' => ['required'],
        ]);

        if ($validator->fails())
            return redirect('user/login')->withErrors($validator)->withInput();

        $credentials = $validator->validated();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();
            $user->ip = $request->ip();
            $user->saveOrFail();

            return redirect()->intended('user/administration');
        }

        return redirect('user/login')->withErrors([
            'login' => 'The provided credentials do not match our records.',
        ])->onlyInput('login');
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
