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

    <form action="{{ route('generar.pdf') }}" method="POST" class="form-container">
        @csrf
        <h3>Enfoque de Investigación</h3>
        <p>
            <justify>Una vez que ya tiene clara la realidad, debemos seleccionar el enfoque de la investigación. Existen tres tipos de enfoque:</justify>
        </p>

        <!-- Selección de enfoque -->
        <label for="enfoque">Seleccione el enfoque de la investigación</label>
        <select id="enfoque" name="enfoque" onchange="mostrarEjemploEnfoque()" required>
            <option value="" disabled selected>Seleccione un enfoque</option>
            <option value="cualitativa">Cualitativa</option>
            <option value="cuantitativa">Cuantitativa</option>
            <option value="mixta">Mixta</option>
        </select>

        <!-- Contenedor donde aparecerá la descripción del enfoque -->
        <p id="ejemploTextoEnfoque" style="margin-top: 10px;"></p>

        <h3>Tipo de Investigación</h3>
        <p>
            <justify>Una vez seleccionado el enfoque, seleccione el tipo de investigación:</justify>
        </p>

        <!-- Selección de tipo de investigación -->
        <label for="tipo">Seleccione el tipo de investigación</label>
        <select id="tipo" name="tipo" onchange="mostrarEjemploTipo()" required>
            <option value="" disabled selected>Seleccione un tipo de investigación</option>
            <option value="descriptivo">Descriptivo</option>
            <option value="analitico">Analítico</option>
            <option value="intervencion">Intervención</option>
        </select>

        <!-- Contenedor donde aparecerá la descripción del tipo -->
        <p id="ejemploTextoTipo" style="margin-top: 10px;"></p>

        <center>
            <a href="{{ url('/home') }}" class="btn5">Atrás</a>
            <a href="{{ url('/tipo') }}" class="btn5">Siguiente</a>
            <button type="submit" class="btn5">Guardar</button>
        </center>
    </form>

    <script>
        function mostrarEjemploEnfoque() {
            const enfoque = document.getElementById("enfoque").value;
            const ejemploTextoEnfoque = document.getElementById("ejemploTextoEnfoque");

            // Mostrar el texto del ejemplo dependiendo del enfoque seleccionado
            switch (enfoque) {
                case "cualitativa":
                    ejemploTextoEnfoque.innerHTML =
                        "Enfoque cualitativo: De carácter inductivo, basado en datos no numéricos, su propósito es dar cuenta de relaciones de significado y sentido en una realidad.";
                    break;
                case "cuantitativa":
                    ejemploTextoEnfoque.innerHTML =
                        "Enfoque cuantitativo: De carácter deductivo, basado en datos numéricos, su propósito es identificar tendencias y regularidades.";
                    break;
                case "mixta":
                    ejemploTextoEnfoque.innerHTML =
                        "Enfoque mixto: Combina las perspectivas cualitativa y cuantitativa en un mismo estudio.";
                    break;
                default:
                    ejemploTextoEnfoque.innerHTML = "";
            }
        }

        function mostrarEjemploTipo() {
            const tipo = document.getElementById("tipo").value;
            const ejemploTextoTipo = document.getElementById("ejemploTextoTipo");

            // Mostrar el texto del ejemplo dependiendo del tipo de investigación seleccionado
            switch (tipo) {
                case "descriptivo":
                    ejemploTextoTipo.innerHTML =
                        "Investigación descriptiva: Describe y evalúa características de una realidad, identificando relaciones entre variables.";
                    break;
                case "analitico":
                    ejemploTextoTipo.innerHTML =
                        "Investigación analítica: Descompone la realidad en sus partes para comprenderla mediante experimentación o lógica empírica.";
                    break;
                case "intervencion":
                    ejemploTextoTipo.innerHTML =
                        "Investigación de intervención: Busca transformar la realidad mediante reflexión y diseño de soluciones innovadoras.";
                    break;
                default:
                    ejemploTextoTipo.innerHTML = "";
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
