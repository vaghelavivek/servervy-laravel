<?php

namespace App\Livewire;

use Livewire\Component;

class Tab extends Component
{

    public function __construct(
        public $list = []
    )
    {}

    public $activeTab = 0;

    public function activeTabIndex($index) {
        $this->activeTab = $index;
    }

    public function render()
    {
        return view('livewire.tab');
    }
}
