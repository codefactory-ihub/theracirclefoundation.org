@props(['disabled' => false, 'options' => [], 'selected' => null])

<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}>
    @foreach($options as $value => $label)
        <option value="{{ is_bool($value) ? ($value ? '1' : '0') : $value }}"
            {{ $selected == $value ? 'selected' : '' }}>
            {{ $label }}
        </option>
    @endforeach
</select>
