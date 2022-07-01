<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->navigationItems = [
            ['label' => 'A propos de moi', 'href' => '#about'],
            ['label' => 'Mes projets', 'href' => '#portfolio'],
            
//            ['label' => 'Testimonials', 'href' => '#testimonials' ],
            ['label' => 'Contacts', 'href' => '#contact'],
        ];
    }
    

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
       return view('layout.navbar')->with('navigationItems',$this->navigationItems);
   
    }
}
