<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Tank;
use App\Observers\TankObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Tank::observe(TankObserver::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
