<!doctype html>
<html lang="en">

<head>
    <title>Formulación del proyecto</title>
    <!-- Required meta tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
        <h1>Formulación del Proyecto</h1>
    </div>
    <div id="div3"></div>
    <div id="div4"></div>
    <div id="div5">
        <!-- Texto en el centro -->
        <div class="texto-centro">

            <p>La primera fase en el desarrollo de un proyecto es la formulación de este, para ello es importante tener
                en
                cuenta las siguientes apreciaciones:</p>
            <p><strong>Objeto de estudio e investigación en educación:</strong></p>
            <p>El objeto de estudio e investigación en educación son(es) la(s) realidad(es) que se presenta(n) en los
                contextos educativos, también denominados contextos escolares.</p>
            <p>Al respecto partimos por tanto del concepto de realidad como:</p>
            <blockquote>“aquello que acontece de manera verdadera o cierta, en oposición a lo que pertenece al terreno
                de
                la fantasía, la imaginación o la ilusión. Lo real, por lo tanto, es lo que existe efectivamente.”
            </blockquote>
            <p><small>Porto, J. P., & Gardey, A. (2013, junio 17). Realidad. Definición.de; Definicion.de.<a
                        href="https://definicion.de/realidad/"
                        target="_blank">https://definicion.de/realidad/</a></small>
            </p>
            <!-- Botones en la parte inferior -->
            <center>
                <a href="{{ url('/home') }}" class="btn5">Atrás</a>
                <a href="{{ route('inforealidades', ['id' => $id]) }}" class="btn5">Siguiente</a>
            </center>

        </div>
       
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
