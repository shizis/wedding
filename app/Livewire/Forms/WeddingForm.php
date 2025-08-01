<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class WeddingForm extends Form
{
    public $name = '';
    public $message = '';
    public $attendance = '';

    protected function rules()
    {
        return [
            'name' => ['required'],
            'message' => ['required'],
            'attendance' => ['required'],
        ];
    }

    public function comment()
    {
        $this->validate();
        dd($this);
    }
}
