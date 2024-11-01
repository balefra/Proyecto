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

        <h1>Tipo de Estudio </h1>

        <br />
        <br />
        <p> descripción
        </p>
        <br />



        <select id="enfoque" name="enfoque" onclick="mostrarEjemplo()" required>
            <option value="">Seleccione un tipo de estudio</option>
            <option value="observacionales">Observacionales:</option>
            <option value="exploratorio">Exploratorio:</option>
            <option value="experimentales">Experimentales:</option>

        </select>
        <br />
        <br />

        <!-- Contenedor donde aparecerá la descripción del ejemplo -->
        <em>
            <p id="ejemploTexto" style="display:none; margin-top: 10px;"></p>
        </em>

        <h1>Resultado Esperado </h1>

        <br />
        <br />
        <p> descripción
        </p>
        <br />



        <select id="resultado" name="resultado" onclick="mostrarTextoResultado()" required>
            <option value="">Seleccione el resultado esperado</option>
            <option value="observacionales">Observacionales:</option>
            <option value="exploratorio">Exploratorio:</option>
            <option value="experimentales">Experimentales:</option>
            
        </select>
        <br />
        <br />

        <!-- Contenedor donde aparecerá la descripción del ejemplo -->
        <em>
            <p id="ejemploTextoResultado" style="display:none; margin-top: 10px;"></p>
        </em>

        <h1>Técnicas de Recolección y Análisis de Información Asociadas </h1>

        <br />
        <br />
        <p> descripción
        </p>
        <br />



        <select id="tecnicas" name="tecnicas" onclick="mostrarTextoTecnica()" required>
            <option value="">Seleccione recolección y análisis</option>
            <option value="observacionales">Observacionales:</option>
            <option value="exploratorio">Exploratorio:</option>
            <option value="experimentales">Experimentales:</option>
            
        </select>
        <br />
        <br />

        <!-- Contenedor donde aparecerá la descripción del ejemplo -->
        <em>
            <p id="ejemploTextoTecnica" style="display:none; margin-top: 10px;"></p>
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
            case "observacionales":
                ejemploTexto.innerHTML = `
        <strong>Análisis (lógico-empírico)</strong> del comportamiento, costumbres, reacciones, emociones, experiencias, razonamientos o percepciones de un sujeto o grupos de sujetos frente a determinada realidad social y educativa (o comprender las relaciones y estructuras sociales del grupo en este caso el estudio tiene un carácter etnográfico).<br><br>
        El análisis de las observaciones realizadas por el investigador permite develar tendencias y regularidades. En este caso, el investigador <strong>NO MANIPULA</strong> ninguna variable ni controla los resultados o las condiciones, sino que observa y documenta de forma rigurosa y sistemática sin intervenir la realidad tal como existe. Por ello, también se conoce como estudios <strong>NO experimentales</strong>.<br><br>
        <strong>Ejemplo:</strong> Análisis de los hábitos de estudio en estudiantes de pregrado en licenciatura con bajo nivel de desempeño académico.<br><br>
        El investigador es solo observador de la realidad.
    `;
                break;

            case "exploratorio":
                ejemploTexto.innerHTML = `
        <strong>Tipo de investigación (lógico-empírico o cuasiexperimental)</strong> que aborda normalmente una realidad poco conocida o fenómeno educativo. En este sentido, se considera una aproximación a la comprensión de tal fenómeno y una base para futuras investigaciones. Es posible que de una investigación exploratoria emerjan hipótesis y/o preguntas de investigación válidas para ser abordadas en otras investigaciones.
    `;
                break;

            case "experimentales":
                ejemploTexto.innerHTML = `
        <strong>Análisis (experimental)</strong> del comportamiento, costumbres, reacciones, emociones, experiencias, razonamientos o percepciones de un sujeto o grupos de sujetos frente a una realidad en la cual el investigador <strong>MANIPULA</strong> una o varias variables. El análisis de las observaciones realizadas por el investigador permite develar tendencias y regularidades.<br><br>
        El investigador es manipulador de la realidad.
    `;
                break;

            default:
                ejemploTexto.innerHTML = "";
        }

        // Hacer visible el texto del ejemplo
        ejemploTexto.style.display = "block";
    }

    function mostrarTextoResultado() {
        const resultado = document.getElementById("resultado").value;
        const ejemploTextoResultado = document.getElementById("ejemploTextoResultado");

        // Mostrar el texto del ejemplo dependiendo del resultado seleccionado
        switch (resultado) {
            case "observacionales":
                ejemploTextoResultado.innerHTML =
                    "Documento académico que da cuenta de los comportamientos,constumbres y reacciones de los sujetos o comunidad en relación con una determinada realidad educativa, en este documento el investigador induce o deduce relaciones de significado y sentido entre los comportamientos,constumbres y reacciones y la realidad mostrándolas de manera concluyente y sistemática (estructurada,  objetiva  y argumentada) como regularidades, tendencias.";
                break;
            case "exploratorio":
                ejemploTextoResultado.innerHTML =
                    "Documento académico que presenta la descripción del fenómeno y la aproximación a la comprensión del mismo proyectando hipótesis, y/o preguntas de investigación validas para ser abordadas en otras investigaciones";
                break;
            case "experimentales":
                ejemploTextoResultado.innerHTML =
                    "Documento académico que da cuenta de las variación en el comportamiento, costumbres o reacciones de un sujeto o grupos de sujetos en la medida que el investigador manipula una o varias variables (tiempo, ambiente, características de los sujetos, dinámicas ...) de la realidad investigada generando nuevas posibles realidades o situaciones,  en este documento el investigador induce o deduce relaciones de significado y sentido entre los comportamientos, costumbres y reacciones para cada posible realidad o situación generada por la manipulación de variables,  mostrándolas de manera concluyente y sistemática (estructurada,  objetiva  y argumentada) como regularidades, tendencias,";
                break;
          
            default:
                ejemploTextoResultado.innerHTML = "";
        }

        // Hacer visible el texto del ejemplo
        ejemploTextoResultado.style.display = "block";
    }

    function mostrarTextoTecnica() {
        const tecnicas = document.getElementById("tecnicas").value;
        const ejemploTextoTecnica = document.getElementById("ejemploTextoTecnica");

        // Mostrar el texto del ejemplo dependiendo del resultado seleccionado
        switch (tecnicas) {
            case "observacionales":
    ejemploTextoTecnica.innerHTML = `
        <strong>Fuentes primarias</strong><br>
        .- <strong>Observación no participante:</strong> Diario de campo, en el cual se registran los comportamientos, costumbres, reacciones, emociones, experiencias, razonamientos o percepciones de los sujetos o comunidad en relación con dimensiones de análisis de una determinada realidad educativa.<br><br>
        .- <strong>Entrevistas:</strong><br>
        Entrevistas estructuradas o semiestructuradas, en las cuales se indaga a los sujetos o comunidad sobre sus comportamientos, costumbres, reacciones, emociones, experiencias, razonamientos o percepciones frente a una determinada realidad educativa, teniendo como categorías de indagación las dimensiones de análisis previamente determinadas.<br><br>
        .- <strong>Análisis documental:</strong><br>
        Documentos preexistentes que den cuenta de comportamientos, costumbres, reacciones, emociones, experiencias, razonamientos o percepciones de los sujetos o comunidad frente a una determinada realidad educativa, teniendo como categorías de indagación las dimensiones de análisis previamente determinadas.<br><br>
        .- <strong>Análisis de registros audiovisuales</strong>
    `;
    break;

case "exploratorio":
    ejemploTextoTecnica.innerHTML = `
        <strong>(Estudio de caso)</strong><br>
        Documento académico que presenta la descripción del fenómeno y la aproximación a la comprensión del mismo, proyectando hipótesis y/o preguntas de investigación válidas para ser abordadas en otras investigaciones.
    `;
    break;

case "experimentales":
    ejemploTextoTecnica.innerHTML = `
        <strong>Fuentes primarias</strong><br>
        .- <strong>Observación no participante:</strong> Diario de campo, en el cual se registran los comportamientos, costumbres, reacciones, emociones, experiencias, razonamientos o percepciones de los sujetos o comunidad en relación con la manipulación de variables de la realidad educativa investigada.<br><br>
        .- <strong>Entrevistas:</strong><br>
        Entrevistas estructuradas o semiestructuradas, en las cuales se indaga a los sujetos o comunidad sobre sus comportamientos, costumbres, reacciones, emociones, experiencias, razonamientos o percepciones frente a la manipulación de variables de la realidad educativa investigada.<br><br>
        .- <strong>Matrices de tabulación y análisis de resultados de las variables a manipular</strong><br><br>
        <strong>Fuentes secundarias</strong><br>
        .- <strong>Análisis documental:</strong><br>
        Documentos preexistentes que den cuenta de comportamientos, costumbres, reacciones, emociones, experiencias, razonamientos o percepciones de los sujetos o comunidad frente a experimentos similares al abordado en la investigación.<br><br>
        .- <strong>Análisis de registros audiovisuales</strong><br><br>
        Documento académico que da cuenta de la variación en el comportamiento, costumbres o reacciones de un sujeto o grupos de sujetos en la medida que el investigador manipula una o varias variables (tiempo, ambiente, características de los sujetos, dinámicas, etc.) de la realidad investigada, generando nuevas posibles realidades o situaciones. En este documento, el investigador induce o deduce relaciones de significado y sentido entre los comportamientos, costumbres y reacciones para cada posible realidad o situación generada por la manipulación de variables, mostrándolas de manera concluyente y sistemática (estructurada, objetiva y argumentada) como regularidades y tendencias.
    `;
    break;




            default:
                ejemploTextoTecnica.innerHTML = "";
        }

        // Hacer visible el texto del ejemplo
        ejemploTextoTecnica.style.display = "block";
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
