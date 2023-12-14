<?php

namespace App\Livewire;

use Livewire\Component;

class LandingTableRowsMobile extends Component
{

    public $headingMobile;

    public function __construct(
        public $data = [],
        public $headings = [],
        public $headPosition = 'justify-center',
    )
    {}
    
    public function render()
    {
        $this->headingMobile = collect($this->headings)->sortBy('mobileIndex')->chunk(2);
        return view('livewire.landing-table-rows-mobile');
    }
}
