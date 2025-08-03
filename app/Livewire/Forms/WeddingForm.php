<?php

namespace App\Livewire\Forms;

use App\Models\Comment;
use Livewire\Attributes\Validate;
use Livewire\Form;

class WeddingForm extends Form
{
    public $guest;
    public $message;
    public $attendance = '';
    public $id;

    protected function rules()
    {
        return [
            'guest' => [
                'required',
                'exists:App\Models\Guest,name',
                'max:255'
            ],
            'message' => [
                'required',
                'max:255'
            ],
            'attendance' => [
                'required',
                'in:absent,attend'
            ],
        ];
    }

    public function comment()
    {
        $this->validate();
        Comment::create([
            'guest_id' => $this->id,
            'comment' => $this->message,
            'attendance' => $this->attendance
        ]);
    }

    public function updated()
    {
        dd($this);
    }

    public function setValue($guest)
    {
        $this->guest = $guest['name'];
        $this->id = $guest['id'];
    }
}
