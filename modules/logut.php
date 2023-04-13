<?php

   require_once("../config/conexion.php");
   session_start();
   session_destroy();

   header("location:/empleos/pages/index.php");
   exit();
?>