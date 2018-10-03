<?php

namespace Artisan\Outline\Navigation;

use Illuminate\Support\Fluent;

class Item extends Fluent
{
    protected $scope;

    public function __construct($attributes = [])
    {
        $this->scope = collect();

        parent::__construct($attributes);
    }

    public function route($route)
    {
        $this->link = route($route);

        return $this;
    }

    public function active()
    {
        $this->scope->push($this->link);

        if (! $this->withinScope()) {
            return null;
        }

        return '-active';
    }

    private function withinScope()
    {
        return $this->scope->contains(function ($route) {
            return str_contains(url()->current(), $route);
        });
    }
}
