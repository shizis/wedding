<x-app-layout>

    <livewire:wedding-hero :guest="$guest ?? ''" :hero="$media[0]->path" />

    <section id="first">
        <div class="mx-auto max-w-screen-md px-4 pt-8 text-center">
            <div class="" data-observe>
                <p data-class-in="visible translate-y-0 opacity-100" data-class-out="invisble translate-y-20 opacity-0"
                    class="font-amiri duration-750 mb-8 translate-y-20 transform text-lg opacity-0 transition-all delay-200 ease-in-out md:text-xl lg:text-2xl">
                    &#65021;</p>
                <p class="duration-750 mb-4 translate-y-20 text-pretty text-sm opacity-0 delay-300 sm:text-base"
                    data-class-in="visible translate-y-0 opacity-100" data-class-out="invisble translate-y-20 opacity-0">
                    "Di antara tanda-tanda (kebesaran)-Nya ialah bahwa Dia menciptakan
                    pasangan-pasangan untukmu dari (jenis) dirimu sendiri agar kamu merasa
                    tenteram kepadanya. Dia menjadikan di antaramu rasa cinta dan kasih
                    sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat
                    tanda-tanda (kebesaran Allah) bagi kaum yang berpikir"
                </p>
                <p class="translate-y-25 delay-350 duration-750 text-sm italic text-gray-600 opacity-0 sm:text-base"
                    data-class-in="visible translate-y-0 opacity-100"
                    data-class-out="invisble translate-y-25 opacity-0">
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

<script>
    let lastScrollY;
    window.alpineScrollDirection = {
        isScrollingUp: false
    };

    document.addEventListener("scroll", (event) => {
        const currentScroll = window.scrollY;
        window.alpineScrollDirection.isScrollingUp = currentScroll < lastScrollY;
        lastScrollY = currentScroll;
    });

    // Enhanced intersection observer
    function intFunction(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                for (let i = 0; i < entry.target.children.length; i++) {
                    const classIn = entry.target.children[i].getAttribute('data-class-in');
                    const classOut = entry.target.children[i].getAttribute('data-class-out');
                    if (classOut) {
                        entry.target.children[i].classList.remove(...classOut.split(' '));
                    }
                    if (classIn) {
                        entry.target.children[i].classList.add(...classIn.split(' '));
                    }
                }
            } else if (window.alpineScrollDirection.isScrollingUp) {
                for (let i = 0; i < entry.target.children.length; i++) {
                    const classIn = entry.target.children[i].getAttribute('data-class-in');
                    const classOut = entry.target.children[i].getAttribute('data-class-out');
                    if (classOut) {
                        entry.target.children[i].classList.add(...classOut.split(' '));
                    }
                    if (classIn) {
                        entry.target.children[i].classList.remove(...classIn.split(' '));
                    }
                }
            }
        })
    }
    // Use better options for more control
    const options = {
        threshold: 0.1, // Element is considered visible when 10% is visible
        rootMargin: '0px 0px 0px 0px'
    }

    // Find all elements with 'intersect' class
    const intersectElements = document.querySelectorAll('[data-observe]');
    const observer = new IntersectionObserver(intFunction, options);

    // Observe all intersect elements
    intersectElements.forEach(element => {
        observer.observe(element);
    });
</script>
