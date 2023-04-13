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

<link rel="stylesheet" href=".../resources/css/style.css">
<title>Buscador Aspirante</title>
</head>
<body>

<div class="container mt-5">
<div class="col-12">

<form method="POST" action="resulGene.php">
<div class="mb-3">
<label class="form-label">
    <br><br><br><br>
<input type="text" class="form-control" id="buscar" name="buscar" placeholder="Ingresa folio" required value="<?php echo $_POST['buscar']; ?>">
<br>
<button type="text" class="btn btn-primary">Buscar Aspirante</button>
</form>
<a class="btn btn-primary" href="resulGene.php?mostrar_todo=ok">Muestra todos los aspirantes</a>
</div>
</label>
<div class="card col-12 mt-0 border-0">
<div class="card-body border-0">

<?php 
if(!empty($_POST))
{

        // resaltamos el resultado
        function resaltar_frase($string, $frase, $taga = '<b>', $tagb = '</b>'){
            return ($string !== '' && $frase !== '')
            ? preg_replace('/('.preg_quote($frase, '/').')/i'.('true' ? 'u' : ''), $taga.'\\1'.$tagb, $string)
            : $string;
             }
    
  
      $aKeyword = explode(" ", $_POST['buscar']);
      $filtro = "WHERE id_folio LIKE LOWER('%".$aKeyword[0]."%') OR nombre LIKE LOWER('%".$aKeyword[0]."%')";
      $query ="SELECT * FROM aspirantes WHERE id_folio LIKE LOWER('%".$aKeyword[0]."%') OR nombre LIKE LOWER('%".$aKeyword[0]."%')";
  

     for($i = 1; $i < count($aKeyword); $i++) {
        if(!empty($aKeyword[$i])) {
            $query .= " OR id_folio LIKE '%" . $aKeyword[$i] . "%' OR nombre LIKE '%" . $aKeyword[$i] . "%'";
        }
      }
     
     $result = $conexion->query($query);
     $numero = mysqli_num_rows($result);
     if (!isset($_POST['buscar'])){
     echo "Has buscado la palabra:<b> ". $_POST['buscar']."</b>";
     }

     if( mysqli_num_rows($result) > 0 AND $_POST['buscar'] != '') {
        $row_count=0;
        echo "<br>Aspirante encontrado:<b> ".$numero."</b>";
        echo "<br><br><table class='table table-striped'>";
        While($row = $result->fetch_assoc()) {   
            $row_count++;   
            echo "<tr><td>".$row_count." </td><td>". resaltar_frase($row['id_folio'] ,$_POST['buscar']) . "</td><td>". resaltar_frase($row['nombre'] ,$_POST['buscar']) ."</td><td>". resaltar_frase($row['apellido_paterno'] ,$_POST['buscar'])."</td><td>". resaltar_frase($row['apellido_materno'] ,$_POST['buscar'])."</td><td>". resaltar_frase($row['conocimientos'] ,$_POST['buscar'])."</td><td>". resaltar_frase($row['psicometricos'] ,$_POST['buscar']). "</td></tr>";
        }
        echo "</table>";
	
    }
    else {
      //mostramos todos los resultados
      if( $_REQUEST["mostrar_todo"] == 'ok') {
        $row_count=0;
        echo "<br>Aspirantes encontrados:<b> ".$numero."</b>";
        echo "<br><br><table class='table table-striped'>";
        While($row = $result->fetch_assoc()) {   
            $row_count++;   
            echo "<tr><td>".$row_count." </td><td>". resaltar_frase($row['id_folio'] ,$_POST['buscar']) . "</td><td>". resaltar_frase($row['nombre'] ,$_POST['buscar']) ."</td><td>". resaltar_frase($row['apellido_paterno'] ,$_POST['buscar'])."</td><td>". resaltar_frase($row['apellido_materno'] ,$_POST['buscar'])."</td><td>". resaltar_frase($row['conocimientos'] ,$_POST['buscar'])."</td><td>". resaltar_frase($row['psicometricos'] ,$_POST['buscar']). "</td></tr>";
        }
        echo "</table>";
	
    }
    }
}
?>


</div>
</div>

</div>
<?php require_once("../modules/footer.php") ?>
    




</body>

<?php require_once("../modules/scriptsAdm.php") ?>
<script src="../js/aspirantes.js"></script>

</html>