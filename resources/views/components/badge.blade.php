@props(['value','type'])

<span {{ $attributes->merge([ 'class' => 'rounded-full mx-0.25 px-2.5 py-0.5 text-sm
whitespace-nowrap border ' ]) }}>
    {{ $value ?? $slot }}
</span>
