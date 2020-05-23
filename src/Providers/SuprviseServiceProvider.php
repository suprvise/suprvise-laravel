<?php

namespace Suprvise\Laravel\Providers;

use Suprvise\Suprvise;
use Suprvise\Logger;
use Illuminate\Support\ServiceProvider;

class SuprviseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../../config/config.php' => config_path('suprvise.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../../config/config.php', 'suprvise');

        // Register the main class to use with the facade
        $this->app->singleton('suprvise-logger', function () {
            Suprvise::key(config('suprvise.key'));
            Suprvise::origin(config('suprvise.origin'));

            return new Logger;
        });
    }
}
