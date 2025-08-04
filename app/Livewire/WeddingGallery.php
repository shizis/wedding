<?php

namespace App\Livewire;

use App\Models\Media;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class WeddingGallery extends Component
{
    public $showModal = false;
    public $selectedImageIndex = 0;
    public $media;

    public function mount()
    {
        $this->media = Cache::remember('media', now()->addMonth(), function () {
            return Media::whereIn('id', [1, 2, 3, 4, 5, 6, 7, 8, 9])->get();
        });
    }

    public function openModal($index)
    {
        $this->selectedImageIndex = $index;
        $this->showModal = true;
        // dd($this);

    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function previousImage()
    {
        $this->selectedImageIndex = ($this->selectedImageIndex - 1 + count($this->media)) % count($this->media);
    }

    public function nextImage()
    {
        $this->selectedImageIndex = ($this->selectedImageIndex + 1) % count($this->media);
    }

    public function render()
    {
        return view('livewire.wedding-gallery');
    }
}
