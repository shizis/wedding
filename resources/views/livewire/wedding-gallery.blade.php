<section class="mx-auto mt-10 w-full max-w-screen-xl" id="our_wedding">
    <div class="flex w-full flex-col px-4 text-center">
        <div class="w-fit self-center">
            <h2 class="font-italianno text-5xl text-black lg:text-6xl">
                Gallery
            </h2>
        </div>

        <!-- Image Grid -->
        <div class="mt-6 grid grid-cols-2 gap-4 md:grid-cols-3">
            @foreach ($media as $index => $img)
                <div class="group relative cursor-pointer" x-on:click="$wire.openModal({{ $index }})"
                    wire:key="{{ $img->id }}">
                    <div
                        class="aspect-square overflow-hidden rounded-lg shadow-md transition-transform duration-300 hover:scale-105">
                        <img src="{{ asset($img->path) }}" alt="Gallery image {{ $index + 1 }}"
                            class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110">
                    </div>
                    <!-- Hover overlay -->
                    <div
                        class="absolute inset-0 flex items-center justify-center rounded-lg bg-black/20 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                        <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                        </svg>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Modal -->
    @teleport('body')
        <div x-data="{
            show: @entangle('showModal'),
            selectedIndex: @entangle('selectedImageIndex'),
            images: @js($media->toArray()),
            handleKeydown(event) {
                if (!this.show) return;
                if (event.key === 'Escape') {
                    $wire.closeModal();
                } else if (event.key === 'ArrowLeft') {
                    $wire.previousImage();
                } else if (event.key === 'ArrowRight') {
                    $wire.nextImage();
                }
            }
        }" x-show="show" x-cloak x-init="$watch('show', value => {
            if (value) {
                document.body.style.overflow = 'hidden';
                $el.focus();
            } else {
                document.body.style.overflow = 'auto';
            }
        })" @keydown.window="handleKeydown($event)"
            tabindex="0" class="fixed inset-0 z-50 flex items-center justify-center bg-black/80 backdrop-blur-sm"
            @click.self="$wire.closeModal()">

            <!-- Modal Content -->
            <div class="relative mx-4 flex max-h-[90vh] max-w-7xl items-center justify-center">
                <!-- Close Button -->
                <button @click="$wire.closeModal()"
                    class="absolute right-4 top-4 z-10 text-white transition-colors duration-200 hover:text-gray-300">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>

                <!-- Previous Button -->
                <button @click="$wire.previousImage()"
                    class="absolute left-4 z-10 rounded-full bg-black/30 p-2 text-white transition-colors duration-200 hover:bg-black/50 hover:text-gray-300"
                    x-show="images.length > 1">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>

                <!-- Next Button -->
                <button @click="$wire.nextImage()"
                    class="absolute right-4 z-10 rounded-full bg-black/30 p-2 text-white transition-colors duration-200 hover:bg-black/50 hover:text-gray-300"
                    x-show="images.length > 1">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>

                <!-- Image -->
                <div class="relative">
                    <img :src="'{{ asset('') }}' + images[selectedIndex].path"
                        :alt="'Gallery image ' + (selectedIndex + 1)"
                        class="max-h-[90vh] max-w-full rounded-lg object-contain shadow-2xl"
                        x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95"
                        x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">

                    <!-- Image Counter -->
                    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 transform rounded-full bg-black/50 px-3 py-1 text-sm text-white"
                        x-show="images.length > 1">
                        <span x-text="selectedIndex + 1"></span> / <span x-text="images.length"></span>
                    </div>
                </div>
            </div>
        </div>
    @endteleport
</section>
