<?php

namespace EKejaksaan\Lapdu\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class LapduServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations/');
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
        $this->loadRoutesFrom(__DIR__.'/../../routes/api.php');
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'lapdu');

        $this->publishes([
            __DIR__.'/../../resources/views' => base_path('resources/views/vendor/lapdu'),
        ], 'views');

        $this->publishes([
            __DIR__.'/../../resources/assets' => public_path('vendor/lapdu'),
        ], 'public');

        $this->publishes([
            __DIR__.'/../../config/app.php' => config_path('lapdu.php'),
        ], 'config');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../../config/app.php', 'lapdu');
    }
}