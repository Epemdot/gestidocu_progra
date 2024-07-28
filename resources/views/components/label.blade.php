@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-lg text-[#eeeeee]']) }}>
    {{ $value ?? $slot }}
</label>
