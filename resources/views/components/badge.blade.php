@props(['value'])

<span {{ $attributes->merge([ 'class' => 'rounded-full bg-purple-100 mx-0.25 px-2.5 py-0.5 text-sm whitespace-nowrap text-purple-700' ]) }}>
    {{ $value ?? $slot }}
</span>
