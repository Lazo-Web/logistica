<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ __('Aplicación Transporte por Carretera') }} - {{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="/logo.png" sizes="any">
  
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    @fonts

    <!-- Styles -->
    <style>
        /* Fondo profesional con imagen */
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            background-image: url('/images/ariosa.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            position: relative;
            font-family: "Instrument Sans", sans-serif;
        }

        /* Overlay elegante para legibilidad */
        body::before {
            content: "";
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.215);

            z-index: -1;
        }

        /* Tarjeta corporativa */
        .card {
            background: rgba(83, 136, 206, 0.92);
            padding: 2.5rem;
            border-radius: 16px;
            max-width: 520px;
            width: 100%;
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.25);
            backdrop-filter: blur(6px);
            border: 1px solid rgba(255, 255, 255, 0.35);
            margin: 0 auto;
            /* fuerza centrado interno */
        }

        .title {
            font-size: 2rem;
            font-weight: 700;
            color: #c5251a;
            text-align: center;
            margin-bottom: 1rem;
        }

        .subtitle {
            text-align: center;
            color: #ebe70f;
            margin-bottom: 1.5rem;
        }

        .btn {
            display: inline-block;
            background: #1b1b18;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: 0.2s;
        }

        .btn:hover {
            background: #333;
        }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen p-6">
    @if (Route::has('login'))
        <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ route('dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
    @endif
    </header>
    <div class="card">
        <h1 class="title">Sistema de Gestión de Transporte</h1>

        <p class="subtitle">
            Optimiza rutas, gestiona flotas y controla operaciones de transporte por carretera.
        </p>

        <div style="width: 100%; text-align: center;">
            <a href="{{ url('/dashboard') }}" class="btn">
                Entrar a la Aplicación
            </a>
        </div>

    </div>

    @if (Route::has('login'))
        <div class="h-14.5 hidden lg:block"></div>
    @endif
</body>

</html>
