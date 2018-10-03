<?php

namespace Artisan\Outline\Http\Controllers;

class SearchController
{
    public function index()
    {
        return collect(config('outline.search'))->mapWithKeys(function ($model, $key) {
            return [
                $key => $model::search(request('q'))->get()
            ];
        });
    }
}
