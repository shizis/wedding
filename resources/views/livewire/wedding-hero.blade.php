<header class="h-svh max-h-svh w-full">
    <div class="relative">
        <div class="flex h-svh place-content-center" data-observe>
            <img src="{{ asset($hero) }}" alt="" data-class-in="visible translate-y-0 opacity-100"
                data-class-out="invisble -translate-y-50 opacity-0"
                class="-translate-y-50 h-svh max-h-svh w-full transform object-cover object-[50%_45%] opacity-0 transition-all delay-500 duration-1000 ease-in-out">
        </div>
        {{-- <div class="absolute inset-0 h-full bg-black/35"></div> --}}
        <div class="absolute inset-x-0 bottom-0 h-2/4 bg-gradient-to-t from-black to-transparent"></div>
        <div class="absolute inset-x-0 top-0 h-1/4 bg-gradient-to-b from-black/50 to-transparent"></div>
        <div class="absolute inset-x-0 bottom-0 mx-auto flex h-full place-content-center">
            <div class="relative grid w-full grid-cols-12 grid-rows-2 p-10">
                <div class="justify-self-center-safe col-span-full row-span-1 lg:justify-self-start">
                    <div class="flex w-fit flex-col" data-observe>
                        <div class="mb-1 -translate-x-40 transform opacity-0 transition-all delay-300 duration-1000 ease-in-out"
                            data-class-in="visible translate-x-0 opacity-100"
                            data-class-out="invisble -translate-x-40 opacity-0">
                            <flux:text class="text-shadow-sm text-sm font-normal text-gray-50 sm:text-base lg:text-lg">
                                The Wedding of
                            </flux:text>
                        </div>
                        <flux:heading level="1"
                            class="font-italianno text-shadow-sm -translate-x-30 transform text-7xl text-white opacity-0 transition-all delay-200 duration-1000 ease-in-out sm:text-8xl lg:text-9xl"
                            data-class-in="visible translate-x-0 opacity-100"
                            data-class-out="invisble -translate-x-30 opacity-0">
                            Ziqfa & Silvi
                        </flux:heading>
                    </div>
                </div>
                <div
                    class="col-span-full row-span-1 self-end justify-self-center pb-20 text-center lg:col-span-11 lg:justify-self-end lg:text-start">
                    <div class="space-y-4" data-observe>
                        <flux:text data-class-in="visible translate-y-0 opacity-100"
                            data-class-out="invisble translate-y-10 opacity-0"
                            class="translate-y-10 transform text-xs text-gray-200 opacity-0 transition-all delay-200 duration-1000 ease-in-out sm:text-sm lg:text-base">
                            Kepada Yth. Bapak/Ibu/Saudara/i
                        </flux:text>
                        <div class="w-full translate-y-20 transform opacity-0 transition-all delay-300 duration-1000 ease-in-out"
                            data-class-in="visible translate-y-0 opacity-100"
                            data-class-out="invisble translate-y-20 opacity-0">
                            <flux:heading level="2"
                                class="text-base font-semibold text-white sm:text-lg lg:text-xl" id="guessName">
                                {{ $guest->name ?? $guest }}
                            </flux:heading>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-x-0 bottom-10 w-full animate-bounce text-center">
                    <flux:button class="text-white" as="a" variant="ghost" href="#first" target="_self"
                        square="false" class="hover:bg-transparent hover:dark:bg-transparent">
                        <flux:icon.arrow-down class="size-5 text-white lg:size-6" />
                    </flux:button>
                </div>
            </div>
        </div>
    </div>
</header>
