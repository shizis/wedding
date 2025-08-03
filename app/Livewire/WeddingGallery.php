<?php

namespace App\Livewire;

use App\Models\Media;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class WeddingGallery extends Component
{
    public function render()
    {
        $media = Cache::remember('media', now()->addMonth(), function () {
            return Media::get();
        });

        return view('livewire.wedding-gallery', compact([
            'media'
        ]));
    }
}
