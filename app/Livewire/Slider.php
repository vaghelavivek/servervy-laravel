<?php

namespace App\Livewire;

use Livewire\Component;

class Slider extends Component
{

    public $serverList = [
        [
            'svg' => 'images/svgs/window.svg',
            'head' => 'Windows VM',
            'cap' => 'Server'
        ],
        [
            'svg' => 'images/svgs/almalinux.svg',
            'head' => 'AlmaLinux VM',
            'cap' => 'Server'
        ],
        [
            'svg' => 'images/svgs/ubuntu.svg',
            'head' => 'Ubuntu VM',
            'cap' => 'Server'
        ],
        [
            'svg' => 'images/svgs/openvpn.svg',
            'head' => 'OpenVPN VM',
            'cap' => 'Server'
        ],
        [
            'svg' => 'images/svgs/debian.svg',
            'head' => 'Debian VM',
            'cap' => 'Server'
        ],
        [
            'svg' => 'images/svgs/fedora.svg',
            'head' => 'Fedora VM',
            'cap' => 'Server'
        ],
        [
            'svg' => 'images/svgs/rocky.svg',
            'head' => 'Rocky VM',
            'cap' => 'Server'
        ],
    ];

    // public function slideLeft() {
    //     $pushData = array_pop($this->serverList);
    // }

    public function render()
    {
        return view('livewire.slider');
    }
}
