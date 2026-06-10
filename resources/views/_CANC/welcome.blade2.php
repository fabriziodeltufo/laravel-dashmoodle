<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Figtree', sans-serif;
        min-height: 100vh;
        overflow-x: hidden;
    }

    /* Sfondo con gradiente radiale */
    .background {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background: radial-gradient(ellipse at center, #2563eb 0%, #1e3a8a 40%, #0f172a 100%);
        z-index: -1;
    }

    /* Header con logo e login */
    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 2rem 3rem;
    }

    .logo {
        height: 50px;
        width: auto;
    }

    .login-link {
        color: white;
        text-decoration: none;
        padding: 0.75rem 1.5rem;
        border: 2px solid rgba(255, 255, 255, 0.3);
        border-radius: 8px;
        transition: all 0.3s ease;
        font-weight: 600;
    }

    .login-link:hover {
        background: rgba(255, 255, 255, 0.1);
        border-color: rgba(255, 255, 255, 0.6);
    }

    /* Contenitore principale */
    .main-content {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: calc(100vh - 120px);
        padding: 2rem;
    }

    /* Contenitore per l'immagine centrale */
    .image-container {
        position: relative;
        max-width: 800px;
        width: 100%;
    }

    /* Spotlight dietro l'immagine */
    .spotlight {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 600px;
        height: 600px;
        background: radial-gradient(circle, #3b82f6 0%, #2563eb 30%, transparent 70%);
        opacity: 0.4;
        z-index: -1;
        filter: blur(40px);
    }

    .center-image {
        width: 100%;
        height: auto;
        position: relative;
        z-index: 1;
    }
    </style>
</head>

<body>
    <!-- Sfondo con gradiente -->
    <div class="background"></div>

    <!-- Header con logo e login -->
    <header>
        <div>
            <img src="{{ asset('images/viva-italia-logo.jpg') }}" alt="Logo" class="logo">
        </div>
        <div>
            @if (Route::has('login'))
            @auth
            <a href="{{ url('/dashboard') }}" class="login-link">Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="login-link">Login</a>
            @endauth
            @endif
        </div>
    </header>

    <!-- Contenuto principale con immagine -->
    <div class="main-content">
        <div class="image-container">
            <!-- Spotlight effect -->
            <div class="spotlight"></div>

            <!-- Immagine centrale (sostituisci con il tuo percorso) -->
            <img src="{{ asset('images/cover-dash-moodle.png') }}" alt="Central Image" class="center-image">
        </div>
    </div>
</body>

</html>