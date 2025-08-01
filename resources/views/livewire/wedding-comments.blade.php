<section class="mt-10 w-full bg-[#FFEAD8] py-10" id="our_wedding">
    <div class="mx-auto max-w-screen-md">
        <div class="flex w-full flex-col gap-y-6 text-center">
            <div class="w-fit self-center">
                <h2 class="font-italianno text-5xl text-black">
                    RSVP
                </h2>
            </div>
            <form wire:submit="setComment" id="set-comment"
                class="w-full rounded-lg border border-gray-300 bg-white p-4 text-start">
                <label for="name" class="block text-sm">
                    <span class="text-black after:ml-0.5 after:text-red-500 after:content-['*']">Nama</span>
                    <input type="text" wire:model='form.name' id="name" placeholder="Name..."
                        class="focus:outline-angga-laras-button-active mt-1 w-full rounded-md border border-gray-300 bg-white p-2 text-black">
                </label>
                @error('form.name')
                    <em class="mt-1 block text-sm italic text-red-500">{{ $message }}</em>
                @enderror
                <label for="message" class="mt-4 block text-sm">
                    <span class="text-black after:ml-0.5 after:text-red-500 after:content-['*']">Ucapan
                    </span>
                    <textarea wire:model="form.message" id="message" placeholder="Ucapan..."
                        class="focus:outline-angga-laras-button-active mt-1 block w-full rounded-md border border-gray-300 bg-white p-2 text-black"></textarea>
                </label>
                @error('form.message')
                    <em class="mt-1 block text-sm italic text-red-500">{{ $message }}</em>
                @enderror
                <label for="attendance" class="mt-8 block text-sm">
                    <span class="text-black after:ml-0.5 after:text-red-500 after:content-['*']">
                        Kehadiran
                    </span>
                    <select wire:model="form.attendance" id="attendance" placeholder="Konfirmasi Kehadiran..."
                        class="focus:outline-angga-laras-button-active mt-1 block w-full cursor-pointer appearance-none rounded-md border border-gray-300 bg-white p-2 text-black">
                        <option value="" disabled selected class="text-gray-300 disabled:text-gray-300">
                            Konfirmasi Kehadiran
                        </option>
                        <option value="attend">Hadir</option>
                        <option value="absent">Tidak Hadir</option>
                    </select>
                </label>
                @error('form.attendance')
                    <em class="mt-1 block text-sm italic text-red-500">{{ $message }}</em>
                @enderror

                <div class="flex w-full justify-end">
                    <button type="submit" form="set-comment"
                        class="mt-8 cursor-pointer self-end rounded-full bg-[#D76C82] px-6 py-2 text-center text-sm font-semibold text-white">Kirim</button>
                </div>
            </form>

        </div>

        <div class="mt-8 flex w-full flex-col">
            <span class="">Comments</span>
            <div class="rounded-lg border border-gray-300 bg-white p-4">
                <div class="flex w-full flex-col gap-y-6 text-start">
                    <div class="">
                        <div class="flex items-center gap-x-1">
                            <h3 class="text-black">Aril</h3>
                            <x-lucide-circle-check class="size-4 shrink-0 text-green-600" />
                        </div>
                        <p class="mb-2 mt-1 text-sm text-gray-800">Lorem ipsum, dolor sit amet consectetur adipisicing
                            elit.
                            Nihil
                            enim
                            necessitatibus provident
                            voluptate vel, soluta expedita quis excepturi praesentium repellat.
                        </p>
                        <span class="text-sm text-gray-500">2 Hari yang lalu</span>
                    </div>
                    <div class="">
                        <div class="flex items-center gap-x-1">
                            <h3 class="text-black">Lesmana</h3>
                            <x-lucide-circle-minus class="size-4 shrink-0 text-red-600" />
                        </div>
                        <p class="text-sm text-gray-800">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Nihil
                            enim
                            necessitatibus provident
                            voluptate vel, soluta expedita quis excepturi praesentium repellat.
                        </p>
                        <span class="text-sm text-gray-500">2 Hari yang lalu</span>
                    </div>
                    <div class="">
                        <div class="flex items-center gap-x-1">
                            <h3 class="text-black">Lesmana</h3>
                            <x-lucide-circle-minus class="size-4 shrink-0 text-red-600" />
                        </div>
                        <p class="text-sm text-gray-800">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Nihil
                            enim
                            necessitatibus provident
                            voluptate vel, soluta expedita quis excepturi praesentium repellat.
                        </p>
                        <span class="text-sm text-gray-500">2 Hari yang lalu</span>
                    </div>
                    <div class="">
                        <div class="flex items-center gap-x-1">
                            <h3 class="text-black">Lesmana</h3>
                            <x-lucide-circle-minus class="size-4 shrink-0 text-red-600" />
                        </div>
                        <p class="text-sm text-gray-800">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Nihil
                            enim
                            necessitatibus provident
                            voluptate vel, soluta expedita quis excepturi praesentium repellat.
                        </p>
                        <span class="text-sm text-gray-500">2 Hari yang lalu</span>
                    </div>
                    <div class="">
                        <div class="flex items-center gap-x-1">
                            <h3 class="text-black">Lesmana</h3>
                            <x-lucide-circle-minus class="size-4 shrink-0 text-red-600" />
                        </div>
                        <p class="text-sm text-gray-800">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Nihil
                            enim
                            necessitatibus provident
                            voluptate vel, soluta expedita quis excepturi praesentium repellat.
                        </p>
                        <span class="text-sm text-gray-500">2 Hari yang lalu</span>
                    </div>
                </div>
                <div class="mt-6 flex flex-row justify-center gap-x-4">
                    <a href="">Previous</a>
                    <a href="" class="underline underline-offset-4">1</a>
                    <a href="" class="text-gray-600">2</a>
                    <a href="">Next</a>
                </div>
            </div>
        </div>
    </div>
</section>
