<?php

namespace Artisan\Outline;

class Outline
{
    private $sidebar;

    public function sidebar($items = null)
    {
        if (! $items) {
            return $this->sidebar->__invoke();
        }

        $this->sidebar = $items;
    }

    public function activeStateHereForNowBecauseIDontWantToUseAHelper($routes)
    {
        if (! is_array($routes)) {
            $routes = array_wrap($routes);
        }

        return array_sum(array_map(function ($route) {
            return str_contains(url()->current(), $route);
        }, $routes));
    }
}
