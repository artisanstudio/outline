<?php

namespace Artisan\Outline\Navigation;

use Illuminate\Support\Collection;

class Item
{
    /**
     * The class the use for active states.
     *
     * @var string
     */
    const ACTIVE = '-active';

    /**
     * The routes to look up to see if the item is active.
     *
     * @var \Illuminate\Support\Collection
     */
    protected $scope;

    /**
     * Create a new navigation item instance.
     *
     * @param  array  $attributes
     * @return Item
     */
    public function __construct($name)
    {
        $this->name  = $name;
        $this->scope = new Collection;
    }

    /**
     * Set the link.
     *
     * @param  string  $link
     * @return Item
     */
    public function link($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Assign the link using a route name instead.
     *
     * @param  string  $route
     * @return Item
     */
    public function route($route)
    {
        return $this->link(route($route));
    }

    /**
     * The icon to render.
     *
     * We're currently using [feather icons](https://feathericons.com)
     *
     * @param  string  $icon
     * @return Item
     */
    public function icon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * A collection of routes.
     *
     * @param  array  $routes
     * @return Item
     */
    public function scope($routes)
    {
        $this->scope->push($routes);

        return $this;
    }

    /**
     * Get the state if the current route is within scope.
     *
     * @return string
     */
    public function active()
    {
        $this->scope->push($this->link);

        if (! $this->withinScope()) {
            return null;
        }

        return static::ACTIVE;
    }

    /**
     * Check if the current route is within the highlight scope.
     *
     * @return boolean
     */
    private function withinScope()
    {
        return $this->scope->contains(function ($route) {
            return str_contains(url()->current(), $route);
        });
    }
}
