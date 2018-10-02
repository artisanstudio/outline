<?php

namespace Artisan\Outline;

use Facades\Artisan\Outline\Outline;
use Illuminate\Support\Facades\Route;

class OutlineServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $this->registerResources();
        $this->registerRoutes();
        $this->defineAssetPublishing();

        $this->mergeConfigFrom(__DIR__ . '/../config/outline.php', 'outline');

        view()->composer('outline::layouts._sidebar', function ($view) {
            $view->with('sidebar', Outline::sidebar());
        });
    }

    private function registerResources()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'outline');
    }

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

    public function defineAssetPublishing()
    {
        $this->publishes([
            realpath(__DIR__ . '/../public') => public_path('vendor/outline'),
        ], 'outline-assets');
    }

    public function register()
    {
    }
}
