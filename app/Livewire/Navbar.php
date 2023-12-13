<?php

namespace App\Livewire;

use Livewire\Component;

class Navbar extends Component
{

    public $isShowMobileNavbarShow = false;

    public function __construct(
        public $backBlack = 1000,
        public $backActive = 0,
        public $bgColor = "backdrop-blur-[25px] bg-[#f8f9fc26] dark:bg-transparent"
    ) {}

    // public function mobileNavClose() {
    //     $this->isShowMobileNavbarShow = false;
    // }

    public function mobileNavToggle() {

        if ($this->isShowMobileNavbarShow) {
            $this->isShowMobileNavbarShow = false;
        }else{
            $this->isShowMobileNavbarShow = true;
        }
    }

    public function render()
    {
        return view('livewire.navbar');
    }
}
