<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\AdminCreateForm;
use App\Models\Guest;
use Livewire\Attributes\On;
use Livewire\Component;

class AdminGuest extends Component
{
    public $guests;
    public AdminCreateForm $form;

    public function setCreate()
    {
        dd($this);
        // $this->form->create();
    }

    public function render()
    {
        $this->guests = Guest::all();

        return view('livewire.admin.admin-guest');
    }
}
