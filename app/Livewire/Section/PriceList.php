<?php

namespace App\Livewire\Section;

use Livewire\Component;

class PriceList extends Component
{

    public $imageTab = [
        [
            'img' => 'images/svgs/netherlands.svg',
            'name' => 'Netherlands'
        ],
        [
            'img' => 'images/svgs/usa.svg',
            'name' => 'United States'
        ],
        [
            'img' => 'images/svgs/russia.svg',
            'name' => 'Russia'
        ]
    ];

    public $priceList = [
        [
            'price' => 12.5,
            'offer' => '25%',
            'del' => 15.0,
            'cat' => 'Standart',
            'cores' => 2,
            'ram' => 6,
            'nvme' => 30,
            'tarffic' => 'Unlimited traffic'
        ],
        [
            'price' => 25.0,
            'offer' => '25%',
            'del' => 15.0,
            'cat' => 'Standart',
            'cores' => 2,
            'ram' => 6,
            'nvme' => 30,
            'tarffic' => 'Unlimited traffic'
        ],
        [
            'price' => 37.5,
            'offer' => '25%',
            'del' => 15.0,
            'cat' => 'Standart',
            'cores' => 2,
            'ram' => 6,
            'nvme' => 30,
            'tarffic' => 'Unlimited traffic'
        ],
        [
            'price' => 50.0,
            'offer' => '25%',
            'del' => 15.0,
            'cat' => 'Standart',
            'cores' => 2,
            'ram' => 6,
            'nvme' => 30,
            'tarffic' => 'Unlimited traffic'
        ],
    ];

    public function render()
    {
        return view('livewire.section.price-list');
    }
}
