@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-[#76abae] focus:ring-[#76abae] rounded-lg shadow-sm']) !!}>
