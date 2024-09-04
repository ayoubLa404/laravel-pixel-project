@props(['job'])

<x-panel class="gap-x-6">
    <div class="overflow-hidden">
        <x-employer-logo />
    </div>
    <div class="flex-1 flex flex-col ">
        <h4 class="self-start text-sm text-gray-400 mb-3">{{ $job->employer->name }}</h4>
        <h3 class="text-xl font-bold group-hover:text-blue-400">{{ $job->title }} </h3>
        <p class="mt-auto text-sm font-semibold text-gray-400">{{ $job->salary }}</p>
    </div>
    <div class="flex justify-between items-center space-x-1 mt-auto">
        @foreach ($job->tags as $tag)
            <x-tag :$tag />
        @endforeach
    </div>
</x-panel>
