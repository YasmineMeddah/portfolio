<?php

namespace App\View\Components;

use Illuminate\View\Component;
use function view;

class ButtonLink extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct( string $href,  string $variant = 'primary',  string $target = '_self')
    {
        $this->href=$href;
        $this->variant=$variant;
$this->target=$target;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button-link')
        ->with('href',$this->href )
        ->with('target',$this->target )
        ->with('variant',$this->variant );
    }
}