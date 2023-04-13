<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="resources/DataTables-1.12.1/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="../resources/css/mejores.css">


    <title>Document</title>
</head>
<?php require_once("../modules/momentanio.php") ?>

<body class="resultados">


    <div class="container row col-sm-12 d-flex justify-content-center ">
        <div class="col-sm-10 tops">
            <h1>Ranking de los mejores resultados </h1>
        </div>
        <div class=" perfiles col-sm-10 " id="losMejores">
        
        </div>
        <div class=" tablaMejoresR col-sm-10 ">
            <div class="registro">
                <h1 class="card-title mt-5">Registros</h1>
            </div>
            <div class=" mt-5 col-sm-12 tablaMejores">
                <table id="tablaMejores" class="table table-striped table-bordered " cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Aspirante</th>
                            <th>Folio de aspirante</th>
                            <th>Nombre</th>
                            <th>Apellido paterno</th>
                            <th>Apellido materno</th>
                            <th>Puntaje conocimientos</th>
                            <th>Puntaje psicometrico</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
        <?php require_once("../modules/footer.php") ?>
    </div>




</body>

<?php require_once("../modules/scriptsAdm.php") ?>
<script src="../js/aspirantes.js"></script>

</html>