<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class AdminGuestList extends Component
{
    public $guests;

    public function render()
    {
        return view('livewire.admin.admin-guest-list');
    }
}
