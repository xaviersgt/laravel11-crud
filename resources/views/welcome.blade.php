<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
        *, ::after, ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb;
        }
        ::after, ::before {
            --tw-content: '';
        }
        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
            font-feature-settings: normal;
            font-variation-settings: normal;
            -webkit-tap-highlight-color: transparent;
        }
        body {
            margin: 0;
            line-height: inherit;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('/images/library.jpg'); /* Caminho atualizado para a imagem */
            background-size: cover;
            background-position: center;
            color: #fff;
        }
        .flex-center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .position-ref {
            position: relative;
        }
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }
        .content {
            text-align: center;
        }
        .title {
            font-size: 84px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Sombra para melhor legibilidade */
        }
        .links > a {
            color: #fff;
            padding: 0 25px;
            font-size: 16px; /* Aumentar o tamanho da fonte */
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            background-color: rgba(0, 0, 0, 0.5); /* Fundo semi-transparente */
            padding: 10px 20px; /* Padding para aumentar a área de clique */
            border-radius: 5px; /* Bordas arredondadas */
        }
        .links > a:hover {
            background-color: rgba(0, 0, 0, 0.7); /* Fundo mais escuro ao passar o mouse */
        }
        @media (min-width: 640px) {
            .sm\:size-16 {
                width: 4rem;
                height: 4rem;
            }
            .sm\:size-6 {
                width: 1.5rem;
                height: 1.5rem;
            }
            .sm\:pt-5 {
                padding-top: 1.25rem;
            }
        }
    </style>
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
        <div class="flex lg:justify-center lg:col-start-2">
            <svg class="h-12 w-auto text-white lg:h-16 lg:text-[#FF2D20]" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- SVG content -->
            </svg>
        </div>
        @if (Route::has('login'))
            <nav class="top-right links">
                @auth
                    <a href="{{ url('/dashboard') }}" class="rounded-md text-black transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="rounded-md text-black transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Login
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="rounded-md text-black transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>

    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Bem-vindo à Biblioteca
            </div>
        </div>
    </div>
</body>
</html>
