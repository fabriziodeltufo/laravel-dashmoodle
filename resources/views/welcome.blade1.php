<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css'])
</head>

<body class="antialiased bg-gray-900">

    <div class="relative flex items-center justify-center min-h-screen">

        <!-- Login link in alto a destra -->
        <div class="absolute top-6 right-6">
            @if (Route::has('login'))
            <a href="{{ route('login') }}" class="text-sm text-gray-200 underline">Login</a>
            @endif
        </div>

        <!-- Cover immagine al centro -->
        <div class="text-center">
            <img src="{{ asset('images/cover-dash-moodle.png') }}" alt="Cover" class="mx-auto max-w-full h-auto">
        </div>

    </div>

</body>

</html>