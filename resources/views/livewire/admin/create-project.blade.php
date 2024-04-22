<div class="py-12">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Project') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-form-section submit="updateProfileInformation">
            <x-slot name="form">
                <div class="col-span-3">
                    <x-label for="name" value="{{ __('Name') }}" />
                    <x-input id="name" type="text" class="mt-1 block w-full" wire:model="state.name" required autocomplete="name" />
                    <x-input-error for="name" class="mt-2" />
                </div>
                <div class="col-span-3">
                    <x-label for="date" value="{{ __('Date') }}" />
                    <x-input id="date" type="date" class="mt-1 block w-full" wire:model="state.date" required autocomplete="date" />
                    <x-input-error for="date" class="mt-2" />
                </div>
                <div class="col-span-6">
                    <x-label for="short_description" value="{{ __('Short Description') }}" />
                    <x-input id="short_description" type="text" class="mt-1 block w-full" wire:model="state.short_description" required autocomplete="short_description" />
                    <x-input-error for="short_description" class="mt-2" />
                </div>
                <div class="col-span-6">
                    <x-label for="description" value="{{ __('Media Source') }}" />
                    <x-textarea id="description" type="text" class="mt-1 block w-full" wire:model="state.description" required autocomplete="description" />
                    <x-input-error for="media_source" class="mt-2" />
                </div>
                <div class="col-span-3">
                    <x-label for="media_source" value="{{ __('Media Source') }}" />
                    <x-select :options="['Cloud', 'Youtube']" id="media_source" type="text" class="mt-1 block w-full" wire:model="state.media_source" required autocomplete="media_source" />
                    <x-input-error for="media_source" class="mt-2" />
                </div>
                <div class="col-span-3">
                    <x-label for="media_file" value="{{ __('Upload File') }}" />
                    <x-input id="media_file" type="file" class="mt-1 block w-full" wire:model="state.media_file" required autocomplete="media_file" />
                    <x-input-error for="media_file" class="mt-2" />
                </div>
            </x-slot>
            <x-slot name="actions">
                <x-action-message class="me-3" on="saved">
                    {{ __('Created.') }}
                </x-action-message>

                <x-button wire:loading.attr="disabled" wire:target="photo">
                    {{ __('Create Project') }}
                </x-button>
            </x-slot>
        </x-form-section>
    </div>
</div>