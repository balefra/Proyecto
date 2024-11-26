    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
    <button class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
        {{ __('cerrar aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasesión') }}
    </button>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    </div>

    <!doctype html>
    <html lang="en">


    <head>
        <title>Virtual Research Assistant</title>
        <!-- Required meta tags -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous" />
        <link rel="stylesheet" href="{{ asset('assets/flexbox.css') }}">
    </head>

    <body class="container">

        <div id="div1">
            <img src="{{ asset('assets/images/iberov2.png') }}" class="iberov" align= "left">
            <img src="{{ asset('assets/images/uNIVERSIDA TRES CULTURAS.png') }}" class="utc" align= "right">
        </div>
        <div id="div2">
            <h1>Virtual <span class="highlight">Research Assistant</span></h1>
        </div>
        <div id="div3"></div>
        <div id="div4"></div>
        <div id="div5">
            <div class="buttons-container">
                <a href="{{ url('/crear') }}" class="btn btn-blue">
                    <img src="{{ asset('assets/images/iconsformulacion.png') }}" alt="Icono Check">
                    <span>Registro propuesta del proyecto</span>
                </a>
                <a href="{{ url('/buscarProyecto') }}" class="btn btn-orange">
                    <img src="{{ asset('assets/images/proyecto.png') }}" alt="Icono Check">
                    <span>Formulación Proyecto</span>
                </a>
                <a href="{{ url('/buscarProyecto') }}" class="btn btn-green">
                    <img src="{{ asset('assets/images/icons.reporte.png') }}" alt="Icono Reporte">
                    <span>Reporte Último Avance</span>
                </a>
            </div>
        </div>
    </body>
    </html>
