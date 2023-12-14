<?php

namespace App\Livewire;

use Livewire\Component;

class STable extends Component
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
            'active' => false,
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
            'active' => false,
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
            'active' => false,
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
            'active' => false,
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
            'active' => false,
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
            'active' => false,
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
            'active' => false,
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
            'active' => false,
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
            'mobileIndex' => 1,
            'smHidden' => false,
        ],
        [
            'name' => 'CPU',
            'slotName' => 'cpu',
            'mobileIndex' => 3,
            'smHidden' => false,
        ],
        [
            'name' => 'Bench',
            'slotName' => 'bench',
            'mobileIndex' => 4,
            'smHidden' => false,
        ],
        [
            'name' => 'Cores',
            'slotName' => 'cores',
            'mobileIndex' => 5,
            'smHidden' => false,
        ],
        [
            'name' => 'Base clock',
            'slotName' => 'base',
            'mobileIndex' => 6,
            'smHidden' => false,
        ],
        [
            'name' => 'Turbo Clock',
            'slotName' => 'turbo',
            'mobileIndex' => 7,
            'smHidden' => false,
        ],
        [
            'name' => 'RAM',
            'slotName' => 'ram',
            'mobileIndex' => 8,
            'smHidden' => false,
        ],
        [
            'name' => 'SSD',
            'slotName' => 'ssd',
            'mobileIndex' => 9,
            'smHidden' => false,
        ],
        [
            'name' => 'DDoS',
            'slotName' => 'ddos',
            'mobileIndex' => 10,
            'smHidden' => false,
        ],
        [
            'name' => 'Monthly price',
            'slotName' => 'monthly',
            'mobileIndex' => 2,
            'smHidden' => false,
        ],
        [
            'name' => 'Action',
            'slotName' => 'action',
            'lgDisplay' => false,
            'smHidden' => true,
            'mobileIndex' => 11
        ],
    ];

    public function render()
    {
        return view('livewire.s-table');
    }
}
