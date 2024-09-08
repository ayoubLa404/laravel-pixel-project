<x-app-layout>
    <x-heading>
        Search Result For Title : <u style="display: block" class="text-yellow-300">{{ isset($q) ? $q : '' }}</u>
    </x-heading>

    <div class="space-y-6">
        @if (count($jobs) < 1)
            <p class="text-center text-2xl text-red-400">we didnt find any job, please for something else</p>
        @else
            @foreach ($jobs as $job)
                <x-job-card-wide :$job />
            @endforeach
        @endif
    </div>
</x-app-layout>
