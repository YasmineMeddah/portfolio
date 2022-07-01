<?php

namespace App\View\Components\Home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;
use function url;
use function view;

class Portfolio extends Component
{
    public array $items = [];

    public array $tabs = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Laravel'],
                'title' => 'Site ecomerce multilangue, laravel 5 , bootstrap',
                'image' => url('/img/me1.png'),
                'github' => 'https://ichougsm.com/'
            ],
               [
                'category' => ['Laravel'],
                'title' => 'Site vitrine association kafil alyatim, laravel 8 , bootstrap 5',
                'image' => url('/img/me1.png'),
                'github' => 'https://github.com/YasmineMeddah/kafil_alyatim'
            ],

            [
                'category' => ['Wordpress'],
                'title' => 'Site vitrine pour une agence immobilière wordpress',
                'image' => url('/img/em2.png'),
                'github' => 'https://mb-prim.com/'
            ],
             [
                'category' => ['Wordpress'],
                'title' => 'Marketplace   wordpress ',
                'image' => url('/img/em2.png'),
                'github' => 'https://secondlifesouk.com/'
            ],
               [
                'category' => ['Wordpress'],
                'title' => 'E-commerce website with Yii2',
                'image' => url('/img/em2.png'),
                'github' => 'https://montaxivan.com/'
            ],
                  [
                'category' => ['Wordpress'],
                'title' => 'site vitrine pour un bureau d\'architect ',
                'image' => url('/img/em2.png'),
                'github' => 'https://expertpro-international.com/'
            ],
            
           
          
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}