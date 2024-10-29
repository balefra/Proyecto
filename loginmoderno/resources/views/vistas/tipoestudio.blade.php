<!doctype html>
<html lang="es">
<head>
    <title>Tipo de estudio</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/estiloss.css') }}">
   
</head>
<body>
    <div class="container mt-5">
        <h1>Tipo de estudio</h1>
        <form action="/guardar-descripcion" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="subcategoria">Descriptivo</label>
                <select id="subcategoria" name="subcategoria" class="form-control" required>
                    <option value="" disabled selected>Seleccione una opción</option>
                    <option value="historico">Histórico o retrospectivo</option>
                    <option value="descriptivo">Descriptivo</option>
                </select>
            </div>
            
            <!-- Botón para ver la definición -->
            <button type="button" class="btn btn-info" onclick="mostrarDefinicion()">Ver Definición</button>
            
            <button type="submit" class="btn btn-primary mt-3">Siguiente</button>
            <a href="{{ url('/tipo') }}" class="btn btn-secondary mt-3">Atrás</a>
        </form>
        
        <!-- Ventana emergente tipo anuncio para mostrar la definición -->
        <div class="popup-info" id="popupInfo">
            <span class="close-btn" onclick="cerrarDefinicion()">&times;</span>
            <div id="definicionTexto">
                <!-- Aquí se mostrará la definición según la selección -->
            </div>
        </div>
    </div>

    <script>
        function mostrarDefinicion() {
            const subcategoria = document.getElementById("subcategoria").value;
            const definicionTexto = document.getElementById("definicionTexto");

            // Cambia el texto de definición según la selección
            switch (subcategoria) {
                case "historico":
                case "retrospectivo":
                    definicionTexto.innerHTML = "<strong>Histórico o retrospectivo:</strong> Indaga sobre hechos del pasado, buscando reconstruir acontecimientos y revelar cómo se dieron.";
                    break;
                case "descriptivo":
                    definicionTexto.innerHTML = "<strong>Descriptivo (propiamente dicho) o prospectivo:</strong> Indaga sobre hechos del presente, recopilando datos del contexto para describirlos e identificar o validar relaciones de significado y sentido.";
                    break;
                default:
                    definicionTexto.innerHTML = "Seleccione una subcategoría para ver su definición.";
                    return;
            }

            // Muestra la ventana emergente
            document.getElementById("popupInfo").style.display = "block";
        }

        function cerrarDefinicion() {
            // Oculta la ventana emergente
            document.getElementById("popupInfo").style.display = "none";
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>
</body>
</html>
