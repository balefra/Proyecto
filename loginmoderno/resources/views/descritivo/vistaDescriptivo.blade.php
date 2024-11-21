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
    <form class="texto-just" action="/workTecnicas/1" method='get'>

        <h1>Tipo de Estudio </h1>

        <br />
        <br />
        <p>
        </p>
        <br />



        <select id="enfoque" name="enfoque" onclick="mostrarEjemplo()" required>
            <option value="">Seleccione un tipo de estudio</option>
            <option value="historico">Histórico o retrospectivo</option>
            <option value="descriptivo">Descriptivo (propiamente dicho) o prospectivo</option>
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
        <p>
        </p>
        <br />



        <select id="resultado" name="resultado" onclick="mostrarTextoResultado()" required>
            <option value="">Seleccione un tipo de estudio</option>
            <option value="estudio"> Estudio de impacto</option>
            <option value="biografias">Biografía</option>
            <option value="Compilacion">Compilación de experiencia(s)</option>
            <option value="narrativas">Narrativas</option>
            <option value="descriptivo">Descriptivo</option>
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
        <p> 
        </p>
        <br />



        <select id="tecnicas" name="tecnicas" onclick="mostrarTextoTecnica()" required>
            <option value="">Seleccione un tipo de estudio</option>
            <option value="estudio"> Estudio de impacto</option>
            <option value="biografias">Biografía</option>
            <option value="Compilacion">Compilación de experiencia(s)</option>
            <option value="narrativas">Narrativas</option>
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
            <a href="{{ url('/objetivoInvestigacion') }}" class="btn5">Siguiente</a>
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
                    "Indaga sobre hechos del presente, recopilando datos del contexto para poder describirlos e identificar o validar relaciones de significado y sentido a los mismos.";
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
            case "estudio":
                ejemploTextoResultado.innerHTML =
                    "Documento académico que da cuenta de la evaluación de resultados obtenidos en un periodo de tiempo determinado sobre un contexto vs las proyecciones o metas implícitas en un proyecto, una política, una estrategia, un currículo o la implementación de una teoría pedagógica.";
                break;
            case "biografias":
                ejemploTextoResultado.innerHTML =
                    "Documento académico de carácter narrativo que describe vida de un personaje buscando interpretar su proceso de evolución como educador y el aporte al saber educativo.";
                break;
            case "Compilacion":
                ejemploTextoResultado.innerHTML =
                    "Documento académico que presenta la descripción de una(s) experiencias educativas concretas identificando las relaciones de significado y sentido con teorías y saberes educativos, psicopedagógicos, sociales o culturales, valorando con los actores involucrados sus logros y desaciertos y deduciendo posibilidades de transferencia a otros contextos educativos.";
                break;
            case "narrativas":
                ejemploTextoResultado.innerHTML =
                    "Documento académico que da cuenta del análisis de los discursos inmersos en relatos de sujetos educativos para identificar prácticas, experiencias, concepciones, percepciones pedagógicas, culturales y de esa manera reconstruir o comprender realidades educativas.";
                break;
            case "descriptivo":
                ejemploTextoResultado.innerHTML =
                    "Documento que da cuenta del estado del arte de una realidad en el tiempo en relación con categorías preidentificadas y/o hipótesis planteadas y/o dimensiones de análisis predefinidas y/o preguntas orientadoras y/o teorías.";
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
            case "estudio":
                ejemploTextoTecnica.innerHTML = `
        <strong>Fuentes primarias:</strong><br>
        <strong>Análisis Documental:</strong><br>
        .- Documentos de planificación (del proyecto, la política, la estrategia, el currículo o la teoría pedagógica que se pretende analizar), de los cuales se puedan identificar las proyecciones o metas propuestas<br>
        .- Documentos de gestión de resultados, de los cuales se puedan identificar los resultados alcanzados categorizados por periodos<br>
        .- Informes de gestión, de los cuales se puedan identificar las acciones estratégicas o contingentes llevadas a cabo para el cumplimiento de las proyecciones o metas previstas<br>
        <strong>Entrevistas:</strong><br>
        .- Entrevistas estructuradas a los participantes y beneficiarios para determinar el alcance e impacto de los resultados<br>
        <strong>Encuestas de satisfacción:</strong><br>
        .- Encuestas de satisfacción diseñadas para medir el grado de satisfacción de los participantes y beneficiarios<br>
        <strong>Fuentes secundarias:</strong><br>
        .- Documentos académicos que den cuenta del análisis de impacto de realidades similares a la estudiada
    `;
                break;
            case "biografias":
                ejemploTextoTecnica.innerHTML = `
        <strong>Fuentes primarias:</strong><br>
        <strong>Análisis documental:</strong><br>
        .- Documentos generados por el sujeto investigado<br>
        .- Documentos generados por otros autores que den cuenta de la vida y obra del sujeto investigado<br>
        .- Documentos que den cuenta de los momentos históricos y contextuales en los cuales se desarrolló la vida y obra del sujeto investigado registros audiovisuales<br>
        <strong>Entrevistas estructuradas:</strong><br>
        .- Entrevistas estructuradas dirigidas al sujeto investigado, personas que le hayan conocido o hayan estudiado su vida y obra<br>
    `;
                break;

            case "Compilacion":
                ejemploTextoTecnica.innerHTML = `
        <strong>Fuentes primarias:</strong><br>
        <strong>Análisis documental:</strong><br>
        .- Documentos de planificación de la experiencia<br>
        .- Documentos que den cuenta del desarrollo y gestión de la experiencia<br>
        .- Informes de gestión que den cuenta de los resultados obtenidos<br>
        .- Documentos audiovisuales que registran la experiencia<br>
        <strong>Entrevistas:</strong><br>
        .- Entrevistas estructuradas a los participantes y beneficiarios para determinar el alcance e impacto de la experiencia<br>
        <strong>Encuestas de satisfacción:</strong><br>
        .- Encuestas de satisfacción diseñadas para medir el grado de satisfacción de los participantes y beneficiarios<br>
        <strong>Fuentes secundarias:</strong><br>
        .- Documentos académicos que den cuenta de la sistematización de experiencias similares<br>
    `;
                break;

            case "narrativas":
                ejemploTextoTecnica.innerHTML = `
        <strong>Fuentes primarias:</strong><br>
        .- Entrevistas estructuradas a través de las cuales se reconozcan los discursos de los sujetos<br>
        .- Diarios de Campo<br>
        .- Documentos que den cuenta de los momentos históricos y contextuales implícitos en las narrativas<br>
        .- Registros audiovisuales<br>
        .- Marcos Narrativos<br>
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
