<?php

namespace App\Livewire;

use Livewire\Component;

class DTable extends Component
{

    public $serverModels = [
        [
            'flag' => 'images/svgs/de.svg',
            'active' => true,
            'countx' => '1x',
            'cpu' => 'Intel Xeon E5-2609v2',
            'bench' => 3666,
            'cores' => 4,
            'base' => '2.5 GHz',
            'turbo' => '2.5 GHz',
            'ram' => '32 GB',
            'ssd' => '1x240 GB',
            'ddos' => true,
            'price' => '$12.50'
        ],
        [
            'flag' => 'images/svgs/de.svg',
            'active' => true,
            'countx' => '1x',
            'cpu' => 'Intel Xeon E5-2609v2',
            'bench' => 3666,
            'cores' => 4,
            'base' => '2.5 GHz',
            'turbo' => '2.5 GHz',
            'ram' => '32 GB',
            'ssd' => '1x240 GB',
            'ddos' => true,
            'price' => '$12.50'
        ],
        [
            'flag' => 'images/svgs/de.svg',
            'active' => true,
            'countx' => '1x',
            'cpu' => 'Intel Xeon E5-2609v2',
            'bench' => 3666,
            'cores' => 4,
            'base' => '2.5 GHz',
            'turbo' => '2.5 GHz',
            'ram' => '32 GB',
            'ssd' => '1x240 GB',
            'ddos' => true,
            'price' => '$12.50'
        ],
        [
            'flag' => 'images/svgs/de.svg',
            'active' => true,
            'countx' => '1x',
            'cpu' => 'Intel Xeon E5-2609v2',
            'bench' => 3666,
            'cores' => 4,
            'base' => '2.5 GHz',
            'turbo' => '2.5 GHz',
            'ram' => '32 GB',
            'ssd' => '1x240 GB',
            'ddos' => true,
            'price' => '$12.50'
        ],
        [
            'flag' => 'images/svgs/de.svg',
            'active' => true,
            'countx' => '1x',
            'cpu' => 'Intel Xeon E5-2609v2',
            'bench' => 3666,
            'cores' => 4,
            'base' => '2.5 GHz',
            'turbo' => '2.5 GHz',
            'ram' => '32 GB',
            'ssd' => '1x240 GB',
            'ddos' => true,
            'price' => '$12.50'
        ],
        [
            'flag' => 'images/svgs/de.svg',
            'active' => true,
            'countx' => '1x',
            'cpu' => 'Intel Xeon E5-2609v2',
            'bench' => 3666,
            'cores' => 4,
            'base' => '2.5 GHz',
            'turbo' => '2.5 GHz',
            'ram' => '32 GB',
            'ssd' => '1x240 GB',
            'ddos' => true,
            'price' => '$12.50'
        ],
        [
            'flag' => 'images/svgs/de.svg',
            'active' => true,
            'countx' => '1x',
            'cpu' => 'Intel Xeon E5-2609v2',
            'bench' => 3666,
            'cores' => 4,
            'base' => '2.5 GHz',
            'turbo' => '2.5 GHz',
            'ram' => '32 GB',
            'ssd' => '1x240 GB',
            'ddos' => true,
            'price' => '$12.50'
        ],
        [
            'flag' => 'images/svgs/de.svg',
            'active' => true,
            'countx' => '1x',
            'cpu' => 'Intel Xeon E5-2609v2',
            'bench' => 3666,
            'cores' => 4,
            'base' => '2.5 GHz',
            'turbo' => '2.5 GHz',
            'ram' => '32 GB',
            'ssd' => '1x240 GB',
            'ddos' => true,
            'price' => '$12.50'
        ],
        [
            'flag' => 'images/svgs/de.svg',
            'active' => true,
            'countx' => '1x',
            'cpu' => 'Intel Xeon E5-2609v2',
            'bench' => 3666,
            'cores' => 4,
            'base' => '2.5 GHz',
            'turbo' => '2.5 GHz',
            'ram' => '32 GB',
            'ssd' => '1x240 GB',
            'ddos' => true,
            'price' => '$12.50'
        ],
        [
            'flag' => 'images/svgs/de.svg',
            'active' => true,
            'countx' => '1x',
            'cpu' => 'Intel Xeon E5-2609v2',
            'bench' => 3666,
            'cores' => 4,
            'base' => '2.5 GHz',
            'turbo' => '2.5 GHz',
            'ram' => '32 GB',
            'ssd' => '1x240 GB',
            'ddos' => true,
            'price' => '$12.50'
        ],
    ];

    public $serverHead = [
        [
            'name' => 'Country',
            'slotName' => 'country',
            'mobileIndex' => 0,
        ],
        [
            'name' => 'CPU',
            'slotName' => 'cpu',
            'mobileIndex' => 2,
        ],
        [
            'name' => 'Bench',
            'slotName' => 'bench',
            'mobileIndex' => 3,
        ],
        [
            'name' => 'Cores',
            'slotName' => 'cores',
            'mobileIndex' => 4,
        ],
        [
            'name' => 'Base clock',
            'slotName' => 'base',
            'mobileIndex' => 5,
        ],
        [
            'name' => 'Turbo Clock',
            'slotName' => 'turbo',
            'mobileIndex' => 6,
        ],
        [
            'name' => 'RAM',
            'slotName' => 'ram',
            'mobileIndex' => 7,
        ],
        [
            'name' => 'SSD',
            'slotName' => 'ssd',
            'mobileIndex' => 8,
        ],
        [
            'name' => 'DDoS',
            'slotName' => 'ddos',
            'mobileIndex' => 9,
        ],
        [
            'name' => 'Monthly price',
            'slotName' => 'monthly',
            'mobileIndex' => 1,
        ]
    ];

    public function render()
    {
        return view('livewire.d-table');
    }
}
