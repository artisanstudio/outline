<?php

namespace Artisan\Outline\Navigation;

class Sidebar
{
    protected $items = [];

    public function items()
    {
        return $this->items;
    }

    public function item($name)
    {
        $item = new Item(['name' => $name]);

        $this->items[] = $item;

        return $item;
    }
}
