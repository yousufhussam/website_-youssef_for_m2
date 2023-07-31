<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerificationController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', fn () => view('main/home'));

Route::prefix('main')->group(function() {
    Route::get('/home', fn () => view('main/home'));
    Route::get('/media', fn () => view('main/media'));
    Route::get('/news', fn () => view('main/news'));
    Route::get('/download', fn () => view('main/download'));
    Route::get('/highscore', fn () => view('main/highscore'));
    Route::get('/guildhighscore', fn () => view('main/guildhighscore'));

    # The game
    Route::get('/thegame', fn () => view('main/thegame/thegame'));
    Route::get('/characterclasses', fn () => view('main/thegame/characterclasses'));
    Route::get('/empires', fn () => view('main/thegame/empires'));

    # How-to / tutorial
    Route::get('/howto', fn () => view('main/howto/howto'));
    Route::get('/tutorials', fn () => view('main/howto/tutorials'));
    Route::get('/tutorials/createcharacter', fn () => view('main/howto/createcharacter'));
    Route::get('/tutorials/introduction', fn () => view('main/howto/introduction'));

    # Community
    Route::get('/community', fn () => view('main/community/community'));
    Route::get('/code-of-conduct', fn () => view('main/community/code-of-conduct'));

    # Security
    Route::get('/account', fn () => view('main/security/account'));
    Route::get('/pc', fn () => view('main/security/pc'));
    Route::get('/cheat', fn () => view('main/security/cheat'));
    Route::get('/help', fn () => view('main/security/help'));
});

Route::prefix('user')->group(function() {
    # Registration
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->middleware('guest');
    Route::post('/register', [RegisterController::class, 'register'])->middleware('guest');
    Route::get('/verification/notice', [VerificationController::class, 'show'])->name('verification.notice');
    Route::get('/verification/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
    Route::get('/verification/resend', [VerificationController::class, 'resend'])->name('verification.resend');

    # Authentication
    Route::middleware('guest')->group(function() {
        Route::get('/login', fn () => view('user/login'))->name('login');
        Route::post('/login', [LoginController::class, 'login']);
    });
    Route::get('/logout', [LoginController::class, 'logout']);

    Route::get('/passwordlostrequest', fn () => view('user/passwordlostrequest'));
    Route::get('/passwordlost/{username}/{hash}', fn ($username, $hash) => view('user/passwordlost-expired'));

    # User administration
    Route::middleware(['auth', 'verified'])->group(function() {
        Route::get('/administration', fn () => view('user/administration'));

        Route::get('/characters', fn () => view('user/characters'));

        Route::get('/emailchangeaccept/{username}/{hash}', fn ($username, $hash) => view('user/emailchangeaccept'));
        Route::get('/emailchangecancel/{username}/{hash}', fn ($username, $hash) => view('user/emailchangecancel'));

        Route::get('/changeemailcode/{username}/{hash}', fn ($username, $hash) => view('user/changeemailcode'));

        Route::get('/generatecode/{userId}/{hash}', fn ($userId, $hash) => view('user/generatecode'));

        Route::get('/lostpasswordcode/{userId}/{hash}', fn ($userId, $hash) => view('user/lostpasswordcode'));
    });
});

Route::prefix('contest')->group(function() {
    Route::get('/', fn () => Redirect::to('/contest/info', 301));
    Route::get('/info', fn () => view('contest/info'));
    Route::get('/voting', fn () => view('contest/voting'));
    Route::get('/awards', fn () => view('contest/awards'));
});

Route::prefix('legal')->group(function() {
    Route::get('/terms', fn () => view('legal/terms'));
    Route::get('/privacy', fn () => view('legal/privacy'));
    Route::get('/imprint', fn () => view('legal/imprint'));
});

Route::fallback(function() {
    return view('errors.404');
});
