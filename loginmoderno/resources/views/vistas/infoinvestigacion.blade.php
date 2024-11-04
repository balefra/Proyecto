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

    <form class="texto-just" action="/workInvesti/1" method='get'>

        <h1>Segundo paso de la formulación</h1>

        <br />
        <br />
        <p> A continuación, es importante reconocer y seleccionar el tipo de investigación </p>
        <br />
        <p>  Los tipos de investigación son:
        </p>
        <br />


        <select id="investigacion" name="investigacion" onclick="mostrarEjemplo()" required>
            <option value="">Seleccione un investigación</option>
            <option value="analitico">Analíticos</option>
            <option value="descriptivo">Descriptivos</option>
            <option value="intervencion">De intervención </option>
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
            <a href="{{ url('/infoenfoque') }}" class="btn5">Atrás</a>
            <a onclick="redirigir()" class="btn5">Siguiente</a>
        </center>

    </form>



</body>


<script>
    function mostrarEjemplo() {
        const investigacion = document.getElementById("investigacion").value;
        const ejemploTexto = document.getElementById("ejemploTexto");

        // Mostrar el texto del ejemplo dependiendo de la enfoque seleccionada
        switch (investigacion) {
            case "analitico":
                ejemploTexto.innerHTML =
                    "El tipo analítico o empírico-analítico es un modelo  basado en la experimentación directa y/o  la lógica empírica, se caracteriza por descomponer la realidad a investigar en sus partes para poder comprenderlo.";
                break;
            case "descriptivo":
                ejemploTexto.innerHTML =
                    "El Tipo descriptiva consiste en describir y evaluar ciertas características de una realidad en el tiempo, intentando descubrir relaciones de significado y sentido entre las mismas o variables asociadas con estas características. La descripción depende en gran medida de los anteojos conceptuales del investigador." +
                    "<br><br>Nota: no se puede confundir un estudio descriptivo con sencillamente relatar una realidad en el tiempo sin identificar relaciones.";
                break;
            case "intervencion":
                ejemploTexto.innerHTML =
                    "El tipo de investigación aplicada cuyo propósito es transformar la realidad mediante la reflexión, toma de conciencia y empoderamiento de los sujetos y organizaciones y/o mediante los diseños de soluciones innovadoras que resuelvan problemas educativos o suplan necesidades.";
                break;
            default:
                ejemploTexto.innerHTML = "";
        }

        // Hacer visible el texto del ejemplo
        ejemploTexto.style.display = "block";
    }
    function redirigir() {
        const investigacion = document.getElementById("investigacion").value;

        // Redirigir según el valor seleccionado
        if (investigacion === "analitico") {
            window.location.href = "{{ url('/vistaAnalitico') }}";
        } else if (investigacion === "descriptivo") {
            window.location.href = "{{ url('/vistaDescriptivo') }}";
        } else if (investigacion === "intervencion") {
            window.location.href = "{{ url('/vistaIntervencion') }}";
        } else {
            alert("Por favor, selecciona un tipo de investigación.");
        }
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
