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
        <h1>Objetivos de Investigación <em>(taxonomia bloom)</em></h1>
    </div>
    <div id="div3"></div>
    <div id="div4"></div>
    <div id="div5"><!-- Texto en el centro -->
        <form class="texto-left" action="/objetivos/{{ $id }}" method='get'>
            <p>De acuerdo a la metodologia bloom por favor redacte sus objetivos:</p>
            <p>Objetivo General</p>
            <input type="text" name="oGeneral" id="oGeneral" placeholder="Escriba su objetivo especifico" required>
            <br>
            <br>
            <p>Objetivo Especifico </p>
            <input type="text" name="oEspecifico1" id="oEspecifico1"
                placeholder="Escriba aqui los objetivos especificos del proyecto" required>
            <p>Objetivo Especifico </p>
            <input type="text" name="oEspecifico2" id="oEspecifico2"
                placeholder="Escriba aqui los objetivos especificos del proyecto" required>
            <p>Objetivo Especifico </p>
            <input type="text" name="oEspecifico3" id="oEspecifico3"
                placeholder="Escriba aqui los objetivos especificos del proyecto" >
            <p>Objetivo Especifico </p>
            <input type="text" name="oEspecifico4" id="oEspecifico4"
                placeholder="Escriba aqui los objetivos especificos del proyecto" >
            <br>


            <br>

            <!-- Guardar datos -->
            <input class="btnEnviar" type="submit" name="register" value="Guardar">
            <br>
            <br>
        </form>

        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th id="tablac1" scope="col" width="30">RECORDAR</th>
                    <th id="tablac2" scope="col" width="60">COMPRENDER</th>
                    <th id="tablac3" scope="col" width="30">APLICAR</th>
                    <th id="tablac4" scope="col" width="30">ANALIZAR</th>
                    <th id="tablac5" scope="col" width="30">EVALUAR</th>
                    <th id="tablac6" scope="col" width="30">CREAR</th>
                </tr>
                <thead>
                <tbody>
                    <tr>
                        <td id="tablaf1" scope="row">Adquirir<br>
                            Anotar<br>
                            Citar (textualmente)<br>
                            Decir<br>
                            Definir<br>
                            Detallar<br>
                            Distinguir<br>
                            Enlistar<br>
                            Enumerar<br>
                            Enunciar<br>
                            Escribir<br>
                            Exhibir<br>
                            Exponer<br>
                            Expresar<br>
                            Identificar<br>
                            Indicar<br>
                            Marcar<br>
                            Membretar<br>
                            Nombrar<br>
                            Mostrar<br>
                            Narrar<br>
                            Reconocer<br>
                            Recordar<br>
                            Referir<br>
                            Registrar<br>
                            Relatar<br>
                            Repetir<br>
                            Señalar<br>
                            Subrayar</td>
                        <td id="tablaf2">Argumentar<br>
                            Cambiar<br>
                            Codificar<br>
                            Completar<br>
                            Comprender<br>
                            Concretar<br>
                            Convertir<br>
                            Decir (con sus palabras)<br>
                            Decodificar<br>
                            Definir (con sus palabras)<br>
                            Demostrar<br>
                            Derivar<br>
                            Describir<br>
                            Determinar<br>
                            Diferenciar<br>
                            Distinguir<br>
                            Ejemplificar<br>
                            Establecer<br>
                            Estimar<br>
                            Explicar<br>
                            Exponer<br>
                            Extender<br>
                            Extrapolar<br>
                            Formular<br>
                            Generalizar<br>
                            Identificar<br>
                            Inducir<br>
                            Inferir<br>
                            Interpolar<br>
                            Leer<br>
                            Narrar<br>
                            Opinar<br>
                            Organizar<br>
                            Parafrasear<br>
                            Predecir<br>
                            Redefinir<br>
                            Redisponer<br>
                            Relacionar<br>
                            Reorganizar<br>
                            Representar<br>
                            Rescribir<br>
                            Resumir<br>
                            Traducir<br>
                            Transformar</td>
                        <td id="tablaf3">Actuar<br>
                            Aplicar<br>
                            Aprovechar<br>
                            Clasificar<br>
                            Computar<br>
                            Decir<br>
                            Demostrar<br>
                            Discriminar<br>
                            Dramatizar<br>
                            Elegir<br>
                            Emplear<br>
                            Enlazar<br>
                            Explicar<br>
                            Exponer<br>
                            Generalizar<br>
                            Ilustrarv
                            Localizar<br>
                            Interpretar<br>
                            Manejar<br>
                            Mostrar<br>
                            Operar<br>
                            Practicar<br>
                            Producir<br>
                            Representar<br>
                            Resolver<br>
                            Seleccionar<br>
                            Transferir<br>
                            Trazar<br>
                            Usar<br>
                            Utilizar</td>
                        <td id="tablaf4">Abstraer<br>
                            Aislar<br>
                            Analizar<br>
                            Clasificar<br>
                            Comparar<br>
                            Contrastar<br>
                            Decidir<br>
                            Deducir<br>
                            Derivar<br>
                            Desarmar<br>
                            Descomponer<br>
                            Describir<br>
                            Descubrir<br>
                            Desglosar<br>
                            Detallar<br>
                            Detectar<br>
                            Diferenciar<br>
                            Discriminar<br>
                            Distinguir<br>
                            Dividir<br>
                            Especificar<br>
                            Examinar<br>
                            Fraccionar<br>
                            Identificar<br>
                            Localizar<br>
                            Omitir<br>
                            Relacionar<br>
                            Seccionar<br>
                            Seleccionar</td>
                        <td id="tablaf5">Argumentar<br>
                            Categorizar<br>
                            Clasificar<br>
                            Comparar<br>
                            Comprobar<br>
                            Conceptuar<br>
                            Concluir<br>
                            Considerar<br>
                            Constatar<br>
                            Contrastar<br>
                            Criticar<br>
                            Decidir<br>
                            Demostrar<br>
                            Determinar<br>
                            Elegir<br>
                            Escoger<br>
                            Establecer<br>
                            Estandarizar<br>
                            Estimar<br>
                            Estudiar<br>
                            Evaluar<br>
                            Fundamentar<br>
                            Justificar<br>
                            Justipreciar<br>
                            Juzgar<br>
                            Medir<br>
                            Observar<br>
                            Opinar<br>
                            Predecir<br>
                            Precisar<br>
                            Probar<br>
                            Reconocer<br>
                            Revisar<br>
                            Seleccionar<br>
                            Sustentar<br>
                            Trazar<br>
                            Verificar<br>
                            Valorar</td>
                        <td id="tablaf6">Agrupar<br>
                            Clasificar<br>
                            Combinar<br>
                            Componer<br>
                            Compilar<br>
                            Concebir<br>
                            Confeccionar<br>
                            Construir<br>
                            Crear<br>
                            Descubrir<br>
                            Diseñar<br>
                            Distribuir<br>
                            Ejecutar<br>
                            Elaborar<br>
                            Ensamblar<br>
                            Esquematizar<br>
                            Especificar<br>
                            Establecer<br>
                            Estructurar<br>
                            Explicar<br>
                            Exponer<br>
                            Expresar<br>
                            Formar<br>
                            Formular<br>
                            Fundar<br>
                            Generar<br>
                            Idear<br>
                            Implantar<br>
                            Improvisar<br>
                            Instituir<br>
                            Instaurar<br>
                            Inventar<br>
                            Inventariar<br>
                            Investigar<br>
                            Modificar<br>
                            Narrar<br>
                            Organizar<br>
                            Originar<br>
                            Planear<br>
                            Producir<br>
                            Programar<br>
                            Proponer<br>
                            Proyectar<br>
                            Reconstruir<br>
                            Reacomodar<br>
                            Relatar<br>
                            Relacionar<br>
                            Realizar<br>
                            Reorganizar<br>
                            Reparar<br>
                            Simplificar<br>
                            Transmitir<br>
                            Variar</td>
                    </tr>
                    <tr>
                </tbody>
        </table>
        <!-- Botones en la parte inferior -->


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
