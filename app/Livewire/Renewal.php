<?php

namespace App\Livewire;

use Livewire\Component;

class Renewal extends Component
{

    public $renewalDomain = [
        [
            'year' => '1 Year',
            'isPopular' => false,
            'price' => 4.99
        ],
        [
            'year' => '1 Year',
            'isPopular' => false,
            'price' => 9.99
        ],
        [
            'year' => '1 Year',
            'isPopular' => false,
            'price' => 15.99
        ],
        [
            'year' => '1 Year',
            'isPopular' => false,
            'price' => 29.99
        ],
        [
            'year' => '1 Year',
            'isPopular' => false,
            'price' => 39.99
        ],
    ];

    public $selectRenewalIndex = 0;
    public $selectRenewalPrice = 4.99;

    public function selectRenewal ($index , $price) {
        $this->selectRenewalIndex = $index;
        $this->selectRenewalPrice = $price;
    }

    public function render()
    {
        return view('livewire.renewal');
    }
}
