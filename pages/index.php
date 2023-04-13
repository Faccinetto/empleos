<?php
require_once("../config/conexion.php");
if (isset($_POST["enviar"]) and $_POST["enviar"] == "si") {
    require_once("../models/aspirantes.php");
    $usuarios = new Aspirantes();
    $usuarios->login();
}
?>
<!DOCTYPE html>
<html lang="en">

<?php require_once("../modules/head.php") ?>


<body>
    <div class="container row">
        <div class="divFondo col-sm-12">
            <img src="../resources/img/empleados.jpg" alt="" class="img-fluid fondoimg">
        </div>
        <div class="card cards col-sm-5 img-fluid" style="width: 18rem;">
            <div class="card-body">
              <h3 class="card-title text-center mb-5">Inicia tus examenes</h3>
              <h5 class="card-subtitle mb-2 text-muted mb-3">Ingresa los siguientes datos</h5>
              <form  method="POST" class="formInicio login" id="login_form">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Ingresa el  Nombre con el que te registraste para el examen</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="nombre" aria-describedby="emailHelp" placeholder="Nombre" required maxlength="50" minlength="3">
                  <div id="emailHelp" class="form-text text-muted">Nunca compartiremos su datos personales  con nadie más.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Folio del aspirante</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="id_folio" placeholder="Folio del aspirante" required maxlength="12" minlength="8">
                </div>
                <div class="col-sm-12 mensaje h-25 text-center">
                    <small class="" onclick="window.location.href='admListResul.php';"><a href="admListResul.php">Ir a vista previa del administrador</a></small>
                </div>
                <input type="hidden" name="enviar" value="si">
                    <button type="submit" class="btn btn-info col-sm-12 mt-3 ">Enviar</button>
              </form>
            </div>
            <div class="msjErr col-sm-12">
            <?php require_once("../modules/error.php") ?>
          </div>
          </div>
          
    </div>
</body>
<?php require_once("../modules/scripts.php") ?>
<?php require_once("../modules/modal_prueba.php") ?>
</html>
<script>
   // $(document).ready(function(){

//$('#exampleModalPr').modal('toggle')
//});
</script>