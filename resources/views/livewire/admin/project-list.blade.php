<div class="py-12">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Project List') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-5">
                <!-- Search and Add Button Section -->
                <div class="flex flex-col gap-4 mb-6 md:flex-row md:items-center md:justify-between">
                    <form wire:submit.prevent="resetPage" class="w-full md:w-96">
                        <div class="relative">
                            <input wire:model.live.debounce.300ms="search" type="text"
                                   class="w-full pl-4 pr-10 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                   placeholder="Search projects...">
                            <svg class="absolute right-3 top-3 h-5 w-5 text-gray-400" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>
                    </form>

                    <a href="{{ route('admin.create-project') }}"
                       class="flex items-center gap-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 5v14M5 12h14"/>
                        </svg>
                        Add Project
                    </a>
                </div>

                <!-- Projects Table -->
                <div class="overflow-x-auto rounded-lg border">
                    <table class="w-full">
                        <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">#</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Project Name</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Status</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Creator</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Description</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Created</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Actions</th>
                        </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">
                        @forelse($projects as $project)
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-3 text-sm">{{ $loop->iteration }}</td>

                                <td class="px-4 py-3 text-sm font-medium text-gray-900">
                                    {{ $project->name }}
                                </td>

                                <td class="px-4 py-3 text-sm">
                                    <span
                                        class="px-2.5 py-0.5 rounded-full text-xs font-medium {{ $project->archived ? 'bg-red-100 text-red-800' : 'bg-green-100 text-green-800' }}">
                                        {{ $project->archived ? 'Hidden' : 'Visible' }}
                                    </span>
                                </td>

                                <td class="px-4 py-3 text-sm text-gray-700">
                                    {{ $project->creator->name }}
                                </td>

                                <td class="px-4 py-3 text-sm text-gray-700 max-w-[200px] overflow-visible">
                                    <div class="relative group">
                                        <div class="line-clamp-2 cursor-help">
                                            {{ $project->short_description }}
                                        </div>
                                        <div class="absolute hidden group-hover:block bg-gray-900 text-white text-sm px-3 py-2 rounded-lg shadow-lg z-50
                                                    min-w-[300px] break-words -translate-x-1/2 left-1/2 transform
                                                    before:absolute before:-top-1 before:left-1/2 before:-translate-x-1/2
                                                    before:w-2 before:h-2 before:bg-gray-900 before:rotate-45">
                                            {{ $project->short_description }}
                                        </div>
                                    </div>
                                </td>

                                <td class="px-4 py-3 text-sm text-gray-700">
                                    {{ $project->created_at->format('M d, Y') }}
                                </td>

                                <td class="flex items-center flex-row px-4 py-3 text-sm gap-3">
                                    <!-- Edit Button -->
                                    <a href="{{ route('admin.update-project', [$project->project_key]) }}"
                                       class="text-yellow-600 hover:text-yellow-700 transition-colors"
                                       title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24"
                                             fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/>
                                        </svg>
                                    </a>

                                    <!-- Delete Button with Simple Confirmation -->
                                    <button
                                        wire:click="deleteProject('{{ $project->project_key }}')"
                                        wire:confirm="Are you sure you want to delete this project?"
                                        wire:loading.attr="disabled"
                                        class="text-red-600 hover:text-red-700 transition-colors relative"
                                        title="Delete">

                                        <!-- Default State -->
                                        <div wire:loading.remove>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24"
                                                 fill="none" stroke="currentColor" stroke-width="2">
                                                <path
                                                    d="M3 6h18M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6m3 0V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/>
                                            </svg>
                                        </div>

                                        <!-- Loading State -->
                                        <div wire:loading class="absolute inset-0 flex items-center justify-center">
                                            <svg class="animate-spin h-4 w-4 text-red-600"
                                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                                        stroke-width="4"></circle>
                                                <path class="opacity-75" fill="currentColor"
                                                      d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                            </svg>
                                        </div>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="px-4 py-6 text-center text-gray-500">
                                    No projects found
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                @if($projects->hasPages())
                    <div class="mt-6">
                        {{ $projects->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
