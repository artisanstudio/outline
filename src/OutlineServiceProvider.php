<?php

namespace Artisan\Outline;

use Facades\Artisan\Outline\Outline;
use Illuminate\Support\Facades\Route;

class OutlineServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->defineAssetPublishing();
        $this->defineConfigPublishing();
        $this->shareSidebarNavigation();
    }

    /**
     * Pass on the sidebar to the partial.
     *
     * @return void
     */
    private function shareSidebarNavigation()
    {
        view()->composer('outline::layouts._sidebar', function ($view) {
            $view->with('sidebar', Outline::sidebar());
        });
    }

    /**
     * Set the config for artisan to publish.
     *
     * @return void
     */
    private function defineConfigPublishing()
    {
        $configPath = __DIR__ . '/../config/outline.php';

        $this->publishes(
            [$configPath => config_path('outline.php')],
            'outline-config'
        );
    }

    /**
     * Set the assets for artisan to publish.
     *
     * @return void
     */
    public function defineAssetPublishing()
    {
        $this->publishes([
            realpath(__DIR__ . '/../public') => public_path('vendor/outline'),
        ], 'outline-assets');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerResources();
        $this->registerRoutes();
        $this->registerConfig();
    }

    /**
     * Merge the default config.
     *
     * @return void
     */
    private function registerConfig()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/outline.php', 'outline');
    }

    /**
     * Load the views.
     *
     * @return void
     */
    private function registerResources()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'outline');
    }

    /**
     * Register the routes.
     *
     * @return void
     */
    private function registerRoutes()
    {
        Route::group([
            'as'         => config('outline.prefix', 'admin') . '.',
            'prefix'     => config('outline.prefix', 'admin'),
            'namespace'  => 'Artisan\Outline\Http\Controllers',
            'middleware' => ['web'],
        ], function () {
            $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        });
    }
}
