<?php

namespace App\Livewire\Forms;

use App\Models\Guest;
use Livewire\Attributes\Validate;
use Livewire\Form;

class AdminUpdateGuestForm extends Form
{
    public $name;

    public function update($id)
    {
        Guest::where('id', '=', $id)
            ->update(['name' => $this->name]);

        $this->name = '';
    }
}
