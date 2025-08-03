<section class="mx-auto mt-10 w-full max-w-screen-md" id="our_wedding">
    <div class="flex w-full flex-col text-center">
        <div class="w-fit self-center">
            <h2 class="font-italianno text-5xl text-black">
                Wedding Gift
            </h2>
        </div>
        <div class="mx-auto mt-6 max-w-md">
            <p class="text-sm">
                Bagi Bapak/Ibu/Saudara/i yang ingin mengirimkan hadiah
                pernikahan
                dapat melalui virtual
                atau e-wallet di
                bawah ini:</p>
        </div>
        <div x-data="{ open: false }" class="mt-4">
            <div class="grid justify-items-center">
                <button x-on:click="open = !open"
                    class="bg-angga-laras-button-active text-angga-laras-black hover:bg-angga-laras-button-hover grid cursor-pointer grid-flow-col items-center gap-2 rounded-full px-6 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 11.25v8.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 1 0 9.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1 1 14.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                    </svg>
                    <p class="text-sm">
                        Kirim Hadiah
                    </p>
                </button>
            </div>
            <div x-show="open" x-cloak
                class="bg-linear-to-t/oklch inset-shadow-sm relative z-10 mx-auto mt-4 grid h-max max-w-md gap-2 rounded-xl from-amber-400/50 to-[#f15a23]/50 p-4 shadow-lg backdrop-blur-sm">
                <div class="justify-self-end">
                    <img src="{{ url('storage/BNI_logo.svg') }}" alt="" class="w-25 lg:w-30">
                </div>
                <div class="justify-self-start">
                    <img src="{{ url('storage/chip-card') }}.png" alt="" class="lg:w-30 w-20">
                </div>
                <div class="ml-5">
                    <p class="font-bold" id="bniNumber">172389</p>
                    <p>a/n <span class="font-semibold">Amanda Silviyana</span></p>
                </div>
                <div class="justify-self-end">
                    <div>
                        <button data-copy-button data-copy-target="bniNumber"
                            class="text-angga-laras-white inset-shadow-xs cursor-pointer rounded-full bg-orange-600 px-6 py-2 shadow-sm hover:bg-orange-500">
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
