<!doctype html>
<html lang="en">

<head>
    <title>Crear Proyecto</title>
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
    <style>
        .puntero {
            cursor: pointer;
        }

        .ocultar {
            display: none;
        }
    </style>


    <div id="div1">
        <img src="{{ asset('assets/images/iberov2.png') }}" class="iberov" align= "left">
        <img src="{{ asset('assets/images/uNIVERSIDA TRES CULTURAS.png') }}" class="utc" align= "right">
    </div>
    <div id="div2">
        <h1>Crear Proyecto</h1>
    </div>
    <div id="div3"></div>
    <div id="div4"></div>
    <div id="div5">
        <form action="/" method="POST" class="texto-left" id="form_contacto">
            @csrf
            <p>Titulo del proyecto de investigación </p>

            <input type="text" name="titleDocument" id="tittleDocument"
                placeholder="Escriba aqui el titulo del proyecto" required>
            <br>
            <!--<input type="date" id="dateDocument" placeholder="Fecha documento" required>-->
            <p>Universidad </p>

            <input type="text" name="school" id="universidad"
                placeholder="Escriba aqui la universidad a la que pertenece" required>
            <br>
            <p>Nombre del programa </p>

            <input type="text" name="nameProgram" id="nameProgram"
                placeholder="Escriba aqui el nombre del programa al que pertenece" required>
            <br>


            <div class="form-row">
                <div class="bnt5 col-md-12">
                    <button class="btn btn-primary" id="agregar">Agregar colaborador</button>
                </div>
            </div>
            <div class="form-row clonar">
                <div class="form-group col-md-12">
                    <br>
                    <p for="">Nombre del colaborador</p>
                    <input type="text" name="collaborators[]" id="collaborators"
                        placeholder="Escriba aqui los integrantes del proyecto" required>
                    <br>
                    <p for="">Identificacion del colaborador</p>
                    <input type="text" name="idCollaborators[]" id="idCollaborators"
                        placeholder="Escriba aqui la identificacion  colaboradores" required>

                    <span class="puntero ocultar">Eliminar</span>
                </div>
            </div>
            <div id="contenedor"></div>

            <br>
            <p>Correo electronico</p>

            <input type="email" name="email" id="email" placeholder="Escriba aqui su correo electronico"
                required>
            <br>

            <?php
            use App\Models\Countries;
            
            $country = Countries::all();
            
            ?>
            <p>Pais </p>

            <select id="paises" name="paises" required>
                <option value="">Seleccione un pais</option>
                @foreach ($country as $row)
                    <option value={{ $row['id'] }}>{{ $row['name'] }}</option>
                @endforeach
            </select>
            <br>


            <p>Departamento </p>

            <select id="departamentos" name="departamentos" required>
                <option value="">Seleccione un departamento</option>
            </select>
            <br>

            <p>Municipio </p>
            <select name="municipios" id="municipios">
                <option value="">Seleccione un municipio</option>
            </select>
            <br>



            <input class="btnEnviar" type="submit" name="register" value="Guardar">


            <center>
                <a href="{{ url('/home') }}" class=bnt5>Atrás</a>
                <a href="{{ url('/formacionproyecto') }}" class=bnt5>Siguiente</a>
            </center>
    </div>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script>
        const csrftoken = document.head.querySelector('[name~=csrf-token][content]').content;
        // lista de departamentos
        document.getElementById('paises').addEventListener('change', (e) => {
            fetch('/departamentos', {
                method: 'POST',
                body: JSON.stringify({
                    texto: e.target.value
                }),
                headers: {
                    'Content-Type': 'application/json',
                    "X-CSRF-Token": csrftoken
                }
            }).then(response => {
                return response.json()
            }).then(data => {
                var opciones = "";
                for (let i in data.lista) {
                    opciones += '<option value="' + data.lista[i].id + '">' + data.lista[i].name +
                        '</option>';

                }
                document.getElementById("departamentos").innerHTML = opciones;
            }).catch(error => console.error(error));

        })
        // lista de muinicipios
        document.getElementById('departamentos').addEventListener('change', (e) => {
            fetch('/municipios', {
                method: 'POST',
                body: JSON.stringify({
                    texto: e.target.value
                }),
                headers: {
                    'Content-Type': 'application/json',
                    "X-CSRF-Token": csrftoken
                }
            }).then(response => {
                return response.json()
            }).then(data => {
                var opciones = "";
                for (let i in data.lista) {
                    opciones += '<option value="' + data.lista[i].id + '">' + data.lista[i].name +
                        '</option>';

                }
                document.getElementById("municipios").innerHTML = opciones;
            }).catch(error => console.error(error));

        })


        //campos dinamicos            
        let agregar = document.getElementById('agregar');
        let contenido = document.getElementById('contenedor');

        let boton_enviar = document.querySelector('#enviar_contacto')

        agregar.addEventListener('click', e => {
            e.preventDefault();
            let clonado = document.querySelector('.clonar');
            let clon = clonado.cloneNode(true);

            contenido.appendChild(clon).classList.remove('clonar');

            let remover_ocutar = contenido.lastChild.childNodes[1].querySelectorAll('span');
            remover_ocutar[0].classList.remove('ocultar');
        });

        contenido.addEventListener('click', e => {
            e.preventDefault();
            if (e.target.classList.contains('puntero')) {
                let contenedor = e.target.parentNode.parentNode;

                contenedor.parentNode.removeChild(contenedor);
            }
        });


        boton_enviar.addEventListener('click', e => {
            e.preventDefault();

            const formulario = document.querySelector('#form_contacto');
            const form = new FormData(formulario);

            const peticion = {
                body: form,
                method: 'POST'
            };

            fetch('php/inserta-contacto.php', peticion)
                .then(res => res.json())
                .then(res => {
                    if (res['respuesta']) {
                        alert(res['mensaje']);
                        formulario.reset();
                    } else {
                        alert(res['mensaje']);
                    }

                });


        });
    </script>
</body>

</html>
