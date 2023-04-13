<?php 
  $servidor= "localhost";
  $usuario= "utn1tgvj";
  $password = "zt5#q5Wbzq!9N5hw";
  $nombreBD= "utn1tgvj_purebas";
  $conexion = new mysqli($servidor, $usuario, $password, $nombreBD);
  if ($conexion->connect_error) {
      die("la conexión ha fallado: " . $conexion->connect_error);
  }
//   if (!$conexion->set_charset("utf8")) {
//       printf("Error al cargar el conjunto de caracteres utf8: %s\n", $conexion->error);
//       exit();
//   } else {
//       printf("Conjunto de caracteres actual: %s\n", $conexion->character_set_name());
//   }

  if (!isset($_POST['buscar'])){$_POST['buscar'] = '';}
  if (!isset($_REQUEST["mostrar_todo"])){$_REQUEST["mostrar_todo"] = '';}

?>
<!DOCTYPE html>
<?php require_once("../modules/headAdmin.php") ?>
<?php require_once("../modules/momentanio.php") ?>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>


<link rel="stylesheet" href="../resources/css/estilos.css">
<script src="../librerias/jquery-3.6.1.min.js"></script>
    <script src="../librerias/plotly-2.16.1.min.js"></script>

<link rel="stylesheet" href=".../resources/css/style.css">
<title>Buscador Aspirante</title>
</head>
<body>

<div class="container mt-5">
<div class="col-12">
        <div class="panel panel-primary">
          <div class="panel panel-heading">Graficas</div>
          <div class="panel panel-body">
            <div class="row">
              <div class="col-sm-6">
                <div id="cargaLineal"></div>
              </div>
              <div class="col-sm-6">
                <div id="cargaBarras"></div>
              </div>
            </div>
          </div>
        </div>
<div class="card col-12 mt-0 border-0">
<div class="card-body border-0">

</div>
</div>

</div>
<?php require_once("../modules/footer.php") ?>
    
</body>

<?php require_once("../modules/scriptsAdm.php") ?>
<script src="../js/aspirantes.js"></script>

</html>
<script type="text/javascript">
  $(document).ready(function(){
    $('#cargaLineal').load('lineal.php');
    $('#cargaBarras').load('barras.php');
    });
</script>