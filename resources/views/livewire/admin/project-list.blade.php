<div class="py-12">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Project List') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div>
                <h1 class="p-5">All Projects</h1>
                <ul>
                    @foreach($projects as $project)
                    <li>{{ $project->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>