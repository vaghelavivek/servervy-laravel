<?php

namespace App\Livewire\Section;

use Livewire\Component;

class Server extends Component
{

    public $serverTypes = [
        [
            'svg' => 'images/svgs/dedicated.svg',
            'title' => 'Dedicated Servers',
            'price' => 25.00
        ],
        [
            'svg' => 'images/svgs/storage.svg',
            'title' => 'Storage Servers',
            'price' => 12.50
        ],
        [
            'svg' => 'images/svgs/streaming.svg',
            'title' => 'Streaming Servers',
            'price' => 50.00
        ],
    ];

    public $activeTab = 0;

    public function tabActive($index) {
        $this->activeTab = $index;
    }

    public function render()
    {
        return view('livewire.section.server');
    }
}
