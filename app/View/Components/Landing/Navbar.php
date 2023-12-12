<?php

namespace App\View\Components\Landing;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
     public $backBlack = 1000 ,
     public $backActive = 0 , 
     public $bgColor = "backdrop-blur-[25px] bg-[#f8f9fc26] dark:bg-transparent")
    {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.landing.navbar');
    }
}
