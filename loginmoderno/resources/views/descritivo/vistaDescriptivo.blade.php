<!doctype html>
<html lang="en">

<head>
    <title>Formulación del proyecto</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/estilosss.css') }}">

</head>
<div class="container">
    <img src="{{ asset('assets/images/iberov2.png') }}" class="logo-izquierda">
    <img src="{{ asset('assets/images/uNIVERSIDA TRES CULTURAS.png') }}" class="logo-derecha">
</div>

<body>

    <!-- Texto en el centro -->
    <form class="texto-just">

        <h1>Tipo de estudio </h1>

        <br />
        <br />
        <p> descripción
        </p>
        <br />



        <select id="enfoque" name="enfoque" onclick="mostrarEjemplo()" required>
            <option value="">Seleccione un tipo de estudio</option>
            <option value="historico">Histórico o retrospectiv</option>
            <option value="descriptivo">Descriptivo (propiamente dicho) o prospectivo:</option>
        </select>
        <br />
        <br />

        <!-- Contenedor donde aparecerá la descripción del ejemplo -->
        <em>
            <p id="ejemploTexto" style="display:none; margin-top: 10px;"></p>
        </em>



        <!-- Guardar datos -->
        <input class="btnEnviar" type="submit" name="register" value="Guardar">

        <!-- Botones en la parte inferior -->
        <center>
            <a href="{{ url('/infoinvestigacion') }}" class="btn5">Atrás</a>
            <a href="{{ url('#') }}" class="btn5">Siguiente</a>
        </center>

    </form>



</body>


<script>
    function mostrarEjemplo() {
        const enfoque = document.getElementById("enfoque").value;
        const ejemploTexto = document.getElementById("ejemploTexto");

        // Mostrar el texto del ejemplo dependiendo de la enfoque seleccionada
        switch (enfoque) {
            case "historico":
                ejemploTexto.innerHTML =
                    "Indaga sobre hechos del pasado, buscando reconstruir acontecimientos y revelar como se dieron.";
                break;
            case "descriptivo":
                ejemploTexto.innerHTML =
                    "Indaga sobre hechos del presente, recopilando datos del contexto para poder describirlos  e identificar o validar relaciones de significado y sentido a los mismos.";
                break;

            default:
                ejemploTexto.innerHTML = "";
        }

        // Hacer visible el texto del ejemplo
        ejemploTexto.style.display = "block";
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
</script>
</body>

</html>
