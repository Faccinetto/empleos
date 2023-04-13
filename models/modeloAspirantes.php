<?php 
class ModeloAspirant extends Conectar{

    public function mejoresResultados(){

        $conectar=parent::Conexion();
        parent::set_names();
        $sql="SELECT nombre,apellido_paterno,apellido_materno,conocimientos,psicometricos,foto_aspirante FROM aspirantes WHERE conocimientos >=80 AND psicometricos >=80 ORDER BY conocimientos DESC LIMIT 5";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql=$sql->fetchAll();
    }

    public function listaAspirantes(){

        $conectar=parent::Conexion();
        parent::set_names();
        $sql="SELECT id_folio,nombre,apellido_paterno,apellido_materno,conocimientos,psicometricos,	numeroAspitante FROM aspirantes WHERE conocimientos >=80 AND psicometricos >=80 ORDER BY conocimientos DESC LIMIT 5";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql=$sql->fetchAll();
    }
}


?>