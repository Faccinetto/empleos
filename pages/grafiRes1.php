<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/estilos.css">

    <link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap.css">
    <script src="../librerias/jquery-3.6.1.min.js"></script>
    <script src="../librerias/plotly-2.16.1.min.js"></script>
    <title>Graficas</title>
</head>
<body>
<header id="cabeceralogo">
    <div>
      <p><img src="../resources/img/Logo sobre moda femenina minimalista neutral.png" width="10%" height="10%" style="float: left;"><h1>Reclutamiento Especializado Outsourcing IT</h1></p>
    </div>  
    <div class="busqueda col-sm-6">
        <nav class="navbar navbar-light bg-light busPrinciss col-sm-12">
          <form class="form-inline busPrinciss" style="float: right;">
            <input class="form-control mr-sm-2 sea" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
          </form>
        </nav>
      </div>   
  </header>
  <nav id="menuprincipal" style="display: flex;">
    <div>
      <ul id="listamenu" style="float: right"; >
        <li><a href="admListResul.php">Regresar</a></li>
      </ul>
    </div>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item">Cerrar sesión</a>
                <a class="dropdown-item" href="#"></a>
                <a class="dropdown-item" href="#">Perfil</a>

              </div>
  </nav>
  <div class="card col-12 mt-0 border-0">
    <div class="row">
      <div class="col-sm-12">
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
      </div>
    </div>
  </div>
  <footer id="pielogo">
    <div>
    <p><img src="../resources/img/Logo sobre moda femenina minimalista neutral.png" width="15%" height="15%" style="float: left;"></p>
      <section class="seccionpie" style="float: left;">
        <h1 >Los especialistas en el reclutamieto de personal</h1>
        <h1 style="vertical-align: text-bottom;" >Reclutamiento Especializado IT Outsourcing © 2022</h1>
      </section>
      
      <div class="recuperar"></div>
    </div>
  </footer> 
</body>
</html>

<script type="text/javascript">
  $(document).ready(function(){
    $('#cargaLineal').load('lineal.php');
    $('#cargaBarras').load('barras.php');
    });
</script>