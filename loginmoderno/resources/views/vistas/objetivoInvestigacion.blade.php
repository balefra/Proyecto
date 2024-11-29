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
        <h1>Objetivos de Investigación</h1>
    </div>
    <div id="div3"></div>
    <div id="div4"></div>
    <div id="div5"><!-- Texto en el centro -->
        <form class="texto-just">
            <br>

            @foreach ($tipoInvestigacion as $enfoque)
                @if ($enfoque->name_enfoque == 'cuantitativa')
                    <!-- Contenedor donde aparecerá la descripción-->
                    <p>Las investigaciones cuantitativas implican como mínimo:
                        <br><br>• Un objetivo de orientado a la identificación o sistematización de bases de datos de
                        carácter numérico
                        <br><br>• Un objetivo orientado al procesamiento estadístico (descriptivo o inferencial) de los
                        datos
                        <br><br>• Un objetivo orientado al análisis de resultados estadísticos (descriptivos o
                        inferenciales) obtenidos
                        <br><br>• Un objetivo orientado sistematización y presentación de resultados
                        <strong><br><br>Importante: En la redacción de los objetivos debe declararse o poder deducirse
                            con facilidad el resultado esperado del mismo.</strong>
                    </p>
                @elseif ($enfoque->name_enfoque == 'cualitativa')
                    <!-- Contenedor donde aparecerá la descripción-->
                    <p> Las investigaciones cualitativas implican como mínimo:
                        <br><br>• Un(os) objetivo(s) de carácter descriptivo o analítico según sea el caso por cada
                        categoría de análisis que se vaya abordar en el proceso de investigación
                        <br><br>• Un(os) objetivo(s) de carácter descriptivo o analítico según sea el caso que dé cuenta
                        de la interpretación y correlación de resultados obtenidos en los objetivos previos
                        <br><br>• Un(os) objetivo(s) de sistematización y presentación de resultados
                        <strong><br><br>Importante: En la redacción de los objetivos debe declararse o poder deducirse
                            con facilidad el resultado esperado del mismo</strong>
                        <em><br><br>Nota 1: las categorías de análisis deben estar declaradas en el título y objetivo
                            general y/o identificarse en los mismos de manera intuitiva y fácil</em>
                        <em><br><br>Nota 2: Para los proyectos de intervención deben incluirse:</em>
                        <br><br>• Un(os) objetivo(s) orientados al diseño o implementación de la estrategia o recurso
                        educativo
                        <em><br><br>Nota 3: Para los proyectos de intervención de carácter evaluativo deben
                            incluirse:</em>
                        <br><br>• Un(os) objetivo(s) orientados al diseño o implementación de la estrategia de
                        evaluación de la estrategia, recurso o experiencia educativa que se vaya a evaluar
                        <em><br><br>Nota 4: Para los proyectos de intervención de carácter IA o IAP deben
                            incluirse:</em>
                        <br><br>• Un(os) objetivo(s) orientados a la reflexión, toma de conciencia y transformación de
                        los sujetos que intervienen en el proceso investigativo
                    </p>
                @else
                    <!-- Contenedor donde aparecerá la descripción-->
                    <p>Las investigaciones mixtas implican
                        <br><br>• Un objetivo de carácter descriptivo o analítico según sea el caso por cada categoría
                        de análisis que se vaya abordar en el proceso de investigación" +
                        <br><br>• Un objetivo de carácter descriptivo o analítico según sea el caso que dé cuenta de la
                        interpretación y correlación de resultados obtenidos en los objetivos previos
                        <br><br>• Un objetivo de sistematización y presentación de resultados cualitativos
                        <br><br>• Un objetivo de orientado a la identificación o sistematización de bases de datos de
                        carácter numérico
                        <br><br>• Un objetivo orientado al procesamiento estadístico (descriptivo o inferencial) de los
                        datos
                        <br><br>• Un objetivo orientado al análisis de resultados estadísticos (descriptivos o
                        inferenciales) obtenidos
                        <br><br>• Un objetivo orientado sistematización y presentación de resultados cuantitativos
                        <br><br>• Un objetivo que dé cuenta de la interpretación, correlación e integración de
                        resultados cualitativos y cuantitativos
                        <br><br>• Un objetivo orientado sistematización y presentación de resultados mixtos
                        <strong><br><br>Importante: En la redacción de los objetivos debe declararse o poder deducirse
                            con facilidad el resultado esperado del mismo</strong>
                        <em><br><br>Nota 1: las categorías de análisis deben estar declaradas en el título y objetivo
                            general y/o identificarse en los mismos de manera intuitiva y fácil </em>
                        <em><br><br>Nota 2: Para los proyectos de intervención deben incluirse: </em>
                        <br><br>• Un(os) objetivo(s) orientados al diseño o implementación de la estrategia o recurso
                        educativo
                        <em><br><br>Nota 3: Para los proyectos de intervención de carácter evaluativo deben
                            incluirse:</em>
                        <br><br>• Un(os) objetivo(s) orientados al diseño o implementación de la estrategia de
                        evaluación de la estrategia o recurso educativo que se vaya a evaluar
                        <em><br><br>Nota 3: Para los proyectos de intervención de carácter IA o IAP deben incluirse:
                        </em>
                        <br><br>• Un(os) objetivo(s) orientados a la reflexión, toma de conciencia y transformación de
                        los sujetos que intervienen en el proceso investigativo.
                    </p>
                @endif
            @endforeach
   <!-- Guardar datos -->
           

            <!-- Botones en la parte inferior -->
            <center>
                <a href="{{ route('objetivoInvestigacion2', ['id' => $id]) }}" class="btn5">Siguiente</a>
            </center>

        </form>

    </div>

</body>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
</script>
</body>

</html>
