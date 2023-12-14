<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Table extends Component
{
    
    public $headingsCollections;

    public function __construct(
        public $data = [],
        public $headings = [],
        public $headPosition = 'justify-center',
    )
    {
        // $this->headingsCollections = collect($this->headings)->filter(
        //     function() {
        //         return 0;   
        //     }
        // );
    }
    public function render(): View|Closure|string
    {
        return view('components.table');
    }
}
