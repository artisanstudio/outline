<?php

namespace Artisan\Outline;

use Artisan\Outline\Navigation\Sidebar;

class Outline
{
    /**
     * The sidebar handler.
     *
     * @var Closure
     */
    private $sidebar;

    public function __construct(Sidebar $sidebar)
    {
        $this->sidebar = $sidebar;
    }

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
    public function sidebar($createSidebar = null)
    {
        if (! $createSidebar) {
            return $this->sidebar;
        }

        $createSidebar->__invoke($this->sidebar);
    }
}
