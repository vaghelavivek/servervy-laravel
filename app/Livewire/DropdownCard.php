<?php

namespace App\Livewire;

use Livewire\Component;

class DropdownCard extends Component
{


    public function __construct(
        public $list = [],
        public $title = '',
        public $backBlack = 1000,
        public $backActive = 1,
        public $bgColor = "backdrop-blur-[25px] bg-[#f8f9fc26] dark:bg-transparent"
    ) {
    }

    public $isDropdownOpen = 0;

    public function dropdownToggale()
    {
        if ($this->isDropdownOpen == 0) {
            $this->isDropdownOpen = 1;
        } else {
            $this->isDropdownOpen = 0;
        }
    }

    public function dropdownClose()
    {
        $this->isDropdownOpen = 0;
    }

    public function render()
    {
        return view('livewire.dropdown-card');
    }
}
