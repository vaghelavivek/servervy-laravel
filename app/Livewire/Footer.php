<?php

namespace App\Livewire;

use Livewire\Component;

class Footer extends Component
{

    public $activeLocationTab = 2;

    public $productsList = [
        "Buy VPS",
        "Buy RDP",
        "Game VPS",
        "SSD VPS",
        "MikroTik VPS",
        "Forex VPS"
    ];

    public $locationList = [
        [
            'location' => 'USA',
            'list' => [
                "Europe VPS",
                "Europe VPS",
                "UK VPS",
                "London VPS",
                "France VPS",
                "Roubaix VPS",
            ],
        ],
        [
            'location' => 'USA',
            'list' => [
                "Europe VPS",
                "Europe VPS",
                "UK VPS",
                "London VPS",
                "France VPS",
                "Roubaix VPS",
            ],
        ],
        [
            'location' => 'USA',
            'list' => [
                "Europe VPS",
                "Europe VPS",
                "UK VPS",
                "London VPS",
                "France VPS",
                "Roubaix VPS",
            ],
        ],
        [
            'location' => 'USA',
            'list' => [
                "Europe VPS",
                "Europe VPS",
                "UK VPS",
                "London VPS",
                "France VPS",
                "Roubaix VPS",
            ],
        ],
        [
            'location' => 'USA',
            'list' => [
                "Europe VPS",
                "Europe VPS",
                "UK VPS",
                "London VPS",
                "France VPS",
                "Roubaix VPS",
            ],
        ],
    ];

    public $resourcesList = [
        "Best Forex VPS",
        "Best Windows VPS",
        "Best Linux VPS",
        "Best RDP Provider",
    ];

    public $osList = [
        "Windows VM",
        "OpenVPN VM",
        "Ubuntu VM",
        "AlmaLinux VM",
        "Debian VM",
        "Fedora VM",
    ];

    public $companyList = [
        "About Us",
        "Contact Us",
        "FAQ",
        "Blog",
        "Customer Reviews",
        "Privacy Policy",
        "Terms of Service",
    ];

    public function activeTabChange($index) {
        $this->activeLocationTab = $index;
    }

    public function render()
    {
        return view('livewire.footer');
    }
}
