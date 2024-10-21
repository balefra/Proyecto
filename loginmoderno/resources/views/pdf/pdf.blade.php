<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .imagenpdf {
        width: 100px;
    }

    .imagenpdfutc {

        width: 150px;
    }

    body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .form-container {
            width: 100%;
            margin: 20px auto;
            border: 1px solid black;
            padding: 10px;
        }
        .form-title {
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
            text-transform: uppercase;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        .category-section {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        .category-section div {
            display: flex;
            align-items: center;
        }
        .category-section input {
            margin-right: 5px;
        }

    /* Aquí defines el ancho de la columna izquierda */
    .left-col {
        width: 30%;
        /* Ajusta el porcentaje según lo que necesites */
    }

    .right-col {
        width: 30%;
        /* Ajusta si es necesario */
    }

    td input {
        width: 100%;
    }
   
</style>
</style>

<body>
    <div>
        <img class="imagenpdf" src="{{ public_path('assets/images/iberov2.jpg') }}">
        <img class="imagenpdfutc" src="{{ public_path('assets/images/utc.jpg') }}">


    </div>
    <div class="form-container">
        
        <h2>FORMATO ÚNICO DE INSCRIPCIÓN PARA PROYECTOS DE INVESTIGACIÓN </h2>
        <table>
            <tr>
                <td class="left-col">Título de proyecto</td>
                <td class="right-col"><input type="text"></td>
            </tr>
            <tr>
                <td class="left-col">Universidad</td>
                <td class="right-col"><input type="text"></td>
            </tr>
            <tr>
                <td class="left-col">Nombre programa</td>
                <td class="right-col"><input type="text"></td>
            </tr>
        </table>
        
    </div>

</body>

</html>
