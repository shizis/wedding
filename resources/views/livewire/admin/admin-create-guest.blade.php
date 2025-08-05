<div class="my-4">

    <flux:modal.trigger name="edit-profile">
        <flux:button type="button" icon="plus" variant="primary" color="sky"></flux:button>
    </flux:modal.trigger>

    <flux:modal name="edit-profile" class="md:w-96">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Update profile</flux:heading>
                <flux:text class="mt-2">Make changes to your personal details.</flux:text>
            </div>

            <flux:field>
                <flux:label badge="Required">Name</flux:label>
                <flux:input wire:model="$parent.form.name" type="text" placeholder="Your name" required />
                <flux:error name="$parent.form.name" />
            </flux:field>

            <flux:field>
                <flux:label>Adress</flux:label>
                <flux:input wire:model="$parent.form.address" placeholder="Address" type="text" />
                <flux:error name="$parent.form.address" />
            </flux:field>

            <div class="flex">
                <flux:spacer />

                <flux:button wire:click="$parent.setCreate" type="submit" variant="primary">Save
                    changes
                </flux:button>
            </div>
        </div>
    </flux:modal>
</div>
