<!doctype html>
<html lang="en">

<head>
    <title>Crear Proyecto</title>
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
        <h1>Crear Proyecto</h1>
    </div>
    <div class="container">
        <img src="{{ asset('assets/images/iberov2.png') }}"  class="iberov">
        <img src="{{ asset('assets/images/uNIVERSIDA TRES CULTURAS.png') }}" class="utc">
    </div>
    <form action="/" method="POST">
        @csrf        
            <input type="text" name="titleDocument" id="tittleDocument" placeholder="Titulo del proyecto" required>
               
            <!--<input type="date" id="dateDocument" placeholder="Fecha documento" required>-->
        
            <input type="text" name="school" id="universidad" placeholder="Universidad" required>

            <input type="text" name="nameProgram" id="nameProgram" placeholder="Nombre programa" required>

            <!--<input type="text" id="colaboradores" placeholder="Integrantes" required>

            <input type="text" id="idColaboradores" placeholder="Identificacion colaborales" required>

            <input type="email" id="email" placeholder="Correo electronico" required>
            

            <select id="categoriaInvestigacion" name="categoriaInvestigacion" required>
            <option value="">Categoría de Investigación</option>
            <option value="fundamental">Propuesta de investigación</option>
            <option value="aplicada">Investigación en Curso</option>
            <option value="desarrollo">Investigación y Desarrollo</option>
             </select>-->

            
           
        <input class="btnEnviar" type="submit" name="register" value="Guardar">   
         
    </div>
    <center>
    <a href="{{ url('/home')}}" >Atrás</a>
    <a href="{{ url('/Realidad')}}" >Siguiente</a>
    </center>
   
    </form>
    
   
    

    
    
     
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
