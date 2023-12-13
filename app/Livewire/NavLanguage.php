<?php

namespace App\Livewire;

use Livewire\Component;

class NavLanguage extends Component
{

    public $isLanguageDropopen = 0;
    public $selectLanguage = 'English';
    public $languageList = ['English', 'Gujarati', 'Hindi'];

    public function languageDropToggle() {
        if ($this->isLanguageDropopen == 0) {
            $this->isLanguageDropopen = 1;
        }else{
            $this->isLanguageDropopen = 0;
        }
    } 
    
    public function languageDropClose() {
        $this->isLanguageDropopen = 0;
    }

    public function changeSelectLanguage($selectLanguage) {
        $this->selectLanguage = $selectLanguage;
        $this->languageDropClose(); 
    }
 
    public function render()
    {
        return view('livewire.nav-language');
    }
}
