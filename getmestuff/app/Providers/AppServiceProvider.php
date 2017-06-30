<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Dusk\DuskServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            $view->with('refresh', \App\User::lastOnline());
        });

        view()->composer([
            'admin.wishes.wishes_table', 'admin.users.users_table', 'admin.achievements.achievements_table'
        ], function ($view) {
            $table = explode('/', request()->path());
            $table = end($table);

            $view->with('table', $table);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment('local', 'testing')) {
            $this->app->register(DuskServiceProvider::class);
            $this->app->register(\Barryvdh\Debugbar\ServiceProvider::class);
        }
    }
}
