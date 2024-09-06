<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    @vite('resources/js/app.js')
</head>

<body class="bg-black text-white font-hanken-grotesk pb-12">

    <nav class="flex items-center justify-between p-3 md:py-6 md:px-12 font-semibold border-b border-white/20">
        <div> <a href="{{ route('home') }}"><img src="{{ Vite::asset('resources/images/logo.svg') }}"
                    alt="our logo"></a></div>
        <div class="space-x-3 font-bold ">
            <a href="#">Jobs</a>
            <a href="#">Career</a>
            <a href="#">Salaries</a>
            <a href="#">Companies</a>
        </div>
        @auth
            <div class="flex items-center gap-x-6">
                <a href="{{ route('jobs.create') }}">Post a Job</a>

                <form action="{{ route('login.destroy') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Log Out</button>
                </form>
            </div>

        @endauth

        @guest
            <div class="space-x-3 font-bold ">
                <a href="{{ route('register.create') }}">Register</a>
                <a href="{{ route('login.create') }}">Login</a>
            </div>
        @endguest
    </nav>


    <main class="max-w-[1100px] mt-10 mx-auto px-6 md:px-10">{{ $slot }}</main>
</body>

</html>
