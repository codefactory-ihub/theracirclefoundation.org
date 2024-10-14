<div class="py-12">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Project') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-form-section submit="saveForm">
            <x-slot name="form">
                <div class="col-span-3">
                    <x-label for="name" value="{{ __('Name') }}" />
                    <x-input id="name" type="text" class="mt-1 block w-full" wire:model="name" required autocomplete="name" />
                    <x-input-error for="name" class="mt-2" />
                </div>
                <div class="col-span-3">
                    <x-label for="date" value="{{ __('Date') }}" />
                    <x-input id="date" type="date" class="mt-1 block w-full" wire:model="date" required autocomplete="date" />
                    <x-input-error for="date" class="mt-2" />
                </div>
                <div class="col-span-6">
                    <x-label for="short_description" value="{{ __('Short Description') }}" />
                    <x-input id="short_description" type="text" class="mt-1 block w-full" wire:model="short_description" required autocomplete="short_description" />
                    <x-input-error for="short_description" class="mt-2" />
                </div>
                <div class="col-span-6">
                    <x-label for="description" value="{{ __('Description') }}" />
                    <x-textarea id="description" type="text" class="mt-1 block w-full" wire:model="description" required autocomplete="description" />
                    <x-input-error for="description" class="mt-2" />
                </div>
                <div class="col-span-6">
                    <div class="flex max-md:flex-col items-center my-auto gap-3">
                        <div class="w-full md:w-6/12">
                            <x-label for="media_source" value="{{ __('Media Source') }}" />
                            <x-select :options="['Cloud', 'Youtube']" id="media_source" type="text" class="mt-1 block w-full" wire:model="media_source" required autocomplete="media_source" />
                            <x-input-error for="media_source" class="mt-2" />
                        </div>
                        <div class="w-full flex gap-3 items-end">
                            @if ($media_source =="Cloud")
                            <div class="w-10/12 md:w-10/12">
                                <x-label for="media_file" value="{{ __('Upload File') }}" />
                                <x-input id="media_file" type="file" class="mt-1 px-3 py-2 block border rounded w-full" wire:model="media_file" required autocomplete="media_file" />
                                <x-input-error for="media_file" class="mt-2" />
                            </div>
                            @else
                            <div class="w-10/12 md:w-10/12">
                                <x-label for="media_file" value="{{ __('Youtube Link') }}" />
                                <x-input id="media_file" type="url" class="mt-1 px-3 py-2 block border rounded w-full" wire:model="media_file" required autocomplete="media_file" />
                                <x-input-error for="media_file" class="mt-2" />
                            </div>
                            @endif
                            <div class="w-2/12 md:w-2/12">
                                <x-button class="py-3.5 w-full justify-center" wire:loading.attr="disabled">
                                    Add
                                </x-button>
                            </div>
                        </div>
                    </div>
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