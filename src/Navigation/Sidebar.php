<?php

namespace Artisan\Outline\Navigation;

class Sidebar
{
    /**
     * The sidebar items to render.
     *
     * @var array
     */
    protected $items = [];

    /**
     * Get all the sidebar items.
     *
     * @return array
     */
    public function items()
    {
        return $this->items;
    }

    /**
     * Create a new item and make it chainable.
     *
     * @param  string  $name
     * @return Item
     */
    public function item($name)
    {
        return tap(new Item($name), function ($item) {
            $this->items[] = $item;
        });
    }

    /**
     * Add a separator.
     *
     * @return void
     */
    public function separator()
    {
        $this->items[] = Item::separator();
    }
}
