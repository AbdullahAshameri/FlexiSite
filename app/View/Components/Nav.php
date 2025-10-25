<?php

namespace App\View\Components;

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;

class Nav extends Component
{
    public $items;

    public $active;

    public function __construct()
    {
        $this->items = config('nav');

        $this->active = Route::currentRouteName(); 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav');
    }
}
