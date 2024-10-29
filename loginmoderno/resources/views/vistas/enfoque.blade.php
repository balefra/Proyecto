<!doctype html>
<html lang="es">

<head>
    <title>Enfoque</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/estiloss.css') }}">
</head>

<body>
    <div class="cabecera">
        <h1>Selección del Enfoque y Tipo de investigación</h1>
    </div>
    <div class="container">
        <img src="{{ asset('assets/images/iberov2.png') }}" class="iberov">
        <img src="{{ asset('assets/images/uNIVERSIDA TRES CULTURAS.png') }}" class="utc">
    </div>

    <form action="/investigation" method="POST">
        @csrf
        <input type="text" name="idDocumento" id="idDocumento" placeholder="Codigo registro investigación" required>

        <h3>Enfoque de Investigación</h3>
        <p>Una vez que ya tiene clara la realidad, debemos seleccionar el enfoque de la investigación. Existen tres
            tipos de enfoque:</p>

        <!-- Selección de enfoque -->
        <label for="enfoque">Seleccione el enfoque de la investigación</label>
        <select id="enfoque" name="enfoque" onchange="mostrarInfo('enfoque')" required>
            <option value="" disabled selected>Seleccione un enfoque</option>
            <option value="cualitativa">Cualitativa</option>
            <option value="cuantitativa">Cuantitativa</option>
            <option value="mixta">Mixta</option>
        </select>
        <img src="{{ asset('assets/images/boton-de-informacion.png') }}" class="info-icon"
            onclick="mostrarInfo('enfoque')" alt="Ver definición">

        <h3>Tipo de Investigación</h3>
        <label for="tipo">Seleccione el tipo de investigación</label>
        <select id="tipo" name="tipo" onchange="mostrarOpcionesTipo()" required>
            <option value="" disabled selected>Seleccione un tipo de investigación</option>
            <option value="descriptivo">Descriptivo</option>
            <option value="analitico">Analítico</option>
            <option value="intervencion">Intervención</option>
        </select>
        <img src="{{ asset('assets/images/boton-de-informacion.png') }}" class="info-icon" onclick="mostrarInfo('tipo')"
            alt="Ver definición">

            <!-- descriptivo  -->
        <!-- Campo Tipo de Estudio -->
        <div id="tipoEstudioContainer" style="display: none;">
            <h3>Tipo de Estudio</h3>
            <label for="tipoEstudio">Seleccione el tipo de estudio</label>
            <select id="tipoEstudio" name="tipoEstudio" required>
                <option value="" disabled selected>Seleccione un tipo de estudio</option>
                <option value="dhistorico">Histórico o retrospectivo</option>
                <option value="dtdescritivo">Descriptivo (propiamente dicho) o prospectivo</option>
            </select>
            <button type="button" onclick="mostrarEjemplo()">Ver definición</button>
            <!-- Contenedor donde aparecerá la descripción del ejemplo -->
     <p id="ejemploTexto" style="display:none; margin-top: 10px;"></p>
        </div>

        <!-- Campo Resultados Esperados -->
        <div id="resultadosEsperadosContainer" style="display: none;">
            <h3>Resultados Esperados</h3>
            <label for="resultadosEsperados">Seleccione los resultados esperados</label>
            <select id="resultadosEsperados" name="resultadosEsperados" required>
                <option value="" disabled selected>Seleccione resultados esperados</option>
                <option value="historicoImpacto">Histórico estudio de impacto</option>
                <option value="historicoBiografia">Histórico Biografía</option>
                <option value="historicoCompilacion">Histórico Compilación de experiencia(s)</option>
                <option value="narrativas">Narrativas</option>
                <option value="edescriptivo">Descriptivo: (propiamente dicho)</option>
            </select>
        </div>

        <!-- Campo Técnicas de Recolección y Análisis de Información -->
        <div id="tecnicasContainer" style="display: none;">
            <h3>Técnicas de Recolección y Análisis de Información</h3>
            <label for="tecnicas">Seleccione técnicas de recolección y análisis</label>
            <select id="tecnicas" name="tecnicas" required>
                <option value="" disabled selected>Seleccione una técnica</option>
                <option value="fuentesPrimarias">Estudio de impacto</option>
                <option value="fuentesPrimarias">Biografía</option>
                <option value="fuentesPrimarias">Compilación de experiencia(s)</option>
                <option value="fuentesPrimarias">Narrativas</option>
            </select>
        </div>


        <!-- analitico  -->
        <!-- Campo Tipo de Estudio -->
        <div id="campoAnalitico1" style="display: none;">
            <h3>Tipo de Estudio</h3>
            <label for="tipoEstudio">Seleccione el tipo de estudio</label>
            <select id="tipoEstudio" name="tipoEstudio" required>
                <option value="" disabled selected>Seleccione un tipo de estudio</option>
                <option value="historico">Observacionales:</option>
                <option value="tdescritivo">Experimentales:</option>
            </select>
        </div>

        <!-- Campo Resultados Esperados -->
        <div id="campoAnalitico2" style="display: none;">
            <h3>Resultados Esperados</h3>
            <label for="resultadosEsperados">Seleccione los resultados esperados</label>
            <select id="resultadosEsperados" name="resultadosEsperados" required>
                <option value="" disabled selected>Seleccione resultados esperados</option>
                <option value="historicoImpacto">Observacionales:</option>
                <option value="historicoBiografia">Experimentales:</option>
                <option value="historicoCompilacion">Exploratorio:</option>
                
            </select>
        </div>

        <!-- Campo Técnicas de Recolección y Análisis de Información -->
        <div id="campoAnalitico3" style="display: none;">
            <h3>Técnicas de Recolección y Análisis de Información</h3>
            <label for="tecnicas">Seleccione técnicas de recolección y análisis</label>
            <select id="tecnicas" name="tecnicas" required>
                <option value="" disabled selected>Seleccione una técnica</option>
                <option value="fuentesPrimarias">Observacionales:</option>
                <option value="fuentesPrimarias">Experimentales:</option>
                <option value="fuentesPrimarias">Exploratorio</option>
                
            </select>
        </div>

        <center>
            <a href="{{ url('/home') }}" class="btn5">Atrás</a>
            <a href="#" class="btn5">Siguiente</a>
            <button type="submit" class="btn5">Guardar</button>
        </center>
    </form>

    <!-- Ventana emergente tipo anuncio para mostrar la definición -->
    <div class="popup-info" id="popupInfo">
        <span class="close-btn" onclick="cerrarInfo()">&times;</span>
        <div id="infoTexto"></div>
    </div>

    <script>
        
        function mostrarInfo(categoria) {
            const infoTexto = document.getElementById("infoTexto");
            const enfoque = document.getElementById("enfoque").value;
            const tipo = document.getElementById("tipo").value;

            if (categoria === 'enfoque') {
                switch (enfoque) {
                    case "cualitativa":
                        infoTexto.innerHTML =
                            "<strong>Enfoque cualitativo:</strong> De carácter inductivo, basado en datos no numéricos.";
                        break;
                    case "cuantitativa":
                        infoTexto.innerHTML = "<strong>Enfoque cuantitativo:</strong> Basado en datos numéricos.";
                        break;
                    case "mixta":
                        infoTexto.innerHTML =
                            "<strong>Enfoque mixto:</strong> Combina las perspectivas cualitativa y cuantitativa.";
                        break;
                    default:
                        infoTexto.innerHTML = "Seleccione un enfoque para ver su definición.";
                }
            } else if (categoria === 'tipo') {
                switch (tipo) {
                    case "descriptivo":
                        infoTexto.innerHTML =
                            "<strong>Investigación descriptiva:</strong> Describe y evalúa características de una realidad.";
                        break;
                    case "analitico":
                        infoTexto.innerHTML =
                            "<strong>Investigación analítica:</strong> Descompone la realidad para comprenderla.";
                        break;
                    case "intervencion":
                        infoTexto.innerHTML =
                            "<strong>Investigación de intervención:</strong> Busca transformar la realidad.";
                        break;
                    default:
                        infoTexto.innerHTML = "Seleccione un tipo de investigación para ver su definición.";
                }
            }
            document.getElementById("popupInfo").style.display = "block";
        }

        function cerrarInfo() {
            document.getElementById("popupInfo").style.display = "none";
        }

        function mostrarOpcionesTipo() {
            const tipo = document.getElementById("tipo").value;

            // Mostrar campos específicos para "Descriptivo"
            if (tipo === "descriptivo") {
                document.getElementById("tipoEstudioContainer").style.display = "block";
                document.getElementById("resultadosEsperadosContainer").style.display = "block";
                document.getElementById("tecnicasContainer").style.display = "block";

                // Asegurarse de ocultar los campos de "Analítico"
                document.getElementById("campoAnalitico1").style.display = "none";
                document.getElementById("campoAnalitico2").style.display = "none";
                document.getElementById("campoAnalitico3").style.display = "none";
            }
            // Mostrar campos específicos para "Analítico"
            else if (tipo === "analitico") {
                document.getElementById("campoAnalitico1").style.display = "block";
                document.getElementById("campoAnalitico2").style.display = "block";
                document.getElementById("campoAnalitico3").style.display = "block";

                // Asegurarse de ocultar los campos de "Descriptivo"
                document.getElementById("tipoEstudioContainer").style.display = "none";
                document.getElementById("resultadosEsperadosContainer").style.display = "none";
                document.getElementById("tecnicasContainer").style.display = "none";
            }
            // Ocultar todos los campos si no es ni "Descriptivo" ni "Analítico"
            else {
                document.getElementById("tipoEstudioContainer").style.display = "none";
                document.getElementById("resultadosEsperadosContainer").style.display = "none";
                document.getElementById("tecnicasContainer").style.display = "none";

                document.getElementById("campoAnalitico1").style.display = "none";
                document.getElementById("campoAnalitico2").style.display = "none";
                document.getElementById("campoAnalitico3").style.display = "none";
            }
                       
        }
        function mostrarEjemplo() {
            const tipoEstudio = document.getElementById("tipoEstudio").value;
            const ejemploTexto = document.getElementById("ejemploTexto");

            // Mostrar el texto del ejemplo dependiendo de la categoría seleccionada
            switch (tipoEstudio) {
                case "dhistorico":
                    ejemploTexto.innerHTML ="Indaga sobre hechos del pasado, buscando reconstruir acontecimientos y revelar como se dieron."
                    break;
                case "dtdescritivo":
                    ejemploTexto.innerHTML = "Indaga sobre hechos del presente, recopilando datos del contexto para poder describirlos  e identificar o validar relaciones de significado y sentido a los mismos.";
                    break;
                default:
                    ejemploTexto.innerHTML = "";
            }

            // Hacer visible el texto del ejemplo
            ejemploTexto.style.display = "block";
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQ+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
