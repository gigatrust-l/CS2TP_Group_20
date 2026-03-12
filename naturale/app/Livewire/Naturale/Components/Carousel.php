<?php

namespace App\Livewire\Naturale\Components;

use Livewire\Component;

class Carousel extends Component
{
    public array $slides = [];

    public string $text = '';

    public bool $auto = true;

    public string $fit = 'cover';

    public string $height = 'full';

    public ?string $link = null;
    
    public bool $dots = true;

    public function mount(&$slides): void
    {
        $this->slides = $slides;
    }

    public function render()
    {
        return view('livewire.naturale.components.carousel');
    }
}
