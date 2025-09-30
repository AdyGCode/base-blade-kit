@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'inline-flex items-center px-4 py-2 bg-red-600 border border-transparent
                rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700
                focus:bg-red-600 active:bg-red-800 focus:outline-none focus:ring-2
                focus:ring-indigo-500
                focus:ring-offset-2 transition ease-in-out duration-150 inline-flex items-center px-1 pt-1
                leading-5 focus:border-indigo-700'
                : '
                inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold
                text-xs text-white uppercase tracking-widest hover:bg-red-700
                focus:bg-red-700 active:bg-red-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
                transition ease-in-out duration-150
                leading-5 text-red-500 hover:text-red-1 w-auto hover:border-red-300
                ';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
