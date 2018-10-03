<?php

namespace Artisan\Outline\Http\Controllers;

class SearchController
{
    public function index()
    {
        return collect(config('outline.search'))->mapWithKeys(function ($model, $key) {
            $name = $key;

            if (is_numeric($key)) {
                $name = str_plural(class_basename($model));
            }

            return [
                $name => $model::search(request()->q)->get()->map->toSearchPreview(),
            ];
        });
    }
}
