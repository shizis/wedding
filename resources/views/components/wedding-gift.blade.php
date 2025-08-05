<section class="mx-auto mt-10 w-full max-w-(--breakpoint-md) px-4" id="our_wedding">
    <div class="flex w-full flex-col text-center">
        <div class="w-fit self-center">
            <h2 class="font-italianno text-5xl text-black">
                Wedding Gift
            </h2>
        </div>
        <div class="mx-auto mt-6 max-w-md">
            <p class="text-sm text-gray-700">
                Bagi Bapak/Ibu/Saudara/i yang ingin mengirimkan hadiah
                pernikahan
                dapat melalui virtual
                atau e-wallet di
                bawah ini:</p>
        </div>
        <div x-data="{ open: false }" class="mt-4">
            <div class="grid justify-items-center">
                <button x-on:click="open = !open"
                    class="grid cursor-pointer grid-flow-col items-center gap-2 rounded-full bg-rose-400 px-4 py-2 text-white hover:bg-rose-500">
                    <x-lucide-gift class="size-6 shrink-0" />
                    <p class="text-sm">
                        Kirim Hadiah
                    </p>
                </button>
            </div>
            <div x-show="open" x-cloak
                class="bg-linear-to-t/oklch inset-shadow-sm relative z-10 mx-auto mt-4 grid h-max max-w-md gap-2 rounded-xl from-amber-400/50 to-[#f15a23]/50 p-4 shadow-lg backdrop-blur-sm">
                <div class="justify-self-end">
                    <img src="{{ url('images/BNI_logo.svg') }}" alt="" class="w-25 lg:w-30">
                </div>
                <div class="justify-self-start">
                    <img src="{{ url('images/chip-card') }}.png" alt="" class="lg:w-30 w-20">
                </div>
                <div class="ml-5 text-start text-black">
                    <p class="font-bold" id="bniNumber">1847753715</p>
                    <p>a/n <span class="font-semibold">Amanda Silviyana</span></p>
                </div>
                <div class="justify-self-end">
                    <div>
                        <button data-copy-button data-copy-target="bniNumber"
                            class="text-angga-laras-white inset-shadow-xs cursor-pointer rounded-full bg-orange-600 px-6 py-2 text-gray-100 shadow-sm hover:bg-orange-500">
                            Copy
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    // copy button
    document.querySelectorAll('[data-copy-button]').forEach(button => {
        button.addEventListener('click', function() {
            const targetId = this.dataset.copyTarget;
            const targetElement = document.getElementById(targetId);
            const textToCopy = targetElement.textContent.replace(/\s/g, '');

            navigator.clipboard.writeText(textToCopy).then(() => {
                // Visual feedback
                const originalText = this.innerHTML;
                this.innerHTML = 'Copied!';
                setTimeout(() => {
                    this.innerHTML = originalText;
                }, 2000);
            }).catch(err => {
                console.error('Failed to copy:', err);
            });

        })
    })
</script>
