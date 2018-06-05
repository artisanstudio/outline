<?php

namespace Artisan\Outline;

use Illuminate\Support\Facades\Route;

class OutlineServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $this->registerRoutes();
    }

    public function register()
    {
    }

    private function registerRoutes()
    {
        Route::group([
            'as'         => 'cp.',
            'prefix'     => 'cp',
            'namespace'  => 'Artisan\Outline\Http\Controllers',
            'middleware' => ['web'],
        ], function () {
            $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        });
    }
}
