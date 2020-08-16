<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->register();

        Gate::define('user-panel', function (User $user) {
            View::share('admin', $user->isAdmin());
            return $user->isAdmin();
        });
        Gate::define('admin-panel', function (User $user) {
            View::share('admin', $user->isAdmin());

            return ($user->isAdmin() || $user->isModerator());
        });
    }
}
