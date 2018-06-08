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
}
