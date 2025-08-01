<?php

namespace App\Livewire;

use App\Livewire\Forms\WeddingForm;
use App\Models\User;
use Livewire\Component;

class WeddingComments extends Component
{
    public WeddingForm $form;

    public function setComment()
    {
        $this->form->comment();
    }

    public function render()
    {
        $user = User::find(1);
        $guest = $user->guests->all();

        dd($user, $guest);

        return view('livewire.wedding-comments');
    }
}
