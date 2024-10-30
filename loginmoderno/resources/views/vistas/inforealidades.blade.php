<!doctype html>
<html lang="en">
    <head>
        <title>Formulación del proyecto</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    <link rel="stylesheet" href="{{ asset('assets/estilosss.css') }}">

    </head>
    <div class="container">
        <img src="{{ asset('assets/images/iberov2.png') }}" class="logo-izquierda">
        <img src="{{ asset('assets/images/uNIVERSIDA TRES CULTURAS.png') }}" class="logo-derecha">
    </div>
    <body>
        <div class="cabecera">
            <h1>Formulación del proyecto</h1>
        </div>
    
        <!-- Texto en el centro -->
        <div class="texto-left">
            <p>Para efectos prácticos las realidades escolares se tipifican en:</p>
            <ol>
                <li>Fenmenos<button type="button" class="btn-ej">Ejemplo</button><button type="button"class="btn-ej">Definición</button></li>
                <li>Problemáticas</li>
                <li>Necesidades</li>
                <li>Experiencias o practicas educativas (o escolares)</li>
              </ol>
         
        
       
        <!-- Botones en la parte inferior -->
        <center>
            <a href="{{ url('/home') }}" class="btn5">Atrás</a>
            <a href="{{ url('/Realidad') }}" class="btn5">Siguiente</a>
        </center>
    
        </div>
    
               
            
    </body>
        

        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
