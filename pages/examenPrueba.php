<?php
require_once("../config/conexion.php");
if (isset($_SESSION["folio"])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="../resources/css/formExam.css">
        <title>Document</title>
    </head>

    <body>
        <div class="container row col-sm-12 d-flex justify-content-around">
            <div class="bloqueExamne col-sm-9">
                <div class="datosExamen col-sm-12  d-flex justify-content-around">
                    <div class="tituloExam col-sm-5 ">
                        <h1 class="card-title  ">Examen Psicométrico</h1>
                    </div>
                    <div class="datosPersonales col-sm-5">
                        <h1 class="card-title">Bienvenido: <?php echo $_SESSION["nombre"] ?></h1>
                        <h1 class="card-title">Folio <?php echo $_SESSION["folio"] ?></h1>
                    </div>
                </div>

                <div class="col-sm-12 temporisador">
                    <div class="col-sm-4 cronometro  ">
                        <div class="tiempo col-sm-6 d-flex justify-content-around">

                        </div>
                        <div class="col-sm-6 btnTerminar  d-flex justify-content-around">
                            <button type="button" class="btn btn-outline-info col-sm-9">Terminar examen</button>
                        </div>

                    </div>
                </div>
                <div class="preguntasRespuestas col-sm-12 row">

                    <div class="instrucciones col-sm-12 mb-4">
                        <h4 class="mb-4">Leea con atencion y conteste las siguientes preguntas</h4>
                    </div>
                    <form class="col-sm-12 contenidoExamne">
                        <div class="preguntas col-sm-12 mb-5  " id="laPregunta">
                        
                        </div>
                        <!--<button type="button" class="btn btn-outline-info col-sm-12 ">Terminar examen</button>
                    -->
                    </form>
                </div>
            </div>

        </div>
    </body>
    <?php require_once("../modules/scripts.php") ?>
    <script src="../js/preguntasExamne.js"></script>

    </html>
<?php

} else {
    header("location:/empleos/pages/loginExa.php");
}

?>