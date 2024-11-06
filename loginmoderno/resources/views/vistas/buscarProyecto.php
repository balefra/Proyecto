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
    <link rel="stylesheet" href="assets/estiloss.css">
</head>

<body>

    <div class="cabecera">
        <h1>Crear Proyecto</h1>
    </div>
    <div class="container">
        <img src="assets/images/iberov2.png" class="iberov">
        <img src="assets/images/uNIVERSIDA TRES CULTURAS.png" class="utc">
    </div>

    <form>
     
        <p>Buscar proyecto</p>
        
        <input type="search" name="buscar" id="buscar" placeholder="Escriba aqui el codigo de su proyecto"
            required>
         <br />
        
        <!-- Tabla donde mostrara el registro  -->
         <!-- Contenedor donde aparecerá la descripción del ejemplo -->
          <div id="ejemploTexto"></div>
         <em>
            <p id="ejemploTexto" style="display:none; margin-top: 10px;"></p>
        </em>



       

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
                    texto: e.target.value
                }),
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With':'XMLHttpRequest',
                    "X-CSRF-Token": csrftoken
                }
            }).then(response => {
                return response.json()
            }).then(data => {
                var html = "<ul>";
                for (let i in data.lista) {
                    html += '<li>' + data.lista[i].titleDocument + '</li>';
                }
                 html += '<ul>';
                 document.getElementById("ejemploTexto").innerHTML = html;
            }).catch(error => console.error(error));
        })
    </script>
</body>

</html>
