<?php

namespace BrilliantPackages\LaravelFmErrorHelper;

use \Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class LaravelFmErrorHelperServiceProvider extends ServiceProvider implements DeferrableProvider
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
        $this->app->singleton(
            'laravel-fmerrorhelper',
            static function ($app) {
                return new FMError();
            }
        );
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() : array
    {
        return [FMError::class];
    }
}
