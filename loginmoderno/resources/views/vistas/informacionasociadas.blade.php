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
        <h1>Primer paso de la formulación</h1>
    </div>
    <div id="div3"></div>
    <div id="div4"></div>
    <div id="div5">
        <!-- Texto en el centro -->
        <form class="texto-just" action="/workReality/{{ $id }}" method='get'>

            

            <br />
            <br />
            <p> Teniendo en cuenta las definiciones y ejemplos de realidad escolar, es importante seleccionar de acuerdo
                con
                su propia realidad e intencionalidad investigativa la realidad concreta a investigar.</p>
            <br />



            <select id="categoria" name="categoria" onclick="mostrarEjemplo()" required>
                <option value="">Seleccione una realidad</option>
                <option value="fenomeno">Fenómeno</option>
                <option value="necesidad">Necesidad</option>
                <option value="problematica">Problemática</option>
                <option value="experiencia">Experiencia</option>
            </select>
            <br />
            <br />
            <!-- Contenedor donde aparecerá la descripción del ejemplo -->
            <em>
                <p id="ejemploTexto" style="display:none; margin-top: 10px;"></p>
            </em>
            <br />
            <br />
            <p>Teniendo en cuenta su selección, por favor redacte la formulación de su realidad. </p>
            <br />


            <textarea rows="7" cols="82" id="descripcion" name="descripcion"
                placeholder="De acuerdo al ejemplo, redacte aqui."></textarea>

            <!-- Guardar datos -->
            <input class="btnEnviar" type="submit" name="register" value="Guardar">

            <!-- Botones en la parte inferior -->
            <center>
                <a href="{{ route('inforealidades', ['id' => $id]) }}" class="btn5">Atrás</a>
                <a href="{{ route('infoenfoque', ['id' => $id]) }}" class="btn5">Siguiente</a>
            </center>


        </form>
        <!--
    <div class="savePdf">
        <input class="btnEnviar" type="submit" name="register" value="DescargarPDF">

       <img src="{{ 'assets/images/descargar-pdf.png' }}"/>
    </div>
-->
    </div>
</body>


<script>
    function mostrarEjemplo() {
        const categoria = document.getElementById("categoria").value;
        const ejemploTexto = document.getElementById("ejemploTexto");

        // Mostrar el texto del ejemplo dependiendo de la categoría seleccionada
        switch (categoria) {
            case "fenomeno":
                ejemploTexto.innerHTML =
                    "Ejemplo: fenomeno En el colegio femenino María auxiliadora en la ciudad de Villavicencio, en el año 2021 se desarrollaron de manera paralela  tres grupos de grado 11 a saber 11A, 11B y 11C, todos los grupos están constituidos por 30 estudiantes de similares características socioeconómicas y edades, en todos los grados se desarrolla la asignatura de Ingles IV bajo los mismos parámetros metodológicos y de tiempo, (hasta aquí se describió la realidad)los grupos A y C presentaron un 90,8% y un 91% de aprobación al finalizar el año escolar el grupo A presento un 20% de aprobación (el fenómeno), el análisis académico y curricular de esta realidad no ha permitido dar respuesta al porqué de esta situación es atípica y es susceptible de investigarse.  ";
                break;
            case "necesidad":
                ejemploTexto.innerHTML = "Pendiente.";
                break;
            case "problematica":
                ejemploTexto.innerHTML =
                    "Ejemplo del problema ,En el colegio femenino bilingüe María auxiliadora en la ciudad de Villavicencio ,(donde)  las estudiantes de los grados 8 (quienes)durante lo corrido del primer semestre de 2022,(cuando) no han logrado los resultados de aprendizaje esperados para la asignatura de inglés,(que)  lo cual se evidencia en: a) No  se han podido abordar los contenidos y actividades proyectadas para la asignatura.b) Los resultados de evaluación cuantitativos se alojan en promedio en 2,5, siendo este promedio, 1,7 por debajo del mismo  semestre de 2021. d) Los docentes de las demás áreas del conocimiento indican que sus espacios académicos se han afectado en tanto que, el conocimiento de la lengua extranjera que se esperaría posean a este momento, los estudiantes  no lo han desarrollado. Esto impacta en el proceso de la enseñanza y el aprendizaje y su formación bilingüe(cómo) (hasta aquí se describió la realidad) Dado lo anterior, se puede de manera apriori determinar que en el grado 8, se presentan problemas de aprendizaje de los saberes propios de la lengua extranjera, las cuales afectan el desarrollo académico de todas las asignaturas del curso, teniendo en cuenta que es una institución bilingüe. Esta situación,  puede desencadenar en la perdida del año escolar de los estudiantes (el problema ).";
                break;
            case "experiencia":
                ejemploTexto.innerHTML =
                    "Ejemplo de la experiencia, En el colegio femenino bilingüe María auxiliadora en la ciudad de Villavicencio, durante el periodo de emergencia ocasionada por el COVID 21, los docentes del área de inglés implementaron la estrategia 'Aprendiendo con mi familia', la cual, considerando que los estudiantes estaban  confinados con sus familias, podían documentar los relatos de los adultos y a partir de esta narrativa, los estudiantes construir textos; esta estrategia posibilitó mantener durante la pandemia el interés por la asignatura, involucrar a los padres de familia y cuidadores en el proceso de enseñanza y aprendizaje de los estudiantes, así como generar un sentido de pertenencia de los estudiantes hacia su familia, entre otros beneficios. Igualmente, es de resaltar que los resultados de aprendizaje con la implementación de esta estrategia permitió el mejoramiento del desempeño académico; así, en el mismo periodo del 2019, el promedio de las notas fue de 3,2 en tanto, que en el 2020, a través de esta estrategia, el promedio ascendió a 4,2, (hasta aquí se describió la realidad). Teniendo en cuenta lo anterior,  se considera importante documentar la estrategia, 'Aprendo con mi familia' implementada en el grado octavo (8) del Colegio bilingüe María Auxiliadora en el periodo de emergencia sanitaria, y modelarla, de tal manera que pueda ser replicada e institucionalizada permanentemente. (Estrategia a sistematizar).  ";
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
