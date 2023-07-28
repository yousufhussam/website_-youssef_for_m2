<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Hashing\MySQLHasher;
use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Auth::provider('legacy', function (Application $app, array $config) {
            $mysqlHasher = new MySQLHasher();
            return new EloquentUserProvider($mysqlHasher, $config['model']);
        });
    }
}
