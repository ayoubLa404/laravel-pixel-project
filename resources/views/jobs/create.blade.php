<x-app-layout>
    <x-heading>Post A Job</x-heading>
    <x-forms.form action='/jobs' method='POST'>
        <x-forms.input label='Title' name='title' placeholder='CEO' />
        <x-forms.input label='Salary' name='salary' placeholder='$90.000 USD' />
        <x-forms.input label='Location' name='location' placeholder='Winter Park ,Agadir' />
        <x-forms.select label='Schedule' name='schedule'>
            <option value="Full Time" class="bg-black text-white">Full Time</option>
            <option value="Part Time" class="bg-black text-white">Part Time</option>
        </x-forms.select>
        <x-forms.input label='Url' name='url' type='url' placehotder="https: //acme.com/jobs/ceo-wanted" />
        <x-forms.checkbox label='Featured (Cost Extra)' name='featured' />

        <x-forms.divider />
        {{-- optional create tags that are associated with the job u wanna create --}}
        <x-forms.input label=" Tags (comma separated)" name='tags' placeholder="video, education" />

        <x-forms.button class="bg-green-400">Create Post</x-forms.button>
    </x-forms.form>
</x-app-layout>
