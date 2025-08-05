<div>
    <livewire:admin.admin-create-guest />

    <table class="w-full border-separate rounded-md border border-gray-400 dark:border-neutral-600">
        <thead>
            <tr>
                <th class="rounded-t-md border border-gray-300 p-4 dark:border-neutral-600">Guest Name</th>
                <th class="rounded-t-md border border-gray-300 p-4 dark:border-neutral-600">Action</th>
            </tr>
        </thead>

        <livewire:admin.admin-guest-list :$guests />

    </table>
</div>
