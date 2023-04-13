<?php

require_once("../config/conexion.php");
require_once("../models/examenModelo.php");




$examenmodelo = new ExamenModelo();


switch ($_GET["op"]) {

    case "mostarPreguntas":

        $datos = $examenmodelo->preguntasExamen();
        $pregunta = 0;
        //var_dump($datos);exit;

?>
        <?php
        foreach ($datos as $row) {
            //echo $row["id_pregunta"]; // '<pre>';
            //var_dump($row);
            //echo '</pre>';
            //exit;
          
        ?>
            <?php if ($pregunta != $row["ID_PREGUNTA"]) { ?>
                <hr class="w-100 hrs">
                <div class=" col-sm-12 mt-3 mb-4" id="<?php echo $row["ID_PREGUNTA"] . '. ' . $row["ID_PREGUNTA"] ?>">
                    <h5 class="laPregutaEx"><?php echo $row["ID_PREGUNTA"] . '. ' . $row["PREGUNTA"] ?></h5>
                </div>
            <?php } // if  ?>
            <div class="form-check col-sm-12 mt-5 mb-5 " >
                    <input type="hidden" value="<?php echo $_SESSION["id_folio"] ?>"  name="id_folio">
                    <input class="form-check-input mt-3 mb-3" type="radio" name="<?php echo $row["ID_PREGUNTA"] ?>"  value="<?php echo $row["ID_RESPUESTA"] . '. ' . $row["ID_RESPUESTA"] ?>" >
                    <label class="form-check-label mt-3 mb-3" for="defaultCheck1">
                        <?php echo $row["RESPUESTA"] ?>
                    </label>
                <script src="../js/preguntasExamne.js"></script>
            </div>
           
            <?php $pregunta = $row["ID_PREGUNTA"]; ?>
        <?php } ?>
        <hr class="w-100 hrs">
    <?php

        break;
  
    case "verExamenes":

        $datos = $examenmodelo->verExamnes();

    ?>
        <?php
        foreach ($datos as $row) {
        ?>
            
            <?php if ($row["estatus"] == 1) { ?>
                
                <div class="card cardsExam col-sm-6 cono " onclick="n()">
                    <img src="<?php echo $row["fotoExamen"] ?>" class="card-img-top img-fluid imgexa" alt="...">
                    <div class="card-body bodcar text-center">
                        <div class="carTiitl col-sm-12 d-flex justify-content-around">
                            <h2 class="card-title">Examen <?php echo $row["examen"] ?></h2>
                        </div>
                        <div class="intro col-sm-12 d-flex justify-content-around">
                            <p class="des card-text"><?php echo $row["descripcion_exam"] ?></p>
                            <input type="hidden" value="<?php echo $row["id_examen"] ?>" name="idExamen" id="idExamen">
                            <input type="hidden" value="<?php echo $row["estatus"] ?>" name="estatus" id="estatus">
                        </div>
                    </div>
                    <script src="../js/mostrarExamen.js"></script>
                </div>
            <?php  } else { ?>

                <div class="card cardsExam col-sm-6 cono disablet" data-toggle="modal" data-target="#exampleModal">
                    <img src="<?php echo $row["fotoExamen"] ?>" class="card-img-top img-fluid imgexa" alt="...">
                    <div class="card-body bodcar text-center">
                        <div class="carTiitl col-sm-12 d-flex justify-content-around">
                            <h2 class="card-title">Examen <?php echo $row["examen"] ?></h2>
                        </div>
                        <div class="intro col-sm-12 d-flex justify-content-around">
                            <p class="des card-text"><?php echo $row["descripcion_exam"] ?></p>
                            <input type="hidden" value="<?php echo $row["id_examen"] ?>" id="idExamen2">
                        </div>
                    </div>
                    <script src="../js/mostrarExamen.js"></script>
                </div>

            <?php  } ?>
        <?php } ?>
    <?php

        break;

    case "redireccionExamen":

        $datos = $examenmodelo->redireccionExamen();


    ?>
        <?php
        foreach ($datos as $row) {
        ?>
            <div class=" col-sm-12 examInfos mt-3 ">
                <h1 class="card-title">Examen: <?php echo $row["examen"] ?></h1>
                <hr class="hrs mt-3">
            </div>
            
            <div class=" col-sm-12 datos mt-4">
                <div class="col-sm-8 datos"><h1 class="card-title">Bienvenido: <?php echo $_SESSION["nombre"] ?></h1>
               </div>
               <div class="col-sm-4 datos masFolio"><h1 class="card-title">Folio <?php echo $_SESSION["id_folio"] ?></h1></div>
                
            </div>
        <?php } ?>
<?php

        break;

    case "examenAcalificar":

        $examenmodelo->examenCalificado();
        break;

    case "EliminaUsuario":

        $examenmodelo->eliminaUsuario();
        break;
    case "reactiva":

        $examenmodelo->reActiva();
        break;
}


?>