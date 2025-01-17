<div class="py-12">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Volunteer List') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-5">
                <div class="flex flex-col items-end lg:items-center lg:flex-row-reverse gap-2">
                    <a title="Add Volunteer" class="text-white flex gap-x-1 items-center focus:outline-none focus:ring-4 font-normal rounded-lg text-sm px-2.5 py-2 bg-gray-800 hover:bg-gray-700 focus:ring-gray-700 border-gray-70" href="{{route('volunteer')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus">
                            <path d="M5 12h14" />
                            <path d="M12 5v14" />
                        </svg> Add Volunteer
                    </a>
                    <form wire:submit="resetPage()" class="relative w-full lg:w-auto">
                        <input wire:model.live="search" type="text" class="block p-2 ps-5 w-full lg:w-80 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search...">
                        <button class="text-white absolute end-2 bottom-1  focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-3 py-1 bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Search</button>
                    </form>
                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-3">
                    <table id="volunteer-list" class="dataTable table-striped">
                        <thead>
                            <tr>
                                <th w class="dt-orderable-asc dt-orderable-desc">
                                    <span class="dt-column-title">#</span>
                                </th>
                                <th class="dt-orderable-asc dt-orderable-desc">
                                    <span class="dt-column-title">Volunteer Name</span>
                                </th>
                                <th class="dt-orderable-asc dt-orderable-desc">
                                    <span class="dt-column-title">Volunteer Status</span>
                                </th>
                                <th class="dt-orderable-asc dt-orderable-desc">
                                    <span class="dt-column-title">Phone Number</span>
                                </th>
                                <th class="dt-orderable-asc dt-orderable-desc">
                                    <span class="dt-column-title">Email Address</span>
                                </th>
                                <th class="dt-orderable-asc dt-orderable-desc">
                                    <span class="dt-column-title">Age</span>
                                </th>
                                <th class="dt-orderable-asc dt-orderable-desc">
                                    <span class="dt-column-title">Reason</span>
                                </th>
                                <th class="dt-orderable-asc dt-orderable-desc">
                                    <span class="dt-column-title">Creation Time</span>
                                </th>
                                <th class="dt-orderable-asc dt-orderable-desc">
                                    <span class="dt-column-title">Actions</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($volunteers as $volunteer)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td title="{{$volunteer->fullName}}">
                                    {{$volunteer->fullName}}
                                </td>
                                <td>
                                    @if ($volunteer->accepted === 1)
                                    <span class="bg-green-100 text-green-800 text-xs font-normal me-2 px-2.5 py-0.5 rounded">Accepted</span>
                                    @elseif ($volunteer->accepted === 0)
                                    <span class="bg-red-100 text-red-800 text-xs font-normal me-2 px-2.5 py-0.5 rounded">Rejected</span>
                                    @else
                                    <span class="bg-cyan-100 text-cyan-500 text-xs font-normal me-2 px-2.5 py-0.5 rounded">Pending</span>
                                    @endif
                                </td>
                                <td title="{{$volunteer->phoneNumber}}">
                                    {{$volunteer->phoneNumber}}
                                </td>
                                <td title="{{$volunteer->emailAddress}}">
                                    {{$volunteer->emailAddress}}
                                </td>
                                <td>{{$volunteer->age}}</td>
                                <td class="line-clamp-3" title="{{$volunteer->reason}}">{{$volunteer->reason}}</td>
                                <td title="{{$volunteer->created_at}}">{{$this->customFormat('created_at',$volunteer->created_at)}}</td>
                                <td class="grid grid-cols-1 gap-y-1">
                                    <button wire:loading.attr="disabled" wire:click="acceptVolunteer('{{$volunteer->volunteer_key}}')" wire:confirm="Are you sure you want to accept this volunteer" title="Accept" class="text-center border border-green-900 w-auto  bg-green-50 text-green-800 text-xs font-normal me-2 px-2.5 py-0.5 rounded">Accept</button>
                                    <button wire:loading.attr="disabled" wire:click="rejectVolunteer('{{$volunteer->volunteer_key}}')" wire:confirm="Are you sure you want to reject this volunteer" title="Reject" class="text-center border border-red-900 w-auto  bg-red-50 text-red-800 text-xs font-normal me-2 px-2.5 py-0.5 rounded">Reject</button>
                                </td>
                            </tr>
                            @endforeach
                            @if ($volunteers->isEmpty())
                            <tr class="text-center">
                                <td class="p-5 border text-sm" :colspan="9">No Data Displayed.</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                {{$volunteers->links()}}
            </div>
        </div>
    </div>
    <link href="https://cdn.datatables.net/v/dt/dt-2.0.5/datatables.min.css" rel="stylesheet">
</div>