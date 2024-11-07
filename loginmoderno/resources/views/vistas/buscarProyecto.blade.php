<!doctype html>
<html lang="en">

<head>
    <title>Crear Proyecto</title>
    <!-- Required meta tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
        <img src="{{ asset('assets/images/iberov2.png') }}" class="iberov">
        <img src="{{ asset('assets/images/uNIVERSIDA TRES CULTURAS.png') }}" class="utc">
    </div>
    <form action="/" method="POST" class="texto-left">
        @csrf
        <input type="search" name="buscar" id="buscar" placeholder="Escriba aqui el codigo de su proyecto" required>
        <br />
        <div name="municipios" id="municipios"></div>
            




        <center>
            <a href="{{ url('/home') }}" class=bnt5>Atrás</a>
            <a href="{{ url('/formacionproyecto') }}" class=bnt5>Siguiente</a>
        </center>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script>
        const csrftoken = document.head.querySelector('[name~=csrf-token][content]').content;
        document.getElementById('buscar').addEventListener('change', (e) => {
            fetch('/proyecto', {
                method: 'POST',
                body: JSON.stringify({
                    texto: buscar.value
                }),
                headers: {
                    'Content-Type': 'application/json',
                    "X-CSRF-Token": csrftoken
                }
            }).then(response => {
                return response.json()
            }).then(data => {
                var opciones = "";
                for (let i in data.lista) {
                    opciones += '<p>' + data.lista[i].titleDocument + '</p>';
                }
                                 
                document.getElementById("municipios").innerHTML = opciones;
            }).catch(error => console.error(error));

        })
    </script>
</body>

</html>
