<section class="mx-auto mt-10 w-full max-w-screen-xl" id="our_wedding">
    <div class="flex w-full flex-col px-4 text-center">
        <div class="w-fit self-center">
            <h2 class="font-italianno text-5xl text-black lg:text-6xl">
                Gallery
            </h2>
        </div>
        <div class="mt-6 grid grid-cols-3 grid-rows-3 gap-4">
            @foreach ($media as $img)
                <div class="size-full">
                    <img src="{{ asset($img->path) }}" alt=""
                        class="obeject-center size-full rounded-md object-cover">
                </div>
            @endforeach
        </div>
    </div>
</section>
