<?php

namespace App\Livewire;

use Livewire\Component;

class ImageTab extends Component
{

    public function __construct(
        public $imageTab = []
    )
    {}

    public $activeTab = 0;

    public function activeTabIndex($index) {
        $this->activeTab = $index;
    }

    public function render()
    {
        return view('livewire.image-tab');
    }
}
