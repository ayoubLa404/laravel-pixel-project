<x-app-layout>
    <div class="space-y-10">
        <section>
            <x-section-heading>Top jobs</x-section-heading>
            <div class="grid gap-y-4 md:grid-cols-2 lg:grid-cols-3 md:gap-x-8 ">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="space-x-1">
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
            </div>

        </section>

        <section>
            <x-section-heading>Recent jobs</x-section-heading>

        </section>
    </div>

</x-app-layout>
