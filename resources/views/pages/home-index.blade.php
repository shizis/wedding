<x-app-layout>

    <livewire:wedding-hero class="z-50" :guest="$guest ?? ''" :hero="$media[0]->path" />

    <audio id="music" preload="auto">
        <source src="{{ asset('audio/TiaraAndini,ArsyWidianto-LaguPernikahanKita.mp3') }}" type="audio/mpeg">
    </audio>
    <!-- Floating Music Control Button -->
    <div id="musicControl"
        class="fixed bottom-5 right-5 z-30 cursor-pointer rounded-full bg-rose-400 p-3 text-white shadow-lg hover:bg-rose-500">
        <svg id="playIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <svg id="pauseIcon" xmlns="http://www.w3.org/2000/svg" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M10 9v6m4-6v6m7-3a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
    </div>

    <section id="first">
        <div class="mx-auto max-w-screen-md px-4 pt-8 text-center">
            <div class="" data-observe>
                <flux:heading level="2" data-class-in="visible translate-y-0 opacity-100"
                    data-class-out="invisble translate-y-20 opacity-0"
                    class="font-amiri mb-8 translate-y-20 transform text-lg text-black opacity-0 transition-all delay-200 duration-1000 ease-in-out md:text-xl lg:text-2xl">
                    &#65021;
                </flux:heading>
                <flux:text
                    class="mb-4 translate-y-20 text-pretty text-sm text-gray-700 opacity-0 delay-300 duration-1000 sm:text-base"
                    data-class-in="visible translate-y-0 opacity-100"
                    data-class-out="invisble translate-y-20 opacity-0">
                    "Di antara tanda-tanda (kebesaran)-Nya ialah bahwa Dia menciptakan
                    pasangan-pasangan untukmu dari (jenis) dirimu sendiri agar kamu merasa
                    tenteram kepadanya. Dia menjadikan di antaramu rasa cinta dan kasih
                    sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat
                    tanda-tanda (kebesaran Allah) bagi kaum yang berpikir"
                </flux:text>
                <flux:text
                    class="translate-y-25 delay-350 text-sm italic text-gray-500 opacity-0 duration-1000 sm:text-base"
                    data-class-in="visible translate-y-0 opacity-100"
                    data-class-out="invisble translate-y-25 opacity-0">
                    QS. Ar-rum:21
                </flux:text>
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
        <div class="flex items-center justify-center py-6 text-xs text-gray-600">
            Made with <span class="mx-1"><x-heroicon-s-heart class="size-5 shrink-0 text-red-600" /></span> By
            <span class="mx-1"><a href="">ZiqfaAshshiddiqi</a></span>
        </div>
    </footer>

</x-app-layout>

<script>
    const musicPlayer = document.getElementById('music');
    const openInvitationBtn = document.querySelector('a[href="#first"]');
    const body = document.body;
    const musicControl = document.getElementById('musicControl');
    const playIcon = document.getElementById('playIcon');
    const pauseIcon = document.getElementById('pauseIcon');

    // Kembali ke tampilan awal saat refresh dan hilangkan "#first" dari URL
    window.onload = function() {
        window.scrollTo(0, 0);

        // // Menghilangkan "#first" dari URL jika ada
        // if (window.location.hash === "#first") {
        //     history.replaceState(null, document.title, window.location.pathname + window.location.search);
        // }
    };
    // Pastikan scroll ke atas saat halaman dimuat
    window.history.scrollRestoration = "manual";

    // Nonaktifkan scrolling saat halaman dimuat
    body.style.overflow = 'hidden';

    function preventScroll(e) {
        e.preventDefault();
        e.stopPropagation();
        return false;
    }

    // Tambahkan event listener untuk mencegah scrolling
    window.addEventListener('wheel', preventScroll, {
        passive: false
    });
    window.addEventListener('touchmove', preventScroll, {
        passive: false
    });

    // Putar musik dan aktifkan scrolling saat tombol "buka undangan" diklik
    openInvitationBtn.addEventListener('click', function() {

        // Putar musik
        musicPlayer.play()
            .then(() => {
                playIcon.classList.add('hidden');
                pauseIcon.classList.remove('hidden');
            })
            .catch(error => {
                console.log('Autoplay gagal:', error);
            });

        // Aktifkan scrolling
        body.style.overflow = '';
        window.removeEventListener('wheel', preventScroll);
        window.removeEventListener('touchmove', preventScroll);

        // Sembunyikan tombol buka undangan
        // openInvitationBtn.parentElement.classList.remove('inline-flex');
        // openInvitationBtn.parentElement.classList.add('hidden');
    });

    // Toggle music play/pause dengan floating button
    musicControl.addEventListener('click', function() {
        if (musicPlayer.paused) {
            musicPlayer.play()
                .then(() => {
                    playIcon.classList.add('hidden');
                    pauseIcon.classList.remove('hidden');
                })
                .catch(error => {
                    console.log('Pemutaran gagal:', error);
                });
        } else {
            musicPlayer.pause();
            playIcon.classList.remove('hidden');
            pauseIcon.classList.add('hidden');
        }
    });

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
