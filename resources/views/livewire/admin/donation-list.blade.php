<div class="py-12">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Donation List') }}
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
                                   placeholder="Search donations...">
                            <svg class="absolute right-3 top-3 h-5 w-5 text-gray-400" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>
                    </form>

                    <a href="{{ route('donate') }}"
                       class="flex items-center gap-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 5v14M5 12h14"/>
                        </svg>
                        Add Donation
                    </a>
                </div>

                <!-- Donations Table -->
                <div class="overflow-x-auto rounded-lg border">
                    <table class="w-full">
                        <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">#</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Name</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Email</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Phone</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Project</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Amount</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Notes</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Created</th>
                        </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">
                        @forelse($donations as $donation)
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-3 text-sm">{{ $loop->iteration }}</td>

                                <td class="px-4 py-3 text-sm font-medium text-gray-900">
                                    {{ $donation->name }}
                                </td>

                                <td class="px-4 py-3 text-sm text-gray-700">
                                    <a href="mailto:{{ $donation->email }}" class="text-blue-600 hover:underline">
                                        {{ $donation->email }}
                                    </a>
                                </td>

                                <td class="px-4 py-3 text-sm text-gray-700">
                                    {{ $donation->phone_number }}
                                </td>

                                <td class="px-4 py-3 text-sm text-gray-700">
                                    {{ $donation->project->name }}
                                </td>

                                <td class="px-4 py-3 text-sm text-gray-700 font-medium">
                                    ${{ number_format($donation->amount, 2) }}
                                </td>

                                <td class="px-4 py-3 text-sm text-gray-700 max-w-[200px] overflow-visible">
                                    <div class="relative group">
                                        <div class="line-clamp-2 cursor-help">
                                            {{ $donation->reason ?? 'N/A' }}
                                        </div>
                                        @if($donation->reason)
                                            <div class="absolute hidden group-hover:block bg-gray-900 text-white text-sm px-3 py-2 rounded-lg shadow-lg z-50
                                                    max-w-[300px] break-words -translate-x-1/2 left-1/2 transform
                                                    before:absolute before:-top-1 before:left-1/2 before:-translate-x-1/2
                                                    before:w-2 before:h-2 before:bg-gray-900 before:rotate-45">
                                                {{ $donation->reason }}
                                            </div>
                                        @endif
                                    </div>
                                </td>

                                <td class="px-4 py-3 text-sm text-gray-700">
                                    {{ $this->customFormat('created_at', $donation->created_at) }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="px-4 py-6 text-center text-gray-500">
                                    No donations found
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                @if($donations->hasPages())
                    <div class="mt-6">
                        {{ $donations->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
