<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class NavThemeBtn extends Component
{

    public $isDark = false;

    public function themeToggle(Request $request) {
        $this->isDark = !$this->isDark;
    }


    public function render()
    {
        return view('livewire.nav-theme-btn', ['isDark' => $this->isDark]);
    }
}
