<x-app-layout>
    <x-heading>Log in</x-heading>
    <x-forms.form action="{{ route('login.store') }}" method='POST'>
        <x-forms.input label='Email' name='email' type='email' />
        <x-forms.input label='Password' name='password' type='password' />
        <x-forms.button>log in</x-forms.button>
    </x-forms.form>
</x-app-layout>
