<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('admin', function(User $user){
            return $user->name === 'MarketingUser';
        });

        Gate::define('she', function(User $user){
            return $user->name === 'SHEUser';
        });

        Gate::define('int', function(User $user){
            return $user->name === 'INTUser';
        });


        Gate::define('personalia', function(User $user){
            return $user->name === 'PersonaliaUser';
        });

        Gate::define('qualitycontrol', function(User $user){
            return $user->name === 'QualityControlUser';
        });

        Gate::define('superuser', function(User $user){
            return $user->name === 'DendiRiki';
        });

        Paginator::useBootstrap();


    }
}
