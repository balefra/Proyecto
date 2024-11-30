<!DOCTYPE html>
<html lang="en">


<head>

    <title>Buscar Proyecto</title>
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
        <h1>Buscar Proyecto</h1>
    </div>
    <div id="div3"></div>
    <div id="div4"></div>
    <div id="div5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" width="50">#</th>
                    <th scope="col" width="300">Nombre Proyecto</th>
                    <th scope="col" width="300">Nombre del programa</th>
                    <th scope="col" width="50">PDF</th>
                </tr>
                <thead>
                    @foreach ($registro as $reg)
                <tbody>
                    <tr>
                        <td scope="row">{{ $reg->id }} </td>
                        <td> {{ $reg->titleDocument }}</td>
                        <td scope="row">{{ $reg->integrant->pluck('nombre') }} </td>
                        <td><a href="{{ url("/infopdf/{$reg->id}") }}" target="_blank"><img
                                    src="{{ asset('assets/images/PdfBN.png') }}" class="imagenP"></a></td>
                    </tr>
                    <tr>
                </tbody>
                @endforeach
        </table>
    </div>
    <div id="div6">
        <a href="{{ url('/home') }}"><img src="{{ asset('assets/images/Inicio.png') }}" class="imagenH"></a>
    </div>
</body>

</html>
