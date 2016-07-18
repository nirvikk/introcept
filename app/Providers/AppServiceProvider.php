<?php

namespace Introcept\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
        'vendor/twbs/bootstrap/' => public_path('vendor/bootstrap'),'vendor/fortawesome/font-awesome/' => public_path('vendor/fa')
        ], 'public');
        
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
