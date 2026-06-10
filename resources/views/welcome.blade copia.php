<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Dashboard</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Font Awesome per le icone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!-- Devicon per i loghi di programmazione -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css" />

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: "Figtree", sans-serif;
        min-height: 100vh;
        overflow-x: hidden;
    }

    .background {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background: radial-gradient(ellipse at center,
                #2563eb 0%,
                #1e3a8a 40%,
                #0f172a 100%);
        z-index: -1;
    }

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

    /* ✏️ MODIFICATO: gap ridotto, padding asimmetrico */
    .main-content {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: calc(100vh - 120px);
        padding: 2rem 0 2rem 3rem;
        gap: 1rem;
        margin-top: -50px;
    }

    /* ✏️ MODIFICATO: larghezza fissa e z-index per stare sopra l'immagine */
    .text-content {
        flex: 0 0 42%;
        max-width: 500px;
        color: white;
        z-index: 2;
        position: relative;
        padding-left: 2rem;

    }

    .text-content h1 {
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        line-height: 1.2;
    }

    .text-content p {
        font-size: 1.25rem;
        line-height: 1.8;
        color: rgba(255, 255, 255, 0.9);
        margin-bottom: 2.5rem;
    }

    .tech-logos {
        display: flex;
        align-items: center;
        gap: 2rem;
        margin-top: 2rem;
    }

    .tech-logos i {
        font-size: 2.5rem;
        opacity: 0.9;
        transition: all 0.3s ease;
    }

    .tech-logos i:hover {
        opacity: 1;
        transform: translateY(-3px);
    }

    .php-logo {
        color: #777bb4;
    }

    .laravel-logo {
        color: #ff2d20;
    }

    .moodle-logo {
        color: #f98012;
    }

    .tech-label {
        font-size: 0.9rem;
        color: rgba(255, 255, 255, 0.6);
        margin-bottom: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 600;
    }


    .image-container {
        position: relative;
        flex: 0 0 68%;
        max-width: none;
        margin-left: auto;
        margin-right: 0;
        z-index: 1;
        overflow: hidden;
    }

    .center-image {
        width: 100%;
        /* dimensione originale, niente zoom */
        height: auto;
        position: relative;
        z-index: 1;
        left: 20%;
        /* sposta a destra del 20% */
    }



    .spotlight {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 600px;
        height: 600px;
        background: radial-gradient(circle,
                #3b82f6 0%,
                #2563eb 30%,
                transparent 70%);
        opacity: 0.4;
        z-index: -1;
        filter: blur(40px);
    }



    .footer {
        background: #0f172a;
        color: white;
        padding: 1.5rem 3rem;
        margin-top: auto;
    }

    .footer-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1400px;
        margin: 0 auto;
    }

    .footer-left p,
    .footer-right p {
        margin: 0;
        font-size: 0.9rem;
    }

    .footer-link {
        color: #3b82f6;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .footer-link:hover {
        color: #60a5fa;
        text-decoration: underline;
    }

    @media (max-width: 1024px) {
        .main-content {
            flex-direction: column;
            gap: 3rem;
        }

        .text-content h1 {
            font-size: 2.5rem;
        }

        .text-content p {
            font-size: 1.1rem;
        }
    }

    @media (max-width: 768px) {
        .footer-content {
            flex-direction: column;
            gap: 0.5rem;
            text-align: center;
        }
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

    <!-- Contenuto principale con testo e immagine -->
    <div class="main-content">
        <!-- Colonna sinistra - Testo -->
        <div class="text-content">
            <h1>Viva Italia Online<br>Laravel Dashboard.</h1>
            <p>
                Manage and monitor your Moodle courses easily and intuitively.
                This application connects via API to the Moodle Viva Italia website,
                offering you a modern interface to access all your content, statistics
                and teaching features in one place.
            </p>

            <!-- Loghi tecnologie -->
            <div>
                <div class="tech-label">Technologies:</div>
                <div class="tech-logos">
                    <i class="devicon-php-plain php-logo" title="PHP"></i>
                    <i class="devicon-laravel-plain laravel-logo" title="Laravel"></i>
                    <i class="fa-solid fa-graduation-cap moodle-logo" title="Moodle"></i>
                    <i class="devicon-javascript-plain" style="color: #F7DF1E;" title="JavaScript"></i>
                </div>
            </div>
        </div>

        <!-- Colonna destra - Immagine -->
        <div class="image-container">

            <!-- Spotlight effect -->
            <div class="spotlight"></div>

            <!-- Immagine -->
            <img src="{{ asset('images/cover-dash-moodle-trasp.png') }}" alt="Dashboard Moodle" class="center-image">

        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-left">
                <p>Copyright &copy; {{ date('Y') }} <a href="https://wewebby.com" target="_blank"
                        class="footer-link">Wewebby.com</a> - All rights reserved.</p>
            </div>
            <div class="footer-right">
                <p>Visit LMS Moodle Platform : <a href="https://vivaitalia.online" target="_blank"
                        class="footer-link">Viva
                        Italia
                        Online</a>
                </p>
            </div>
        </div>
    </footer>

</body>

</html>