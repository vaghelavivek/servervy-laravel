<?php

namespace App\View\Components\Neno;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Btn extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $bgColor = 'bg-white',
        public $borderColor = 'border border-light',
        public $textColor = 'text-primary',
        public $textSize = 'text-[15px]',
        public $btnPadding = 'py-1.5 px-4',
        public $rounded = 'rounded-[7px]',
        public $type = 'button',
        public $disabled = 0,
        public $className = ''
    )
    {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.neno.btn');
    }
}
