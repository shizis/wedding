<?php

namespace App\Livewire\Forms;

use App\Models\Guest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Form;

class AdminCreateForm extends Form
{
    public $name;
    public $address;

    protected function rules()
    {
        return [
            'name' => [
                'required',
            ]
        ];
    }

    public function create()
    {
        $this->validate();

        if (!Auth::user()->hasRole('Super-Admin')) {
            return abort(403);
        }

        $data = [
            'user_id' => Auth::User()->id,
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'address' => $this->address,
        ];

        Guest::create($data);

        $this->name = '';
        $this->address = '';
    }
}
