<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/estilopdf.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <title>Trabajo Investigacion</title>
 
</head>

<body>
    @foreach ($proyecto as $pro)
    <header class="clearfix">
        <div id="logo">
            <img align=left src="{{ public_path('assets/images/iberov2peuqe.jpg') }}">
            <img align=right src="{{ public_path('assets/images/utcpeque.jpg') }}">
        </div>
        <br><br><br><br><br><br><br><br><br><br><br>
        <h1>Trabjo de investigacion </h1>
        <div id="project">
           
                
            <div><span>Titulo del proyecto:</span>{{ $pro->titleDocument}}</div>
            <br>
            <div><span>Universidad:</span>{{ $pro->school}}</div>
            <br>
            <div><span>Programa:</span>{{ $pro->nameProgram}}</div>
            <br>
            <div><span>Email</span> {{ $pro->email}}</div>
            <br>
            <div><span>Pais</span> {{ $pro->titleDocument}}</div>
            <br>
            <div><span>Departanento/Estado</span>{{ $pro->titleDocument}}</div>
            <br>
            <div><span>Municipio</span>{{ $proyecto}}</div>
            <br>
          
        </div>
    </header>
    <h3>Realidad </h3>
    <main>
        <div class="service"><span>Tipo
                <br>
            </span>{{ $pro->work->name_reality}} </div>
        <br>
        <div class="service"><span>Descripcion
                <br>
            </span> {{ $pro->work->descrip_reality}}</div>
        <br>
        
        <h3>Enfoque de investigacion </h3>

        <div>{{ $pro->work->name_enfoque}}</div>
        <br>
        <h3>tipo de investigacion </h3>

        <div>{{ $pro->work->type_investigation}}</div>
        <br>
        <h3>Tipo de estudio</h3>

        <div><span>--tipo de estudio sel--- </span></div>
        <br>
        <h3>Resultado Esperado </h3>

        <div><span>--es esp sel--- </span></div>
        <br>
        <h3>Técnicas de recolección y análisis de información asociadas </h3>

        <div><span>--teco sel--- </span></div>
        <br>

    </main>
    @endforeach
</body>

</html>
