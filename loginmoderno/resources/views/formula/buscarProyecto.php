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
<form class="texto-just">
         <h1>Buscar proyecto</h1>
         <input type="search" name="codProyecto" id="codProyecto" placeholder="Escribe aqui el codigo de tu proyecto"
          value="{{$buscar}}"     required>
            <br />
       
      <table name="proyect" id="proyect">
        <thead>
            <tr>
                <th>Nombre Proyecto</th>
            </tr>
        </thead>
      </table>
    
    </form>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
      <script>
        const csrftoken = document.head.querySelector('[name~=csrf-token][content]').content;
        document.getElementById('codProyecto').addEventListener('change', (e) => {
            fetch('/proyecto', {
                method: 'POST',
                body: JSON.stringify({
                    texto: codProyecto.value
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
                    opciones += '<tr><td>' + data.lista[i].id + '</td></tr>';

                }
                document.getElementById("proyect").innerHTML = opciones;
            }).catch(error => console.error(error));

        })
    </script>

</body>

</html>
