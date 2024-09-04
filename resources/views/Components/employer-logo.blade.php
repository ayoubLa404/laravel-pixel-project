@props(['size' => 90])

<img src="https://picsum.photos/id/{{ rand(0, 1000) }}/{{ $size }}" alt=""
    class="block object-cover rounded-sm">
