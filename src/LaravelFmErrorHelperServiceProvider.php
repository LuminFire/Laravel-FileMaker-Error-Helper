<?php

namespace LuminFire\LaravelFmErrorHelper;

use Illuminate\Support\ServiceProvider;

class LaravelFmErrorHelperServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        require_once __DIR__.'/Helper.php';
    }
}
