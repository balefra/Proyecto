<!DOCTYPE html>
<html>
<head>
    <title>Reporte PDF</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        h1 {
            color: #333;
            font-size: 16px;
            
        }
        .categoria {
            font-weight: bold;
        }
        .imagenpdf {
        width: 100px;
    }

    .imagenpdfutc {

        width: 150px;
    }
    </style>
</head>
<body>

    <div>
        <img class="imagenpdf" src="{{ public_path('assets/images/iberov2.jpg') }}">
        <img class="imagenpdfutc" src="{{ public_path('assets/images/utc.jpg') }}">


    </div>

    <h1>Identifación de la realidad educativa a investigar</h1>
    <p><span class="categoria">Categoría:</span> {{ $categoria }}</p>
    <p><span class="categoria">Descripción:</span> {{ $descripcion }}</p>
</body>
</html>
