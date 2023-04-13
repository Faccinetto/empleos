<?php

require_once("../config/conexion.php");
require_once("../models/modeloAspirantes.php");




$mejoresaspirantes = new ModeloAspirant();

switch ($_GET["op"]) {


    case "MejoresAspirantes":

        $datos = $mejoresaspirantes->mejoresResultados();


?>
        <div class="detalle">
            
        </div>
        <?php
        foreach ($datos as $row) {
        ?>

            <div class="card cardMejor col-sm-12 mb-5 ">
                <div class="datosAsoirante col-sm-5 d-flex justify-content-center">
                    <img class="card-img-top candidato rounded-circle col-sm-10" src="<?php echo $row["foto_aspirante"]?>" alt="Card image cap">
                </div>
                <div class="card-body col-sm-7 curepo ">
                    <div class="nombre col-sm-12 info d-flex align-items-center justify-content-center">
                        <h5 class="card-title">Aspirante: <?php echo $row["apellido_paterno"]  ?> <?php echo $row["apellido_materno"]  ?> <?php echo  $row["nombre"]  ?>  </h5>
                    </div>
                    <div class="puesto col-sm-12 info d-flex align-items-center justify-content-center">
                        <div class="titPuesto col-sm-12 d-flex align-items-center justify-content-center">
                            <h5 class="card-title">Datos generales</h5>
                        </div>
                        <div class="salida col-sm-6">
                            <h5 class="card-title col-sm-12 a">Puesto solicitado</h5>
                            <h5 class="card-title col-sm-12 b">Programador junior</h5>
                        </div>
                        <div class="aspirantee col-sm-6">
                            <h5 class="card-title col-sm-12 a">Salida profecional</h5>
                            <h5 class="card-title col-sm-12 b">Programador junior</h5>
                        </div>
                    </div>
                    <div class="puntaje col-sm-12 info d-flex align-items-center justify-content-center">
                        <div class="titPuesto col-sm-12 d-flex align-items-center justify-content-center">
                            <h5 class="card-title">Puntaje obtenido</h5>
                        </div>
                        <div class="salida col-sm-6">
                            <h5 class="card-title col-sm-12 a">Conocimientos</h5>
                            <h5 class="card-title col-sm-12 b"><?php echo $row["conocimientos"]?>%</h5>
                        </div>
                        <div class="aspirantee col-sm-6">
                            <h5 class="card-title col-sm-12 a">Psicometrico</h5>
                            <h5 class="card-title col-sm-12 b"><?php echo $row["psicometricos"]?>%</h5>
                        </div>

                    </div>
                    <div class="vermas col-sm-12  d-flex justify-content-around justify-content-center">
                        <a href="#" class="btn btn-primary col-sm-10 ">Ver perfil completo</a>
                    </div>

                </div>
            </div>
        <?php } ?>

<?php

        break;
    case "listarAspirantes":
        $datos = $mejoresaspirantes->listaAspirantes();
        $data = array();
        foreach ($datos as $row) {
            $sub_array = array();
            $sub_array[] = $row["numeroAspitante"];
            $sub_array[] = $row["id_folio"];
            $sub_array[] = $row["nombre"];
            $sub_array[] = $row["apellido_paterno"];
            $sub_array[] = $row["apellido_materno"];
            $sub_array[] = $row["conocimientos"];
            $sub_array[] = $row["psicometricos"];
            $data[] = $sub_array;
        }
        $result = array(
            "sEcho" => 1,
            "iTotalRecords" => count($data),
            "iTotalDisplayRecords" => count($data),
            "aaData" => $data
        );
        echo json_encode($result);
        break;
}


?>