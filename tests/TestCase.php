<?php

namespace Artisan\Outline\Tests;

use Artisan\Outline\OutlineServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [OutlineServiceProvider::class];
    }
}
