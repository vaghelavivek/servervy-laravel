<?php

namespace App\Livewire\Section;

use Livewire\Component;

class Benifits extends Component
{

    public $benifitsData = [
        [
            'img' => 'images/svgs/experience.svg',
            'title' => '10 years',
            'caption' => 'Experience'
        ],
        [
            'img' => 'images/svgs/money-back.svg',
            'title' => '7 days',
            'caption' => 'Money Back Guarantee'
        ],
        [
            'img' => 'images/svgs/online-support.svg',
            'title' => '24/7',
            'caption' => 'Online Support'
        ],
        [
            'img' => 'images/svgs/happy-customer.svg',
            'title' => '12K+',
            'caption' => 'Happy Customers'
        ],
        [
            'img' => 'images/svgs/uptime.svg',
            'title' => '99.95%',
            'caption' => 'Uptime'
        ],
    ];

    public function render()
    {
        return view('livewire.section.benifits');
    }
}
