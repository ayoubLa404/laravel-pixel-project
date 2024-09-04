@props(['job'])

<x-panel class="flex-col text-center">
    <h4 class="self-start text-sm">{{ $job->employer->name }}</h4>
    <div class="space-y-2 py-8 ">
        <h3 class="text-xl font-bold transition-colors duration-300 group-hover:text-blue-400">{{ $job->title }}</h3>
        <p class="font-semibold">{{ $job->salary }}</p>
    </div>
    <div class="flex justify-between items-center gap-3 mt-auto">
        <div class="flex justify-start gap-1">
            @foreach ($job->tags as $tag)
                <x-tag type='small' :$tag />
            @endforeach
        </div>
        <x-employer-logo :size='42' />
    </div>

</x-panel>
