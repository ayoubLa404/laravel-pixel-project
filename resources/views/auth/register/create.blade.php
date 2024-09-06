<x-app-layout>
    <x-heading>Register</x-heading>
    <x-forms.form action="{{ route('register.create') }}" method='POST' enctype='multipart/form-data'>
        <x-forms.input label='Name' name='name' />
        <x-forms.input label='Email' name='email' type='email' />
        <x-forms.input label='Password' name='password' type='password' />
        <x-forms.input label='Password Confirmation' name='password_confirmation' type='password' />

        <x-forms.divider />
        {{-- employer details --}}
        <x-forms.input label='Employer Name' name='employerName' />
        <x-forms.input label='Employer logo' name='employerLogo' type='file' />

        <x-forms.button>Create Account</x-forms.button>
    </x-forms.form>
</x-app-layout>
