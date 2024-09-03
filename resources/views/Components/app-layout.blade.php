<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>

    @vite('resources/js/app.js')
</head>

<body class="bg-black text-white">

    <nav class="flex items-center justify-between p-3 md:py-6 md:px-12 font-semibold border-b border-white/20">
        <div> <a href=""><img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="our logo"></a></div>
        <div class="space-x-3 font-bold ">
            <a href="#">Jobs</a>
            <a href="#">Career</a>
            <a href="#">Salaries</a>
            <a href="#">Companies</a>
        </div>
        <div class=""><a href="#">Post a Job</a></div>
    </nav>


    <main class="max-w-[1100px] mt-10 mx-auto px-6 md:px-10">{{ $slot }}</main>
</body>

</html>
