<?php

namespace App\Providers;

use App\Wish;
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

        view()->composer([
            'admin.layouts.blocks.sidebar_left'
        ], function ($view) {
            $count = Wish::query()->where('validated', false)->count();
            $view->with('reported', $count);
        });

        \Validator::extend('spamfree', '\App\Rules\SpamFree@passes');
        \Validator::extend('maxwish', '\App\Rules\MaxWish@passes');
        \Validator::extend('uniquearray', '\App\Rules\UniqueArray@passes');

        \Validator::replacer('maxwish', '\App\Rules\MaxWish@replaceWords');
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
