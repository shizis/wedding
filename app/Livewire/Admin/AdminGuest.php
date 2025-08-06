<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\AdminCreateForm;
use App\Livewire\Forms\AdminUpdateGuestForm;
use App\Models\Guest;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class AdminGuest extends Component
{
    use WithPagination, WithoutUrlPagination;

    public AdminCreateForm $form;
    public AdminUpdateGuestForm $updateForm;

    public function setCreate()
    {
        $this->form->create();
        $this->resetPage();
    }

    public function destroyGuest($id)
    {
        Guest::destroy($id);
    }

    public function setUpdate($id)
    {
        $this->updateForm->update($id);
        $this->resetPage();
    }

    public function render()
    {
        $guests = Guest::orderBy('created_at', 'desc')->paginate(10);

        return view('livewire.admin.admin-guest', compact([
            'guests'
        ]));
    }
}
