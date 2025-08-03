<?php

namespace App\Livewire;

use App\Livewire\Forms\WeddingForm;
use App\Models\Comment;
use Livewire\Component;
use Livewire\WithPagination;

class WeddingComments extends Component
{
    use WithPagination;

    public WeddingForm $form;
    public $guest;

    public function mount($guest = '')
    {
        if ($guest) {
            $this->guest = collect($guest);
            $this->form->setValue($this->guest);
        }
    }

    public function setComment()
    {
        $this->form->comment();
    }

    // #[Computed()]
    // protected function comments()
    // {
    //     return Comment::with('guests')
    //         ->orderBy('created_at', 'desc')
    //         ->paginate(5);
    // }

    public function render()
    {
        $comments = Comment::with('guests')
            ->orderBy('created_at', 'desc')
            ->paginate(5);

        return view('livewire.wedding-comments', compact([
            'comments'
        ]));
    }
}
