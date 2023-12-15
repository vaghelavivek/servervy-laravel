<?php

namespace App\Livewire;

use Livewire\Component;

class SubPriceList extends Component
{
    public function __construct(
        public $priceList = [] 
    )
    {}

    public $activePriceList = 0;

    public function activePriceListIndex($index) {
        $this->activePriceList = $index;
    }

    public function render()
    {
        return view('livewire.sub-price-list');
    }
}
