<?php

namespace App\Livewire;

use Livewire\Component;

class WeddingHero extends Component
{
    public $guest;
    public $hero;

    public function mount($guest = '')
    {
        $this->guest = $guest;
    }

    public function render()
    {
        return view('livewire.wedding-hero');
    }
}
