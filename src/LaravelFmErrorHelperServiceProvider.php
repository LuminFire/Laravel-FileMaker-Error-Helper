<?php

namespace LuminFire\fmErrorHelper;

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
        include __DIR__.'/LaravelFmErrorHelper.php';
        $this->app->make('LuminFire\LaravelFmErrorHelper\Helper');
    }
}
