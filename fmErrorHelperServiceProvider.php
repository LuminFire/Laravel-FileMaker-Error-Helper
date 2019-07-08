<?php

namespace LuminFire\fmErrorHelper;

use Illuminate\Support\ServiceProvider;

class fmErrorHelperServiceProvider extends ServiceProvider
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
        include __DIR__.'/fmErrorHelper.php';
        $this->app->make('LuminFire\fmErrorHelper\fmErrorHelper');
    }
}
