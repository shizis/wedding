<section class="mt-10 w-full bg-pink-100 py-10" id="our_wedding">
    <div class="mx-auto max-w-screen-md px-4">
        <div class="flex w-full flex-col gap-y-6 text-center">
            <div class="w-fit self-center">
                <h2 class="font-italianno text-5xl text-black lg:text-6xl">
                    RSVP
                </h2>
            </div>
            <form wire:submit="setComment" id="set-comment"
                class="w-full rounded-lg border border-gray-300 bg-white p-4 text-start">
                <label for="name" class="block text-sm">
                    <span class="text-black after:ml-0.5 after:text-red-500 after:content-['*']">Nama</span>
                    <input type="text" wire:model='form.guest' id="name" placeholder="Name..." readonly
                        class="focus:outline-angga-laras-button-active mt-1 w-full rounded-md border border-gray-300 bg-white p-2 text-black">
                    @if (!$guest)
                        <div class="mt-2">
                            <span class="rounded-xs bg-red-100 px-2 py-1 text-xs text-red-600">
                                Mohon maaf Khusus tamu undangan
                            </span>
                        </div>
                    @endif
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
                    <button type="submit" form="set-comment" wire:click="$refresh" wire:loading.attr="disabled"
                        class="mt-8 cursor-pointer self-end rounded-full bg-[#D76C82] px-6 py-2 text-center text-sm font-semibold text-white disabled:opacity-50">
                        Kirim
                    </button>
                </div>
            </form>
        </div>

        <div class="mt-8 flex w-full flex-col">
            <span class="mb-4">Comments</span>
            <div class="rounded-lg border border-gray-300 bg-white p-4">
                <div class="flex w-full flex-col gap-y-6 text-start" wire:loading.class="opacity-50">
                    @forelse ($comments as $comment)
                        <div class="" wire:key="{{ $comment->id }}">
                            <div class="flex items-center gap-x-1">
                                <h3 class="text-black">{{ $comment->guests->name }}</h3>
                                <x-lucide-circle-check class="size-5 shrink-0 text-green-600" />
                            </div>
                            <p class="mb-2 mt-1 text-sm text-gray-800">
                                {{ $comment->comment }}
                            </p>
                            <span class="text-sm text-gray-500">2 Hari yang lalu</span>
                        </div>
                    @empty
                        <div>
                            <p class="capitalize">no comments yet</p>
                        </div>
                    @endforelse
                </div>
                <div class="mt-6">
                    {{ $comments->links(data: ['scrollTo' => false]) }}
                </div>
            </div>
        </div>
    </div>
</section>
