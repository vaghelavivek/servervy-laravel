<?php

namespace App\Livewire;

use Livewire\Component;

class DeployeServer extends Component
{

    public $deployServerList = [
        [
            'img' => 'images/svgs/arch.svg',
            'title' => 'Arch Linux'
        ],
        [
            'img' => 'images/svgs/debian.svg',
            'title' => 'Debian'
        ],
        [
            'img' => 'images/svgs/fedora2.svg',
            'title' => 'Fedora'
        ],
        [
            'img' => 'images/svgs/cent.svg',
            'title' => 'CentOS'
        ],
        [
            'img' => 'images/svgs/alma.svg',
            'title' => 'Alma Linux'
        ],
        [
            'img' => 'images/svgs/windows.svg',
            'title' => 'Windows'
        ],
        [
            'img' => 'images/svgs/fedora-core.svg',
            'title' => 'Fedora CoreOS'
        ],
        [
            'img' => 'images/svgs/ubuntu.svg',
            'title' => 'Ubuntu'
        ],
        [
            'img' => 'images/svgs/rocky.svg',
            'title' => 'Rocky Linux'
        ],
        [
            'img' => 'images/svgs/window-core.svg',
            'title' => 'Windows Core'
        ],
        [
            'img' => 'images/svgs/flatcar.svg',
            'title' => 'Flatcar Container Linux'
        ],
        [
            'img' => 'images/svgs/open-bsd.svg',
            'title' => 'OpenBSD'
        ],
        [
            'img' => 'images/svgs/free-bsd.svg',
            'title' => 'FreeBSD'
        ],
    ];

    public function render()
    {
        return view('livewire.deploye-server');
    }
}
