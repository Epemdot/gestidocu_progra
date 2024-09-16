@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-[#31363f] border-none focus:border-[#76abae] focus:ring-[#76abae] text-[#eeeeee] rounded-md shadow-sm']) !!}>
