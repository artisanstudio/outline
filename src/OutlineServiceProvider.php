<?php

namespace Artisan\Outline;

use Illuminate\Support\Facades\Route;

class OutlineServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $this->registerResources();
        $this->registerRoutes();
    }

    private function registerResources()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'outline');
    }

    private function registerRoutes()
    {
        Route::group([
            'as'         => config('outline.prefix', 'cp') . '.',
            'prefix'     => config('outline.prefix', 'cp'),
            'namespace'  => 'Artisan\Outline\Http\Controllers',
            'middleware' => ['web'],
        ], function () {
            $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        });
    }

    public function register()
    {
    }
}
