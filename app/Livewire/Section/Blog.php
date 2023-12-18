<?php

namespace App\Livewire\Section;

use Livewire\Component;

class Blog extends Component
{

    public $blogItem = [
        [
            'img' => 'images/blog.png',
            'hosting' => 'Hosting',
            'avtar' => 'images/svgs/avtar.svg',
            'user' => 'Dmitry Udodov',
            'date' => 'May 2, 2023',
            'title' => 'First Mover Americas: Ether-Bitcoin Ratio on Track for Monthly',
            'caption' => '«Servervy» protects your funds with both centralized and decentralized methods.'
        ],
        [
            'img' => 'images/blog.png',
            'hosting' => 'Hosting',
            'avtar' => 'images/svgs/avtar.svg',
            'user' => 'Dmitry Udodov',
            'date' => 'May 2, 2023',
            'title' => 'First Mover Americas: Ether-Bitcoin Ratio on Track for Monthly',
            'caption' => '«Servervy» protects your funds with both centralized and decentralized methods.'
        ],
        [
            'img' => 'images/blog.png',
            'hosting' => 'Hosting',
            'avtar' => 'images/svgs/avtar.svg',
            'user' => 'Dmitry Udodov',
            'date' => 'May 2, 2023',
            'title' => 'First Mover Americas: Ether-Bitcoin Ratio on Track for Monthly',
            'caption' => '«Servervy» protects your funds with both centralized and decentralized methods.'
        ],
        [
            'img' => 'images/blog.png',
            'hosting' => 'Hosting',
            'avtar' => 'images/svgs/avtar.svg',
            'user' => 'Dmitry Udodov',
            'date' => 'May 2, 2023',
            'title' => 'First Mover Americas: Ether-Bitcoin Ratio on Track for Monthly',
            'caption' => '«Servervy» protects your funds with both centralized and decentralized methods.'
        ],
        [
            'img' => 'images/blog.png',
            'hosting' => 'Hosting',
            'avtar' => 'images/svgs/avtar.svg',
            'user' => 'Dmitry Udodov',
            'date' => 'May 2, 2023',
            'title' => 'First Mover Americas: Ether-Bitcoin Ratio on Track for Monthly',
            'caption' => '«Servervy» protects your funds with both centralized and decentralized methods.'
        ],
        [
            'img' => 'images/blog.png',
            'hosting' => 'Hosting',
            'avtar' => 'images/svgs/avtar.svg',
            'user' => 'Dmitry Udodov',
            'date' => 'May 2, 2023',
            'title' => 'First Mover Americas: Ether-Bitcoin Ratio on Track for Monthly',
            'caption' => '«Servervy» protects your funds with both centralized and decentralized methods.'
        ]
    ];

    public function render()
    {
        return view('livewire.section.blog');
    }
}
