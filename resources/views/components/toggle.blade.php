<!-- resources/views/components/toggle.blade.php -->
@props(['value' => false, 'labelLeft' => '', 'labelRight' => ''])

<div class="flex items-center">
    @if($labelLeft)
        <span class="mr-2 text-sm font-medium text-gray-700">{{ $labelLeft }}</span>
    @endif

    <label class="relative inline-flex items-center cursor-pointer">
        <input type="checkbox" {{ $attributes->merge(['class' => 'sr-only peer']) }}
            @checked($value)>
        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer
                   peer-checked:after:translate-x-full peer-checked:after:border-white
                   after:content-[''] after:absolute after:top-[2px] after:left-[2px]
                   after:bg-white after:border-gray-300 after:border after:rounded-full
                   after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600">
        </div>
    </label>

    @if($labelRight)
        <span class="ml-2 text-sm font-medium text-gray-700">{{ $labelRight }}</span>
    @endif
</div>
