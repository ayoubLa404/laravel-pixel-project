@php
    $class =
        'flex p-4 bg-white/5 hover:bg-white/10 duration-300 rounded-xl border border-white/20 transition-colors duration-300 group';
@endphp

<div {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</div>
