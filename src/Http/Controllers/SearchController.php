<?php

namespace Artisan\Outline\Http\Controllers;

class SearchController
{
    public function index()
    {
        return collect(config('outline.search'))->mapWithKeys(function ($options, $model) {
            $results = $model::search(request()->q)->get();

            return [
                $options['name'] => $results->map(function ($result) use ($options) {
                    return $options['resource']($result);
                })
            ];
        });
    }
}
