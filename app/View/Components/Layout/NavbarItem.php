<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class NavbarItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
   public string $href ;
    public function __construct( $href )
    {
         $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layout.navbar-item');
    }
}
