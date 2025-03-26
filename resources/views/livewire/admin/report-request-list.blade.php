<div class="py-12">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Report Requests') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-5">
                <div class="flex flex-col items-end lg:items-center lg:flex-row-reverse gap-2">
                    <form wire:submit="resetPage()" class="relative w-full lg:w-auto">
                        <input wire:model.live="search" type="text" class="block p-2 ps-5 w-full lg:w-80 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search...">
                        <button class="text-white absolute end-2 bottom-1  focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-3 py-1 bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Search</button>
                    </form>
                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-3">
                    <table id="request-list" class="dataTable table-striped">
                        <thead>
                            <tr>
                                <th class="dt-orderable-asc dt-orderable-desc">
                                    <span class="dt-column-title">#</span>
                                </th>
                                <th class="dt-orderable-asc dt-orderable-desc">
                                    <span class="dt-column-title">Requester Name</span>
                                </th>
                                <th class="dt-orderable-asc dt-orderable-desc">
                                    <span class="dt-column-title">Email</span>
                                </th>
                                <th class="dt-orderable-asc dt-orderable-desc">
                                    <span class="dt-column-title">Reason</span>
                                </th>
                                <th class="dt-orderable-asc dt-orderable-desc">
                                    <span class="dt-column-title">Creation Time</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($requests as $request)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td title="{{$request->full_name}}">
                                    {{$request->full_name}}
                                </td>
                                <td title="{{$request->email}}">
                                    {{$request->email}}
                                </td>
                                <td class="line-clamp-4" title="{{$request->intention}}">{{$request->intention}}</td>
                                <td title="{{$request->created_at}}">{{$this->customFormat('created_at',$request->created_at)}}</td>
                            </tr>
                            @endforeach
                            @if ($requests->isEmpty())
                            <tr class="text-center">
                                <td class="p-5 border text-sm" :colspan="9">No Data Displayed.</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                {{$requests->links()}}
            </div>
        </div>
    </div>
    <link href="https://cdn.datatables.net/v/dt/dt-2.0.5/datatables.min.css" rel="stylesheet">
</div>