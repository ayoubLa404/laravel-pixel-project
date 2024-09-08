@props(['employer', 'size' => 90])

<img src="{{ asset($employer->logo) }}" alt="" width="{{ $size }}" height="{{ $size }}"
    class="block object-cover rounded-sm">
