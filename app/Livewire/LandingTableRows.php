<?php

namespace App\Livewire;

use Livewire\Component;

class LandingTableRows extends Component
{

    public function __construct(
        public $data = [],
        public $headings = [],
        public $headPosition = 'justify-center',
    )
    {}

    public function render()
    {
        return view('livewire.landing-table-rows');
    }
}
