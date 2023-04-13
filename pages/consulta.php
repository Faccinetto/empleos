<?php 
include("../config/conexion2.php");
$sql1="SELECT * FROM examenes WHERE";
$resultado=mysqli_query($conexion,$sql1) or die ( "Algo ha ido mal en la consulta a la base de datos");


?>