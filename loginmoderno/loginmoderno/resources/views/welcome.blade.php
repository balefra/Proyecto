<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* Additional CSS for centering */
            body {
                background-image: url('../assets/images/scientometrics.png');
                /* Ruta de la imagen de fondo */
                background-size: 50%;
                /* Hace que la imagen cubra toda la pantalla */
                background-position: center;
                /* Centra la imagen */
                min-height: 100vh;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: #f9fafb;
                /* Light background for contrast */
            }

            .btn {
                display: inline-block;
                padding: 10px 20px;
                margin: 10px;
                background-color: #4F46E5;
                /* Indigo color */
                color: white;
                text-align: center;
                border-radius: 8px;
                font-weight: 600;
                text-decoration: none;
                transition: background-color 0.3s ease;
            }

            .btn:hover {
                background-color: #4338CA;
                /* Darker indigo on hover */
            }
        </style>
    @endif
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">

    @if (Route::has('login'))
        <div class="flex justify-center items-center h-screen">
            <div class="text-center">
                @auth
                @else
                    <a href="{{ route('login') }}" class="btn">
                        Log in
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn">
                            Register
                        </a>
                    @endif
                @endauth
            </div>
        </div>
    @endif

</body>

</html>
