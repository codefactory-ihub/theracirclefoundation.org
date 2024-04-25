@if(isset($title))
<div class="md:col-span-1 flex justify-between">
    <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium text-gray-900">{{ $title }}</h3>
        @if(isset($description))
        <p class="mt-1 text-sm text-gray-600">
            {{ $description }}
        </p>
        @endif
    </div>

    <div class="px-4 sm:px-0">
        {{ $aside ?? '' }}
    </div>
</div>
@endif