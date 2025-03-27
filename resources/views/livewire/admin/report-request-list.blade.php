<div class="py-12">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Report Requests') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-5">
                <!-- Search Section -->
                <div class="flex flex-col gap-4 mb-6">
                    <form wire:submit.prevent="resetPage" class="w-full md:w-96">
                        <div class="relative">
                            <input wire:model.live.debounce.300ms="search" type="text"
                                   class="w-full pl-4 pr-10 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                   placeholder="Search requests...">
                            <svg class="absolute right-3 top-3 h-5 w-5 text-gray-400" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>
                    </form>
                </div>

                <!-- Requests Table -->
                <div class="overflow-x-auto rounded-lg border">
                    <table class="w-full">
                        <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">#</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Requester</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Email</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Reason</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Created</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Status</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Actions</th>
                        </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">
                        @forelse($requests as $request)
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-3 text-sm">{{ $loop->iteration }}</td>

                                <td class="px-4 py-3 text-sm font-medium text-gray-900">
                                    {{ $request->full_name }}
                                </td>

                                <td class="px-4 py-3 text-sm text-gray-700">
                                    <a href="mailto:{{ $request->email }}" class="text-blue-600 hover:underline">
                                        {{ $request->email }}
                                    </a>
                                </td>

                                <td class="px-4 py-3 text-sm text-gray-700 max-w-[200px] overflow-visible">
                                    <div class="relative group">
                                        <div class="line-clamp-2 cursor-help">
                                            {{ $request->intention }}
                                        </div>
                                        <div class="absolute hidden group-hover:block bg-gray-900 text-white text-sm px-3 py-2 rounded-lg shadow-lg z-50
                                                    min-w-[300px] break-words -translate-x-1/2 left-1/2 transform
                                                    before:absolute before:-top-1 before:left-1/2 before:-translate-x-1/2
                                                    before:w-2 before:h-2 before:bg-gray-900 before:rotate-45">
                                            {{ $request->intention }}
                                        </div>
                                    </div>
                                </td>

                                <td class="px-4 py-3 text-sm text-gray-700">
                                    {{ $this->customFormat('created_at', $request->created_at) }}
                                </td>

                                <td class="px-4 py-3 text-sm">
                                    <span class="px-2.5 py-0.5 rounded-full text-xs font-medium
                                        @switch($request->status)
                                            @case('pending') bg-yellow-100 text-yellow-800 @break
                                            @case('accepted') bg-blue-100 text-blue-800 @break
                                            @case('rejected') bg-red-100 text-red-800 @break
                                            @case('completed') bg-green-100 text-green-800 @break
                                        @endswitch">
                                        {{ ucfirst($request->status) }}
                                    </span>
                                </td>

                                <td class="px-4 py-3 text-sm space-x-2">
                                    @if($request->status === 'pending')
                                        <button wire:click="acceptRequest({{ $request->id }})"
                                                class="px-3 py-1 text-xs font-medium text-white bg-green-600 rounded-lg hover:bg-green-700 transition-colors">
                                            Accept
                                        </button>
                                        <button wire:click="rejectRequest({{ $request->id }})"
                                                class="px-3 py-1 text-xs font-medium text-white bg-red-600 rounded-lg hover:bg-red-700 transition-colors">
                                            Reject
                                        </button>
                                    @elseif($request->status === 'accepted')
                                        <button wire:click="completeRequest({{ $request->id }})"
                                                class="px-3 py-1 text-xs font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition-colors">
                                            Complete
                                        </button>
                                    @else
                                        <span class="text-gray-400 text-xs">No actions</span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="px-4 py-6 text-center text-gray-500">
                                    No requests found
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                @if($requests->hasPages())
                    <div class="mt-6">
                        {{ $requests->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
