<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
        {{ __('cerrar sesión') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div>

<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Research Assistant</title>
    <link rel="stylesheet" href="{{ asset('assets/estiloss.css') }}">
</head>

<body>
    <div class="cabecera">
        <h1>Virtual <span class="highlight">Research Assistant</span></h1>
    </div>
    <div class="container">
        <img src="{{ asset('assets/images/iberov2.png') }}"  class="iberov">
        <img src="{{ asset('assets/images/uNIVERSIDA TRES CULTURAS.png') }}" class="utc">
    </div>
    
    <div class="buttons-container">           
                <a href="{{ url('/crear') }}" class="btn btn-blue">
                    <img src="{{ asset('assets/images/iconsformulacion.png') }}" alt="Icono Check">
                    <span>Crear Proyecto</span>
                </a>  
                <a href="{{ url('/Realidad') }}" class="btn btn-orange">
                    <img src="{{ asset('assets/images/iconsformulacion.png') }}" alt="Icono Check">
                    <span>Formulación Proyecto</span>
                </a>                
                <a href="/pdf" class="btn btn-green">
                    <img src="{{ asset('assets/images/icons.reporte.png') }}" alt="Icono Reporte">
                    <span>Reporte Último Avance</span>
                </a>          
    </div>

            
        
    </div>
</body>

</html>