<?php

if (isset($_GET["m"])) {
    switch ($_GET["m"]) {

        case "1";
?>
            <div class="col-sm-12 alert alert-danger d-flex justify-content-center text-center pt-3 pb-3 mt-3 mb-3" role="alert">
                <span class="col-sm-12 text-center">⚠️ !Credenciales incorrectas. Verifica tus credenciales¡ ⚠️</span>
            </div>
        <?php
            break;
        case "2";
        ?>
            <div class="col-sm-12 alert alert-info d-flex justify-content-center text-center pt-3 pb-3 mt-3 mb-3" role="alert">
                <span class="col-sm-12 text-center">⚠️ Examenes culminados.  Espera los resultados ⚠️</span>
            </div>
        <?php
            break;
            case "3";
        ?>
        <div class="col-sm-12 alert alert-danger d-flex justify-content-center text-center pt-3 pb-3 mt-3 mb-3" role="alert">
                <span class="col-sm-12 text-center">⚠️ Examenes culminados. Espera los resultados ⚠️</span>
            </div>
            break;
<?php

    }
}
?>