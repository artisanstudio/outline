<?php

namespace Artisan\Outline;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Facades\Artisan\Outline\Outline;

abstract class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->booted(function () {
            $this->registerSidebar(Outline::sidebar());
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }
}
