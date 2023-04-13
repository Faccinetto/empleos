<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../resources/css/principal.css">
    <link rel="stylesheet" href="../resources/css/exams.css">
    <link rel="stylesheet" href="../resources/css/listaRes.css">
    <title>Document</title>
</head>
<?php  require_once("../modules/momentanio.php") ?>
<body>

    <div class="container row conte">
        <div class="divInstrucciones col-sm-12">
            <h1 class="ml-4">Listado de resultados de las postulaciones</h1>
            <p class="ml-4">Para ver el resultado especifico o general puedes seleccionr las siguientes opciones, o si lo prefieres buscar directamene en la barra de busqueda</p>
        </div>
        <div class="buscador col-sm-12">
            <nav class="navbar inputSea navbar-light bg-light">
                <form class="form-inline">
                  <input class="form-control mr-sm-2 searchs" type="search" placeholder="Buscar por numero de folio" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
              </nav>
        </div>
        <div class="exams col-sm-12 ">
            <div class="contenido1 col-sm-6">
            <div class="card  col-sm-12 carres mb-3 mt-3"  onclick="location.href='/empleos/pages/resulGene.php'">
                <img src="../resources/img/resGeneral.jpg" class="card-img-top img-fluid imgexa" alt="...">
                <div class="card-body bodcar text-center">
                  <h2 class="card-title">Resultados generales</h2>
                  <label for="">Click para ver</label>
                </div>
              </div>
              <div class="card  col-sm-12 text-center carres"  onclick="location.href='/empleos/pages/mejoresRes.php'">
                <img src="../resources/img/losMejores.jpg" class="card-img-top img-fluid imgexa" alt="...">
                <div class="card-body bodcar">
                  <h2 class="card-title">Los 5 mejores resultados</h2>
                  <label for="">Click para ver</label>
                </div>
              </div>
            </div>
            <div class="contenido2 col-sm-6">
              <div class="card  col-sm-12 text-center ml-2 carres1 mt-2 "  onclick="location.href='/empleos/pages/grafiRes.php'">
                <img src="../resources/img/grafica.jpg" class="card-img-top img-fluid imgexa" alt="...">
                <div class="card-body bodcar">
                  <h2 class="card-title">Gráfica de resultados</h2>
                  <label for="">Click para ver</label>
                </div>
              </div>
            </div>
        </div>
        <?php  require_once("../modules/footer.php") ?>
    </div>
</body>
<?php  require_once("../modules/scripts.php") ?>
</html>