<div>
    <div class="my-4">
        <flux:modal.trigger name="create-guest">
            <flux:button type="button" icon="plus" variant="primary" color="sky">Create Guest</flux:button>
        </flux:modal.trigger>

        <flux:modal name="create-guest" class="md:w-96">
            <form wire:submit="setCreate()" id="set-guest" id="set-guest">
                <div class="space-y-6">
                    <div>
                        <flux:heading size="lg">Create New Guest</flux:heading>
                        <flux:text class="mt-2">Insert new guest name & address.</flux:text>
                    </div>

                    <flux:field>
                        <flux:label badge="Required">Name</flux:label>
                        <flux:input wire:model="form.name" type="text" placeholder="Guest name" required />
                        <flux:error name="form.name" />
                    </flux:field>

                    <flux:field>
                        <flux:label>Address</flux:label>
                        <flux:input wire:model="form.address" placeholder="Guest Address" type="text" />
                        <flux:error name="form.address" />
                    </flux:field>

                    <flux:spacer />

                    <div class="flex w-full gap-x-2">
                        <flux:button x-on:click="$flux.modals().close()" type="button" variant="filled" class="w-full">
                            Cancel
                        </flux:button>

                        <flux:button x-on:click="$wire.$refresh" form="set-guest" type="submit" variant="primary"
                            color="blue" class="w-full">
                            Create
                        </flux:button>
                    </div>
                </div>
            </form>
        </flux:modal>
    </div>

    <table class="w-full border-separate rounded-md border border-gray-400 dark:border-neutral-600">
        <thead>
            <tr>
                <th class="rounded-t-md border border-gray-300 p-4 dark:border-neutral-600">Guest Name</th>
                <th class="rounded-t-md border border-gray-300 p-4 dark:border-neutral-600">Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($guests as $guest)
                <tr wire:key="{{ $guest->id }}">
                    <td class="border border-gray-300 px-2 py-4 dark:border-neutral-600">
                        {{ $guest->name }}
                    </td>
                    <td class="border border-gray-300 px-2 py-4 dark:border-neutral-600">
                        <div class="space-x-2 space-y-2">
                            <flux:modal.trigger name="edit-guest-{{ $guest->id }}">
                                <flux:button variant="primary" color="blue" icon="square-pen" tooltip="Edit" />
                            </flux:modal.trigger>

                            <flux:modal name="edit-guest-{{ $guest->id }}" class="lg:w-104 w-96">
                                <form wire:submit="setUpdate({{ $guest->id }})" id="edit-guest-{{ $guest->id }}">
                                    <div class="space-y-6">
                                        <div>
                                            <flux:heading size="lg">Update Guest Name</flux:heading>
                                            <flux:text class="mt-2">Edit guest name.</flux:text>
                                        </div>

                                        <flux:field>
                                            <flux:label>From</flux:label>
                                            <flux:input type="text" variant="filled" value="{{ $guest->name }}"
                                                readonly />
                                            <flux:error name="updateForm.name" />
                                        </flux:field>
                                        <flux:field>
                                            <flux:label>To</flux:label>
                                            <flux:input wire:model="updateForm.name" type="text" value=""
                                                placeholder="Update name" required />
                                            <flux:error name="updateForm.name" />
                                        </flux:field>

                                        <flux:spacer />

                                        <div class="flex w-full gap-x-2">
                                            <flux:button x-on:click="$flux.modals().close()" type="button"
                                                variant="filled" class="w-full">
                                                Cancel
                                            </flux:button>

                                            <flux:button x-on:click="$wire.$refresh"
                                                form="edit-guest-{{ $guest->id }}" type="submit" variant="primary"
                                                color="green" class="w-full">
                                                Confirm
                                            </flux:button>
                                        </div>
                                    </div>
                                </form>
                            </flux:modal>

                            <flux:button variant="primary" color="green" icon="eye" target="_blank"
                                tooltip="View Page"
                                href="{{ route('user.guest', [
                                    'id' => Auth::user()->id,
                                    'slug' => $guest->slug,
                                    'uuid' => $guest->uuid,
                                ]) }}" />

                            <flux:button id="share" tooltip="Share to Whatsapp" target="_blank" icon="share"
                                variant="primary" color="cyan" data-action="share/whatsapp/share"
                                href="https://api.whatsapp.com/send?text=Assalamualaikum Warahmatullahi Wabarakatuh.%0a%0aTanpa mengurangi rasa hormat, perkenankan kami mengundang Bapak/Ibu/Saudara/i *{{ $guest->name }}* untuk menghadiri acara kami %0a%0aBerikut link undangan kami, untuk info lengkap dari acara bisa kunjungi: {{ url('/ziqfa-silvi/' . Auth::user()->id . '/to/' . $guest->slug . '/' . $guest->uuid) }} %0a %0a%0aMerupakan suatu kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan untuk hadir dan memberikan doa restu.%0a%0aMohon maaf perihal undangan hanya di bagikan melalui pesan ini.%0a%0aTerima kasih banyak atas perhatiannya.%0a%0aWassalamualaikum Warahmatullahi Wabarakatuh." />

                            <flux:button x-data="{ text: 'Assalamualaikum Warahmatullahi Wabarakatuh.\n\nTanpa mengurangi rasa hormat, perkenankan kami mengundang Bapak/Ibu/Saudara/i *{{ $guest->name }}* untuk menghadiri acara kami \n\nBerikut link undangan kami, untuk info lengkap dari acara bisa kunjungi: {{ url('/ziqfa-silvi/' . Auth::user()->id . '/to/' . $guest->slug . '/' . $guest->uuid) }} \n\nMerupakan suatu kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan untuk hadir dan memberikan doa restu.\n\nMohon maaf perihal undangan hanya di bagikan melalui pesan ini.\n\nTerima kasih banyak atas perhatiannya.\n\nWassalamualaikum Warahmatullahi Wabarakatuh.' }" x-on:click="navigator.clipboard.writeText(text)"
                                icon="clipboard" tooltip="Copy link" />

                            <flux:modal.trigger name="destroy-guest-{{ $guest->id }}">
                                <flux:button variant="primary" color="red" icon="trash" tooltip="Delete" />
                            </flux:modal.trigger>

                            <flux:modal name="destroy-guest-{{ $guest->id }}" class="lg:w-104 w-96">
                                <form wire:submit="destroyGuest({{ $guest->id }})"
                                    id="destroy-guest-{{ $guest->id }}">
                                    <div class="space-y-6">
                                        <div>
                                            <flux:heading size="lg">Delete Guest?</flux:heading>
                                            <flux:text class="mt-4">Are you sure want to delete guest Name
                                                {{ $guest->name }} from list?</flux:text>
                                        </div>
                                        <flux:spacer />
                                        <div class="flex w-full gap-x-2">
                                            <flux:button x-on:click="$flux.modals().cancel()" type="button"
                                                variant="filled" class="w-full">
                                                Cancel
                                            </flux:button>

                                            <flux:button x-on:click="$wire.$refresh"
                                                form="destroy-guest-{{ $guest->id }}" type="submit"
                                                variant="primary" color="red" class="w-full">
                                                Confirm
                                            </flux:button>
                                        </div>
                                    </div>
                                </form>
                            </flux:modal>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
</div>
