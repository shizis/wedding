<x-app-layout>

    <livewire:wedding-hero :guest="$guest ?? ''" />

    <section>
        <div id="first" class="mx-auto max-w-screen-md snap-none px-4 text-center">
            <div class="">
                <p class="font-amiri my-6 text-base sm:text-lg md:text-xl lg:text-2xl">&#65021;</p>
                <p class="mb-4 text-pretty text-sm sm:text-base">
                    "Di antara tanda-tanda (kebesaran)-Nya ialah bahwa Dia menciptakan
                    pasangan-pasangan untukmu dari (jenis) dirimu sendiri agar kamu merasa
                    tenteram kepadanya. Dia menjadikan di antaramu rasa cinta dan kasih
                    sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat
                    tanda-tanda (kebesaran Allah) bagi kaum yang berpikir"
                </p>
                <p class="text-sm italic text-gray-600 sm:text-base">
                    QS. Ar-rum:21
                </p>
            </div>
        </div>
    </section>

    <x-our-wedding></x-our-wedding>

    <x-wedding-events></x-wedding-events>

    <x-wedding-story></x-wedding-story>

    <livewire:wedding-gallery></livewire:wedding-gallery>

    <livewire:wedding-comments :guest="$guest ?? ''" />

    <x-wedding-gift></x-wedding-gift>

    <footer class="mt-6">
        <div class="flex items-center justify-center py-6 text-sm text-gray-600">
            Made with <span class="mx-1"><x-heroicon-s-heart class="size-5 shrink-0 text-red-600" /></span> By
            <span class="mx-1"><a href="">ZiqfaAshshiddiqi</a></span>
        </div>
    </footer>
</x-app-layout>
