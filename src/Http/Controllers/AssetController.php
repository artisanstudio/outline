<?php

namespace Artisan\Outline\Http\Controllers;

use Facades\Artisan\Outline\Outline;

class AssetController
{
    public function show($name)
    {
        return File::get(Outline::script('test'));
    }
}
