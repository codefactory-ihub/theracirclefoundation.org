<div class="py-12">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Volunteer List') }}
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
                                   placeholder="Search volunteers...">
                            <svg class="absolute right-3 top-3 h-5 w-5 text-gray-400" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>
                    </form>

                    <a href="{{ route('volunteer') }}"
                       class="flex items-center gap-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 5v14M5 12h14"/>
                        </svg>
                        Add Volunteer
                    </a>
                </div>

                <!-- Volunteer Table -->
                <div class="overflow-x-auto  h-full rounded-lg border">
                    <table class="w-full h-full">
                        <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">#</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Name</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Status</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Phone</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Email</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Age</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Reason</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Created At</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Actions</th>
                        </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">
                        @forelse($volunteers as $volunteer)
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-3 text-sm">{{ $loop->iteration }}</td>

                                <td class="px-4 py-3 text-sm font-medium text-gray-900">
                                    {{ $volunteer->fullName }}
                                </td>

                                <td class="px-4 py-3 text-sm">
                                    @php
                                        $statusClasses = [
                                            1 => 'bg-green-100 text-green-800',
                                            0 => 'bg-red-100 text-red-800',
                                            null => 'bg-blue-100 text-blue-800'
                                        ][$volunteer->accepted];
                                    @endphp
                                    <span class="px-2.5 py-0.5 rounded-full text-xs font-medium {{ $statusClasses }}">
                                        {{ $volunteer->accepted === 1 ? 'Accepted' : ($volunteer->accepted === 0 ? 'Rejected' : 'Pending') }}
                                    </span>
                                </td>

                                <td class="px-4 py-3 text-sm text-gray-700">
                                    {{ $volunteer->phoneNumber }}
                                </td>

                                <td class="px-4 py-3 text-sm text-gray-700">
                                    <a href="mailto:{{ $volunteer->emailAddress }}"
                                       class="text-blue-600 hover:underline">
                                        {{ $volunteer->emailAddress }}
                                    </a>
                                </td>

                                <td class="px-4 py-3 text-sm text-gray-700">
                                    {{ $volunteer->age }}
                                </td>

                                <td class="px-4 py-3 text-sm text-gray-700 max-w-[200px] overflow-visible">
                                    <div class="relative group">
                                        <div title="{{$volunteer->reason}}" class="line-clamp-2 cursor-help">
                                            {{ $volunteer->reason }}
                                        </div>
                                        <div class="absolute hidden group-hover:block bg-gray-900 text-white text-sm px-3 py-2 rounded-lg shadow-lg z-50
                    min-w-[300px] break-words -translate-x-1/2 left-1/2 transform
                    before:absolute before:-top-1 before:left-1/2 before:-translate-x-1/2
                    before:w-2 before:h-2 before:bg-gray-900 before:rotate-45">
                                            {{ $volunteer->reason }}
                                        </div>
                                    </div>
                                </td>

                                <td class="px-4 py-3 text-sm text-gray-700">
                                    {{ $this->customFormat('created_at', $volunteer->created_at) }}
                                </td>

                                <td class="px-4 py-3 text-sm space-y-1">
                                    @if(is_null($volunteer->accepted))
                                        <button wire:click="acceptVolunteer('{{ $volunteer->volunteer_key }}')"
                                                wire:confirm="Are you sure you want to accept this volunteer?"
                                                class="w-full px-2 py-1 text-xs font-medium text-green-700 bg-green-50 rounded hover:bg-green-100 transition-colors">
                                            Accept
                                        </button>
                                        <button wire:click="rejectVolunteer('{{ $volunteer->volunteer_key }}')"
                                                wire:confirm="Are you sure you want to reject this volunteer?"
                                                class="w-full px-2 py-1 text-xs font-medium text-red-700 bg-red-50 rounded hover:bg-red-100 transition-colors">
                                            Reject
                                        </button>
                                    @else
                                        <span class="text-gray-400 text-xs">No actions available</span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="px-4 py-6 text-center text-gray-500">
                                    No volunteers found
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                @if($volunteers->hasPages())
                    <div class="mt-6">
                        {{ $volunteers->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
