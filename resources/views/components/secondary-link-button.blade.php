@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent
                rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700
                focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500
                focus:ring-offset-2 transition ease-in-out duration-150 inline-flex items-center px-1 pt-1
                leading-5 focus:border-indigo-700'
                : 'inline-flex items-center px-4 py-2 bg-white border border-gray-300
                rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest
                shadow-sm hover:bg-gray-100 focus:outline-none focus:ring-2
                focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
