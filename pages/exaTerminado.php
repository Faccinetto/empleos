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
    <link rel="stylesheet" href="../resources/css/principal.css">
    <link rel="stylesheet" href="../resources/css/exams.css">
    <link rel="stylesheet" href="../resources/css/end.css">
    <title>Document</title>
</head>

<body onload="termi()">
    <div class="container row divFormExam">
        <img src="../resources/img/meta.jpg" alt="" class="img-fluid ter">
        <div class="exams col-sm-12 d-flex justify-content-center">
            
            <div class="terminacion col-sm-12 d-flex justify-content-center">
                <div class="nas col-sm-6 d-flex justify-content-center">
                    <h2 >Culminaste tus exámenes <br> Espera tur resultados <br> Nosotros nos pondremos en contacto contigo</h2>
                </div>
                <div class="im col-sm-12 d-flex justify-content-center text-right">
                    <img src="../resources/img/Logo sobre moda femenina minimalista neutral.png" alt="" class="log">
                </div>
            </div>
        </div>
    </div>

</body>
<?php require_once("../modules/scripts.php") ?>
<script src="../resources/js/termina.js"></script>
</html>
<?php

} else {
  header("location:/empleos/pages/index.php");
  print("Deves iniciar sesion para navegar entre paginas");
}

?>