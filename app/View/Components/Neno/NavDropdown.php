<?php

namespace App\View\Components\Neno;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class NavDropdown extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $title,
        public $list = []
    )
    {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.neno.nav-dropdown');
    }
}
