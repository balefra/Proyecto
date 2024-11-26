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
    <form class="texto-just"  action="/workTecnicas/{{ $id->id }}" method='get'>

        <h1>Tipo de Estudio </h1>

        <br />
        <br />
        <p>
        </p>
        <br />



        <select id="enfoque" name="enfoque" onclick="mostrarEjemplo()" required>
            <option value="">Seleccione un tipo de estudio</option>
            <option value="accion">Investigación Acción</option>
            <option value="educativa">Proyectos de Innovación educativa</option>
            <option value="participcion">Investigación Acción participación </option>

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
            <option value="">Seleccione el resultado esperado</option>
            <option value="accion">Investigación Acción</option>
            <option value="educativa">Proyectos de Innovación educativa</option>
            <option value="participcion">Investigación Acción participación </option>


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
            <option value="">Seleccione recolección y análisis</option>
            <option value="accion">Investigación Acción</option>
            <option value="educativa">Proyectos de Innovación educativa</option>
            <option value="participcion">Investigación Acción participación </option>


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
            <a href="{{ route('infoinvestigacion', ['id' => $id]) }}" class="btn5">Atrás</a>
            <a href="{{ route('objetivoInvestigacion', ['id' => $id]) }}" class="btn5">Siguiente</a>
        </center>

    </form>



</body>


