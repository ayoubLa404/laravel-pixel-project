@props(['tag', 'type' => 'base'])

@php
    $class =
        'inline-block bg-white/10 font-semibold first-letter:uppercase hover:bg-white/20 transition-colors duration-300 rounded-xl';

    if ($type === 'small') {
        $class .= ' text-2xs py-1 px-3';
    }
    if ($type === 'base') {
        $class .= ' text-sm py-1 px-5';
    }

@endphp

<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $class }}">
    {{ $tag->name }}
</a>
