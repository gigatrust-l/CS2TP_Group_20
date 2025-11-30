@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-3 py-2 border-b-2 border-green-600 text-gray-900 text-sm font-medium leading-5 focus:outline-none focus:border-green-700 transition-colors duration-150 ease-in-out'
            : 'inline-flex items-center px-3 py-2 border-b-2 border-transparent text-gray-900 hover:text-green-700 hover:border-green-600 focus:outline-none focus:text-green-700 focus:border-green-600 text-sm font-medium leading-5 transition-colors duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