<script>
    function mostrarEjemplo() {
        const enfoque = document.getElementById("enfoque").value;
        const ejemploTexto = document.getElementById("ejemploTexto");

        // Mostrar el texto del ejemplo dependiendo de la enfoque seleccionada
        switch (enfoque) {
            case "accion":
                ejemploTexto.innerHTML = `
        Indaga sobre la realidad haciendo parte activa de la investigación a los sujetos de la misma (comunidad), buscando de esta manera la <strong>reflexión, toma de conciencia y empoderamiento</strong> de los sujetos, así como una transformación positiva o apropiación cultural. La investigación transciende la comprensión de una realidad e implica la transformación individual y colectiva de la comunidad.<br><br>
        
        <strong>El investigador, además de investigar la realidad, genera dinámicas de reflexión, toma de conciencia y empoderamiento de la comunidad.</strong><br><br>
        
        <strong>Ejemplo:</strong> Análisis de las prácticas docentes de los profesores de anatomía y su incidencia en la formación de profesionales de medicina.
    `;
                break;

            case "educativa":
                ejemploTexto.innerHTML = `
        Procesos de investigación orientados al <strong>diseño y/o implementación de una estrategia</strong> que supla una necesidad educativa o resuelva una problemática educativa en particular ya documentada.<br><br>

        La estrategia puede traducirse, entre otros, en:<br>
        .- El diseño de una secuencia didáctica<br>
        .- El diseño de material educativo físico o virtual<br>
        .- La implementación o adaptación de cierta estrategia ya validada por la comunidad académica<br>
        .- La formulación de políticas y/o modelos de formación
    `;
                break;

            case "participcion":
                ejemploTexto.innerHTML = `
        Indaga sobre la realidad haciendo parte activa de la investigación a los sujetos de la misma (comunidad) y del propio investigador, buscando de esta manera la <strong>reflexión, toma de conciencia y empoderamiento</strong> de los sujetos, así como una transformación positiva o apropiación cultural. La investigación transciende la comprensión de una realidad e implica la transformación individual y colectiva de la comunidad y del propio investigador.<br><br>
        
        <strong>El investigador, además de investigar la realidad, genera dinámicas de reflexión y auto reflexión, toma de conciencia y empoderamiento tanto de sí mismo como de la comunidad.</strong><br><br>
        
        <strong>Ejemplo:</strong> Análisis de las prácticas docentes de los profesores de anatomía y su incidencia en la formación de profesionales de medicina (donde el investigador es uno de los docentes).
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

            case "accion":
                ejemploTextoResultado.innerHTML = "Documento académico que da cuenta de manera paralela  primero, la comprensión de una realidad y segundo, la toma de conciencia, transformación y empoderamiento de los sujetos (o comunidad) como resultado de la reflexión y comprensión de sus comportamiento, costumbres, reacciones, emociones, experiencias, razonamientos o percepciones frente a determinada realidad educativa.";
                break;
            case "educativa":
                ejemploTextoResultado.innerHTML = "Documento académico que da cuenta de la identificación de la problemática o la necesidad educativa y el diseño  y/o implementación de una estrategia innovadora  que supla una necesidad educativa o resuelva una problemática educativa en particular, este documento incluye la documentación de diseño y pilotaje del  mismo.";
                break;
            case "participcion":
                ejemploTextoResultado.innerHTML = "Documento académico que da cuenta de manera paralela primero, la comprensión de una realidad y segundo, la toma de conciencia, transformación y empoderamiento de los sujetos (o comunidad) incluido el propio investigador  como resultado de la reflexión y comprensión de sus comportamiento, costumbres, reacciones, emociones, experiencias, razonamientos o percepciones frente a determinada realidad educativa.";
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
            case "accion":
                ejemploTextoTecnica.innerHTML = `
        Para la <strong>comprensión de la realidad</strong> se pueden utilizar las mismas fuentes de investigaciones observacionales.<br><br>
        
        Para la <strong>toma de conciencia, transformación y empoderamiento</strong> de los sujetos (o comunidad):<br><br>

        <strong>Fuentes primarias:</strong><br>
        .- Observación no participante<br>
        .- Grupos focales<br>
        .- Grupos de discusión<br>
        .- Autoevaluaciones<br>
        .- Diálogo reflexivo<br>
        .- Matrices de reflexión y toma de conciencia de los investigados<br>
        .- Matriz de transformaciones en el contexto educativo
    `;
                break;

            case "educativa":
                ejemploTextoTecnica.innerHTML = `
        <strong>Fase 0:</strong> Descripción de la problemática o necesidad<br><br>
        
        <strong>Fase I:</strong> Concepción<br>
        .- Entrevistas: orientadas a determinar los requerimientos de la comunidad educativa para utilizarlos posteriormente en el "diseño"<br>
        .- Matrices de requerimientos técnicos, pedagógicos, didácticos para utilizarlos en el "diseño"<br>
        .- Matrices de levantamiento de recursos (humanos, técnicos, financieros) disponibles para el futuro diseño<br><br>
        
        <strong>Fase II:</strong> Prediseño<br>
        .- Diagramas o representaciones gráficas que representan el diseño del producto o proceso<br><br>

        <strong>Fase III:</strong> Diseño<br>
        .- Si es material didáctico: guías, talleres o tangibles didácticos<br>
        .- Si es material audiovisual: guiones, diseños gráficos, grabaciones de audio y video<br>
        .- Si es material virtual: guiones, diseños gráficos, OVI, AVAs, recursos en línea (talleres, guías, simuladores...)<br>
        .- Si es software educativo: diagramas de diseño de software, algoritmos, pseudocódigos, códigos, manuales de uso, manuales de instalación, y el software educativo<br>
        .- Si es una estrategia didáctica: secuencia didáctica, criterios de evaluación, competencias, resultados de evaluación, actividades, recursos educativos<br>
        .- Si es una estrategia curricular: perfiles de ingreso, planes de formación, planes de operacionalización, criterios de evaluación<br><br>

        <strong>Fase IV:</strong> Validación<br>
        .- Validación por usuarios: entrevistas de percepción<br>
        .- Validación por expertos: reporte de factibilidad<br><br>

        <strong>Fase V:</strong> Pilotaje<br>
        .- Encuestas de satisfacción<br>
        .- Entrevistas de percepción<br>
        .- Tabulación de resultados
    `;
                break;

            case "participcion":
                ejemploTextoTecnica.innerHTML = `
        Para la <strong>comprensión de la realidad</strong> se pueden utilizar las mismas fuentes de investigaciones observacionales.<br><br>

        Para la <strong>toma de conciencia, transformación y empoderamiento</strong> de los sujetos (o comunidad):<br><br>

        <strong>Fuentes primarias:</strong><br>
        .- Observación participante<br>
        .- Grupos focales<br>
        .- Grupos de discusión<br>
        .- Autoevaluaciones<br>
        .- Diálogo reflexivo<br>
        .- Historias de vida<br>
        .- Matrices de reflexión y toma de conciencia del investigador y los investigados<br>
        .- Matriz de transformaciones en el contexto educativo
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
