<x-admin-layout>
    <table class="w-full border-separate rounded-md border border-gray-400 dark:border-neutral-600">
        <thead>
            <tr>
                <th class="rounded-t-md border border-gray-300 p-4 dark:border-neutral-600">Guest Name</th>
                <th class="rounded-t-md border border-gray-300 p-4 dark:border-neutral-600">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($guests as $guest)
                <tr>
                    <td class="border border-gray-300 px-2 py-4 dark:border-neutral-600">
                        {{ $guest->name }}
                    </td>
                    <td class="border border-gray-300 px-2 py-4 dark:border-neutral-600">
                        <flux:button.group>
                            <flux:button icon="link"
                                href="{{ route('user.guest', [
                                    'id' => Auth::user()->id,
                                    'slug' => $guest->slug,
                                    'uuid' => $guest->uuid,
                                ]) }}" />
                        </flux:button.group>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-admin-layout>
