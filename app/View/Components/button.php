<?php

namespace App\View\Components;

use Illuminate\View\Component;
use function view;

class Button extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public string $variant;
    public function __construct(  $variant = 'primary')
    {
        $this->variant=$variant;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button')->with('variant',$this->variant);
    }
}