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
            <h1 align=center>Trabajo de Investigación </h1>
            <br /><br />
            <div id="project">


                <div><span><b>Titulo del proyecto:</b> </span>{{ $pro->titleDocument }}</div>
                <br>
                <div><span><b>Universidad:</b> </span>{{ $pro->school }}</div>
                <br>
                <div><span><b>Programa:</b> </span>{{ $pro->nameProgram }}</div>
                <br>
                <div><span><b>Email:</b> </span> {{ $pro->email }}</div>
                <br>

                <table>
                    <thead>
                        <tr>
                            <th class="service">Colaborador     </th>
                            <th class="desc">   identificacion</th>
                        </tr>
                    </thead>
                    @foreach ($pro->integrant as $integ)
                        <tbody>
                            <tr>
                                <td class="service">{{ $integ->nombre }}    </td>
                                <td class="desc">  {{ $integ->identificacion }}</td>
                            </tr>
                            <tr>
                        </tbody>
                    @endforeach
                </table>

                <br>
                <div><span><b>Pais:</b> </span> {{ $pro->titleDocument }}</div>
                <br>
                <div><span><b>Departanento/Estado:</b> </span>{{ $pro->departamento->name }}</div>
                <br>
                <div><span><b>Municipio: </b></span>{{ $pro->municipio->name }}</div>
                <br>

            </div>
        </header>
        <main>
            <h3>Realidad: </h3>

            <div class="service"><span><b>Tipo:</b>

                </span>{{ $pro->work->name_reality }} </div>
            <br>
            <div class="service"><span><b>Descripcion:</b>

                </span> {{ $pro->work->descrip_reality }}</div>
            <br>

            <h3>Enfoque de investigacion </h3>

            <div>{{ $pro->work->name_enfoque }}</div>
            <br>
            <h3>tipo de investigacion </h3>

            <div>{{ $pro->work->type_investigation }}</div>
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
