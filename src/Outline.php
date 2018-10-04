<?php

namespace Artisan\Outline;

use Artisan\Outline\Navigation\Sidebar;

class Outline
{
    /**
     * The sidebar handler.
     *
     * @var Sidebar
     */
    private $sidebar;

    /**
     * Create the sidebar.
     *
     * @param  Closure|null  $items
     * @return array|void
     */
    public function sidebar()
    {
        if (! $this->sidebar) {
            $this->sidebar = new Sidebar;
        }

        return $this->sidebar;
    }
}
