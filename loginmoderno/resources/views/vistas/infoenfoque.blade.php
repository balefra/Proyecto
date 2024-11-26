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
    <link rel="stylesheet" href="{{ asset('assets/flexbox.css') }}">

</head>


<body class="container">

    <div id="div1">
        <img src="{{ asset('assets/images/iberov2.png') }}" class="iberov" align= "left">
        <img src="{{ asset('assets/images/uNIVERSIDA TRES CULTURAS.png') }}" class="utc" align= "right">
    </div>
    <div id="div2">
        <h1>Segundo paso de la formulación</h1>
    </div>
    <div id="div3"></div>
    <div id="div4"></div>
    <div id="div5">
        <!-- Texto en el centro -->
        <form class="texto-just" action="/workEnfoque/{{ $id->id }}" method='get'>
            <br />
            <p> Teniendo en cuenta la formulación de su realidad a investigar, es importante identificar el enfoque y
                tipo
                de investigación en el cual se enmarcará el proyecto de investigación.
                Inicialmente partimos reconocer el concepto de los diferentes enfoques de investigación aplicados en
                educación
            </p>
            <br />



            <select id="enfoque" name="enfoque" onclick="mostrarEjemplo()" required>
                <option value="">Seleccione un enfoque</option>
                <option value="cualitativa">Cualitativa</option>
                <option value="cuantitativa">Cuantitativa</option>
                <option value="mixta">Mixta</option>
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
                <a href="{{ route('informacionasociadas', ['id' => $id]) }}" class="btn5">Atrás</a>
                <a href="{{ route('infoinvestigacion', ['id' => $id]) }}" class="btn5">Siguiente</a>
            </center>

        </form>
    </div>


</body>


<script>
    function mostrarEjemplo() {
        const enfoque = document.getElementById("enfoque").value;
        const ejemploTexto = document.getElementById("ejemploTexto");

        // Mostrar el texto del ejemplo dependiendo de la enfoque seleccionada
        switch (enfoque) {
            case "cualitativa":
                ejemploTexto.innerHTML =
                    "El enfoque de investigación cualitativa es normalmente (pero no excluyente) de carácter INDUCTIVO, cuya principal fuente de información reposa en datos de carácter NO NUMERICO (Lo cual no implica que se utilicen algunos datos numéricos para validar o sustentar afirmaciones), y su propósito es dar cuenta de las relaciones de significado y sentido implícitas en una determinada realidad, para su identificación y análisis normalmente se utilizan dimensiones o categorías de análisis  predeterminadas  o que emergen del proceso investigativo.";
                break;
            case "cuantitativa":
                ejemploTexto.innerHTML =
                    "El enfoque de investigación cuantitativo esnormalmente (pero no excluyente) de carácter DEDUCTIVO, cuya principal fuente de información reposa en datos de carácter NUMERICO (Lo cual no implica que se utilicen algunos datos NO numéricos para validar o sustentar afirmaciones), su propósito es identificar tendencias y regularidades que a su vez pueden (o podrán) servir de sustento a relaciones de significado y sentido implícitas en una determinada realidad.";
                break;
            case "mixta":
                ejemploTexto.innerHTML =
                    "El enfoque de investigación mixta combina las perspectivas cualitativa y cuantitativa.";
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
