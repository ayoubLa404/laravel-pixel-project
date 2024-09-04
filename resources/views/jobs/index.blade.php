<x-app-layout>
    <div class="space-y-10 pb-8 md:px-6 ">
        <section class="text-center pt-6 pb-10">
            <h1 class="mb-6 font-bold text-4xl">Let's Find You A Great Job</h1>
            <input type="text" placeholder="i'm looking for"
                class="inline-block w-full max-w-xl text-lg text-white/90 bg-white/10 border border-white/10 rounded-xl py-4 px-5 outline-none focus:ring focus:ring-orange-200">
        </section>

        <section>
            <x-section-heading>Top jobs</x-section-heading>
            <div class="grid gap-y-4 md:grid-cols-2 lg:grid-cols-3 md:gap-x-4 ">
                @foreach ($featuredJobs as $job)
                    <x-job-card :$job />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="flex flex-wrap gap-1">

                @foreach ($tags as $tag)
                    <x-tag :$tag />
                @endforeach

            </div>

        </section>

        <section>
            <x-section-heading>Recent jobs</x-section-heading>
            <div class="space-y-4 md:space-y-6">

                @foreach ($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach
            </div>
        </section>
    </div>

</x-app-layout>
