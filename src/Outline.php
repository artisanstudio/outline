<?php

namespace Artisan\Outline;

class Outline
{
    /**
     * The sidebar handler.
     *
     * @var Closure
     */
    private $sidebar;

    /**
     * Set the sidebar navigation.
     *
     * We use a closure on the parameter over an array since if
     * we use route names for the path, the router will throw an
     * error since they aren't registered yet.
     *
     * Using a closure will only execute the sidebar on the view.
     * Although I have zero knowledge if this is actually performant.
     *
     * @param  Closure|null  $items
     * @return array|void
     */
    public function sidebar($items = null)
    {
        if (! $items) {
            return $this->sidebar ? $this->sidebar->__invoke() : [];
        }

        $this->sidebar = $items;
    }

    /**
     * Still don't have a name or a place where to put this.
     *
     * I don't want to use a helper just for the posibility of a conflict
     * with userland parallel thinking. (Even if I prefix it.)
     *
     * @param  string|array  $routes
     * @return boolean
     */
    public function activeWhen($routes)
    {
        if (! is_array($routes)) {
            $routes = array_wrap($routes);
        }

        return array_sum(array_map(function ($route) {
            return str_contains(url()->current(), $route);
        }, $routes));
    }
}
