<div class="py-12">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($title ?? 'Create Project') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-form-section submit="saveForm">
            <x-slot name="form">
                <!-- Project Name -->
                <div class="col-span-6 sm:col-span-3">
                    <x-label for="name" value="{{ __('Project Name') }}"/>
                    <x-input id="name" type="text" class="mt-1 block w-full" wire:model="name" required
                             autocomplete="name"/>
                    <x-input-error for="name" class="mt-2"/>
                </div>

                <!-- Project Date -->
                <div class="col-span-6 sm:col-span-3">
                    <x-label for="project_date" value="{{ __('Date') }}"/>
                    <x-input id="project_date" type="date" class="mt-1 block w-full" wire:model="project_date" required
                             autocomplete="project_date"/>
                    <x-input-error for="project_date" class="mt-2"/>
                </div>

                <!-- Status (Visible/Hidden) -->
                <div class="col-span-6 sm:col-span-3">
                    <x-label for="archived" value="{{ __('Status') }}"/>
                    <x-select
                        id="archived"
                        wire:model="archived"
                        :options="['' => 'Select Status', false => 'Visible', true => 'Hidden']"
                        class="mt-1 block w-full"
                    />
                    <x-input-error for="archived" class="mt-2"/>
                </div>

                <!-- Short Description -->
                <div class="col-span-6">
                    <x-label for="short_description" value="{{ __('Short Description') }}"/>
                    <x-input id="short_description" type="text" class="mt-1 block w-full" wire:model="short_description"
                             required autocomplete="short_description"/>
                    <x-input-error for="short_description" class="mt-2"/>
                </div>

                <!-- Full Description -->
                <div class="col-span-6">
                    <x-label for="description" value="{{ __('Description') }}"/>
                    <x-textarea id="description" rows="4" class="mt-1 block w-full" wire:model="description" required
                                autocomplete="description"/>
                    <x-input-error for="description" class="mt-2"/>
                </div>

                <!-- Media Upload Section -->
                <div class="col-span-6">
                    <div class="flex max-sm:flex-col items-center my-auto gap-3">
                        <!-- Media Source Selection -->
                        <div class="w-full sm:w-6/12">
                            <x-label for="media_source" value="{{ __('Media Source') }}"/>
                            <x-select
                                id="media_source"
                                wire:model.live="media_source"
                                :options="['Cloud' => 'File', 'YouTube' => 'Youtube']"
                                class="mt-1 block w-full"
                                required
                            />
                            <x-input-error for="media_source" class="mt-2"/>
                        </div>

                        <!-- File Input or YouTube URL -->
                        <div class="w-full sm:w-6/12 flex gap-3 items-end">
                            <div class="w-full sm:w-10/12">
                                @if ($media_source == "Cloud")
                                    <x-label for="media_file" value="{{ __('Upload File') }}"/>
                                    <x-input
                                        accept="image/*, video/*"
                                        id="media_file"
                                        type="file"
                                        class="mt-1 px-3 py-2 block border rounded w-full"
                                        wire:model.live="media_file"
                                    />
                                @else
                                    <x-label for="media_file" value="{{ __('YouTube URL') }}"/>
                                    <x-input
                                        id="media_file"
                                        type="url"
                                        placeholder="https://www.youtube.com/watch?v=..."
                                        class="mt-1 px-3 py-2 block border rounded w-full"
                                        wire:model.live="media_file"
                                    />
                                @endif
                                <x-input-error for="media_file" class="mt-2"/>
                            </div>

                            <!-- Add Button -->
                            <div class="w-full sm:w-2/12">
                                <x-button
                                    type="button"
                                    wire:click="addFile"
                                    class="py-3.5 w-full justify-center"
                                    wire:loading.attr="disabled"
                                >
                                    {{ __('Add') }}
                                </x-button>
                            </div>
                        </div>
                    </div>

                    <!-- Media Preview Grid -->
                    @if (count($files) > 0)
                        <div class="grid grid-cols-4 md:grid-cols-10 gap-2 py-3">
                            @foreach ($files as $file)
                                <div class="relative aspect-square">
                                    @if ($file["media_source"] == "Cloud" || $file["media_source"] == "cloudinary")
                                        @if (isset($file['media_file']) && method_exists($file['media_file'], 'temporaryUrl'))
                                            <!-- For newly uploaded files -->
                                            <img src="{{ $file['media_file']->temporaryUrl() }}"
                                                 class="w-full h-full object-cover rounded border"
                                                 alt="Media preview">
                                        @else
                                            <!-- For already uploaded files (from cloudinary) -->
                                            <img src="{{ $file['media_file'] }}"
                                                 class="w-full h-full object-cover rounded border"
                                                 alt="Media preview">
                                        @endif
                                    @else
                                        <div
                                            class="w-full h-full bg-gray-100 flex items-center justify-center rounded border">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500"
                                                 fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                                            </svg>
                                        </div>
                                    @endif
                                    <button
                                        type="button"
                                        wire:click="deleteFile('{{$file['id']}}')"
                                        class="absolute top-1 right-1 p-1 font-semibold bg-gray-800/80 hover:bg-gray-900/90 text-white rounded-full"
                                        wire:loading.attr="disabled"
                                    >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="lucide lucide-x-icon lucide-x">
                                            <path d="M18 6 6 18"/>
                                            <path d="m6 6 12 12"/>
                                        </svg>
                                    </button>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </x-slot>

            <x-slot name="actions">
                <x-action-message class="me-3" on="saved">
                    {{ __('Saved successfully.') }}
                </x-action-message>

                <x-button wire:loading.attr="disabled" class="py-3.5 justify-center">
                    {{ __($title ?? 'Create Project') }}
                </x-button>
            </x-slot>
        </x-form-section>
    </div>
</div>
