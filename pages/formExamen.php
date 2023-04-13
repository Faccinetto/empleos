<?php
require_once("../config/conexion.php");
if (isset($_SESSION["id_folio"])) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../resources/css/formExam.css">
    <link rel="stylesheet" href="../resources/font-awesome-4.7.01/css/font-awesome.min.css">
    <title>Document</title>

</head>

<body onbeforeunload="return cerrar()">
    <div class="sombre col-sm-12"></div>
     
    <div class="col-sm-12 row contenedorForm d-flex justify-content-center">

        <div class="col-sm-8 infoExamen h-25 shadow-lg p-3 mb-5 bg-white rounded" id="datoExamen">
         
    </div>
        <div class="col-sm-8 preguRespues shadow-lg p-3 mb-5 bg-white rounded ">
            <div class="laInstruccion col-sm-12 mb-3">
                <h3 class="mt-3 mb-3">Leea con atencion y conteste las siguientes preguntas</h3>
            </div>
            
            <form class="col-sm-12 contenidoExamne  form-1 mt-5">
                    <div class="preguntas col-sm-12 mb-5  " id="laPregunta">

                    </div>
                    <div class="col-sm-12 temporisador">
                    <?php require_once("../modules/tempo.php") ?>
                </div>  
                </form>
        </div>

    </div>


</body>
<?php require_once("../modules/scripts.php") ?>
<script src="../js/preguntasExamne.js"></script>

</html>

<?php

} else {
    header("location:/empleos/pages/index.php");
}

?>