<?php

namespace App\Livewire\Section;

use Livewire\Component;

class DFeature extends Component
{

    public $featuresList = [
        [
            'img' => 'images/svgs/setup.svg',
            'title' => 'Instant setup',
            'caption' => '«Servervy» protects your funds with both centralized and decentralized '
        ],
        [
            'img' => 'images/svgs/system.svg',
            'title' => 'Protection System',
            'caption' => '«Servervy» protects your funds with both centralized and decentralized '
        ],
        [
            'img' => 'images/svgs/ignore.svg',
            'title' => 'DMCA ignored',
            'caption' => '«Servervy» protects your funds with both centralized and decentralized '
        ],
        [
            'img' => 'images/svgs/crypto.svg',
            'title' => 'Pay with any crypto',
            'caption' => '«Servervy» protects your funds with both centralized and decentralized '
        ],
        [
            'img' => 'images/svgs/setup2.svg',
            'title' => 'Instant setup',
            'caption' => '«Servervy» protects your funds with both centralized and decentralized '
        ],
        [
            'img' => 'images/svgs/system2.svg',
            'title' => 'Protection System',
            'caption' => '«Servervy» protects your funds with both centralized and decentralized '
        ],
        [
            'img' => 'images/svgs/ignore2.svg',
            'title' => 'DMCA ignored',
            'caption' => '«Servervy» protects your funds with both centralized and decentralized '
        ],
        [
            'img' => 'images/svgs/crypto2.svg',
            'title' => 'Pay with any crypto',
            'caption' => '«Servervy» protects your funds with both centralized and decentralized '
        ],
    ];

    public function render()
    {
        return view('livewire.section.d-feature');
    }
}
