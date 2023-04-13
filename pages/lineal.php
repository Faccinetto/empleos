<?php
    require_once("../config/conexion.php");
    $conectar=conexion();
    $sql="SELECT nombre, conocimientos from aspirantes ";
    $result=mysqli_query($conectar,$sql);
    $valoresY=array();
    $valoresX=array();

    while ($ver=mysqli_fetch_row($result)){
        $valoresY[]=$ver[1];
        $valoresX[]=$ver[0];
    }

    $datosX=json_encode($valoresX);
    $datosY=json_encode($valoresY);

?>
<div id="graficaBarras2"></div>

<script type="text/javascript">
    function crearCadenaBarras(json){
        var parsed = JSON.parse(json);
        var arr = [];
        for (var x in parsed) {
            arr.push(parsed[x]);
        }
        return arr;
    }
</script>

<script type="text/javascript">

    datosX=crearCadenaBarras('<?php echo $datosX ?>');
    datosY=crearCadenaBarras('<?php echo $datosY ?>');

    var data = [
  {
    x: datosX,
    y: datosY,
    type: 'bar'
  }
];

    var layout = {
    title: 'Resultados de Conocimiento',
    font:{
        family: 'Raleway, sans-serif'
    },
    showlegend: false,
    xaxis: {
        tickangle: -50,
        title: 'Aspirante'
    },
    yaxis: {
        title: 'Aciertos'
    },
    bargap :0.05
    };

Plotly.newPlot('graficaBarras2', data, layout);


</script>