<!doctype html>
<html lang="en">

<head>
    <title>B. componente Realidad</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/estiloss.css') }}">
</head>

<body>
<div class="cabecera">
        <h1>Modelado Investigación</h1>
    </div>
    <div class="container">
        <img src="{{ asset('assets/images/iberov2.png') }}"  class="iberov">
        <img src="{{ asset('assets/images/uNIVERSIDA TRES CULTURAS.png') }}" class="utc">
    </div>

    
    <form action="#" method="post" class="form-container">
    <h3>Componente Realidad</h3>
        
    
      <label for="fenomeno">Fenómeno</label>
      <textarea  rows="7" id="fenomeno"  placeholder="Situación de una realidad que se presenta de manera arbitraria a los parámetros esperados y que genera la inquietud o necesidad de interpretar/comprender, describir el fenómeno." required></textarea>
      
        <label for="necesidad">Necesidad</label>
      <textarea rows="7" id="fenomeno"  placeholder="Situación de una realidad que se constituye en un imperativo a cumplir nolmalmente asociado con el cumplimiento de una determinada imposicion politica o legal, describir necesidad." required></textarea>

      <label for="problematica">Problemática</label>
      <textarea rows="7" id="problematica" placeholder="Situación de una realidad que afecta el bienestar de un individuo  o una organización y que genera la necesidad imperiosa de resolver /suplir." required></textarea>

      <label for="experiencia">Experiencia</label>
      <textarea  rows="7" id="experiencia" placeholder="Acción consciente o deliberada, normalmente no documentada a través de la cual se  ha interpretado un fenómeno o resuelto una problemática  y que genera la necesidad de sistematizar / compilar." required></textarea>

 
       
        <center>
    <a href="{{ url('/home')}}"  class="btn5">Atrás</a>
    <a href="{{ url('#') }}" class="btn5">Guardar</a>
    <a href="{{ url('/Realidad')}}"  class="btn5">Siguiente</a>
    </center>
    </form>

    
    <body>
      
  

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
