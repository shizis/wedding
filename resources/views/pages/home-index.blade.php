<x-app-layout>
    <header class="z-120 h-svh w-full">
        <div class="relative">
            <div class="flex h-full place-content-center">
                <img src="{{ asset('storage/main_image_2.jpg') }}" alt=""
                    class="h-full max-h-svh w-full object-cover object-[50%_45%]">
            </div>
            {{-- <div class="absolute inset-0 h-full bg-black/35"></div> --}}
            <div class="absolute inset-x-0 bottom-0 h-3/4 bg-gradient-to-t from-black to-transparent"></div>
            <div class="absolute inset-x-0 bottom-0 mx-auto flex h-full place-content-center">
                <div class="relative grid w-full grid-cols-12 grid-rows-2 p-10">
                    <div class="col-span-full row-span-1 self-end">
                        <div class="flex w-fit flex-col">
                            <div class="mb-1">
                                <p class="text-shadow-xs text-2xl font-normal text-white">
                                    The Wedding of
                                </p>
                            </div>
                            <h1 class="font-italianno text-shadow-xs text-9xl text-white">
                                Ziqfa & Silvi
                            </h1>
                            <div class="self-center">
                                <p class="text-xl text-white">08.08.2025</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-11 row-span-1 self-end justify-self-end pb-20">
                        <div class="space-y-4">
                            <p class="text-sm text-white underline underline-offset-8">Kepada Bapak/Ibu/Saudara/i </p>
                            <div class="w-full">
                                <p class="text-xl font-bold capitalize text-white" id="guessName">
                                    {{ Auth::user()->name ?? 'Name' }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="absolute inset-x-0 bottom-10 w-full animate-bounce text-center">
                        <a href="#first" target="_self" class="inline-flex text-white">
                            <x-heroicon-s-arrow-small-down class="size-7" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div id="first" class="mx-auto max-w-screen-md snap-none p-4 text-center">
            <div class="mt-10 space-y-8">
                <p class="font-amiri text-2xl">&#65021;</p>
                <p class="text-pretty text-base">
                    "Di antara tanda-tanda (kebesaran)-Nya ialah bahwa Dia menciptakan
                    pasangan-pasangan untukmu dari (jenis) dirimu sendiri agar kamu merasa
                    tenteram kepadanya. Dia menjadikan di antaramu rasa cinta dan kasih
                    sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat
                    tanda-tanda (kebesaran Allah) bagi kaum yang berpikir"
                </p>
                <p class="text-sm italic text-gray-600 md:text-base">
                    QS. Ar-rum:21
                </p>
            </div>
        </div>
    </section>

    <x-our-wedding></x-our-wedding>

    <x-wedding-events></x-wedding-events>

    <section class="mx-auto mt-10 w-full max-w-screen-md" id="our_wedding">
        <div class="flex w-full flex-col text-center">
            <div class="w-fit self-center">
                <h2 class="font-italianno text-5xl text-black">
                    Love Story
                </h2>
            </div>
        </div>
    </section>
    <section class="mx-auto mt-10 w-full max-w-screen-md" id="our_wedding">
        <div class="flex w-full flex-col text-center">
            <div class="w-fit self-center">
                <h2 class="font-italianno text-5xl text-black">
                    Gallery
                </h2>
            </div>
        </div>
    </section>

    <livewire:wedding-comments />

    <section class="mx-auto mt-10 w-full max-w-screen-md" id="our_wedding">
        <div class="flex w-full flex-col text-center">
            <div class="w-fit self-center">
                <h2 class="font-italianno text-5xl text-black">
                    Wedding Gift
                </h2>
            </div>
        </div>
    </section>
    <footer>
        <div class="flex items-center justify-center py-6 text-sm text-gray-600">
            Made with <span class="mx-1"><x-heroicon-s-heart class="size-5 shrink-0 text-red-600" /></span> By
            <span class="mx-1"><a href="">ZiqfaAshshiddiqi</a></span>
        </div>
    </footer>
</x-app-layout>
