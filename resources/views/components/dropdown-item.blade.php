@props(['active' => false])
@php
$classes = 'text-left leading-6 block px-3 py-2 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white';

if ($active) {
    $classes .= ' bg-blue-500 text-white';
}
@endphp

<a {{ $attributes(['class' => $classes]) }}>{{ $slot }}</a>
