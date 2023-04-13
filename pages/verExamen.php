<?php
require_once("../config/conexion.php");
if (isset($_SESSION["id_folio"])) {
?>
<!DOCTYPE html>
<html lang="en">

<?php require_once("../modules/headVerExa.php") ?>

<!--ARCHIVO MODIFICADO-->

<body onload="mostarrExamen()">
    <?php require_once("../modules/header.php") ?>
    <div class="contenedor col-sm-12 row">
        <div class="titulos col-sm-12">
            <h1 class="text-center titus mt-4 mb-4">Bienvenido a la realizacion de tus examenes</h1>
            <hr>
            <h4 class="nas mt-4">Antes de comenzar deveras iniciar con el examen de conocimientos. Recuerda leer bien
                las instrucciones. Te deceamos suerte</h4>
        </div>
        <div class="btnCarExam col-sm-12 d-flex justify-content-around align-items-center" id="verExamss">
          
        </div>

    </div>
    <?php require_once("../modules/footer.php") ?>
</body>


<?php require_once('../modules/modal.php') ?>
<?php require_once("../modules/scripts.php") ?>
<script src="../js/mostrarExamen.js"></script>

</html>
<?php

} else {
  header("location:/empleos/pages/index.php");
}

?>
<script>
$(document).ready(function() {
    $("#psicometricos").children().prop('disabled', true);
})
</script>