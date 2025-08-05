<div>
    <tbody>
        @foreach ($guests as $guest)
            <tr wire:key="{{ $guest->id }}">
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
</div>
