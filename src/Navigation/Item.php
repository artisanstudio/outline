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
    const Active = '-active';

    /**
     * Separator special name.
     *
     * @var string
     */
    const Separator = '-separator';

    /**
     * The routes to look up to see if the item is active.
     *
     * @var \Illuminate\Support\Collection
     */
    protected $scope;

    /**
     * Route to link to.
     *
     * @param string
     */
    public $link = null;

    /**
     * Create a new navigation item instance.
     *
     * @param  string  $name
     * @return Item
     */
    public function __construct($name)
    {
        $this->name  = $name;
        $this->scope = new Collection;
    }

    /**
     * Create a new separator item.
     *
     * @return Item
     */
    public static function separator()
    {
        return new Item(static::Separator);
    }

    /**
     * Set the link.
     *
     * @param  string  $link
     * @return Item
     */
    public function link($link)
    {
        $this->link = str_start($link, config('app.url'));

        return $this;
    }

    /**
     * Assign the link using a route name instead.
     *
     * @param  string  $route
     * @param  string  $parameters
     * @return Item
     */
    public function route($route, $parameters = [])
    {
        return $this->link(
            route($route, $parameters, true)
        );
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
        $this->scope = $this->scope->merge($routes);

        return $this;
    }

    /**
     * Add a tag for the right side.
     *
     * @param  string  $tag
     * @return Item
     */
    public function tag($tag)
    {
        $this->tag = $tag;

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

        return static::Active;
    }

    /**
     * Check if the current route is within the highlight scope.
     *
     * @return boolean
     */
    private function withinScope()
    {
        return $this->scope->contains(function ($route) {
            return url()->current() == $route;
        });
    }

    /**
     * Check if the item is a separator.
     *
     * @return boolean
     */
    public function isSeparator()
    {
        return $this->name === static::Separator;
    }
}
