<?php

namespace Artisan\Outline\Http\Controllers;

use Illuminate\Support\Facades\File;
use Facades\Artisan\Outline\Outline;

class AssetController
{
    public function show($name)
    {
        return File::get(Outline::file('test'));
    }
}
