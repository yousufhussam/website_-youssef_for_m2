<?php

namespace App\Providers;

use App\View\Composers\HighscoreComposer;
use App\View\Composers\MallComposer;
use App\View\Composers\ThemeComposer;
use Illuminate\Support\Facades;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // ...
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Main application
        Facades\View::composer('layouts.app', ThemeComposer::class);
        Facades\View::composer('layouts.app', HighscoreComposer::class);

        // Mall
        Facades\View::composer('layouts.mall', MallComposer::class);
    }
}
