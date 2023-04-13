<?php 
 
 class ExamenModelo extends Conectar{


    public function preguntasExamen(){
        $conectar=parent::Conexion();
        parent::set_names();
        $sql="SELECT preguntas.*, respuestas.* FROM preguntas, respuestas WHERE preguntas.id_pregunta >=1 AND preguntas.id_pregunta=respuestas.id_pregunta AND preguntas.id_pregunta <=20 ORDER BY respuestas.id_pregunta ASC, respuestas.id_respuesta ASC";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
    public function preguntasExamen2(){
        $conectar=parent::Conexion();
        parent::set_names();
        $sql="SELECT preguntas.*, respuestas.* FROM preguntas, respuestas WHERE preguntas.id_pregunta >=1 AND preguntas.id_pregunta=respuestas.id_pregunta AND preguntas.id_pregunta  >=21   AND preguntas.id_pregunta  <=40  ORDER BY respuestas.id_pregunta ASC, respuestas.id_respuesta ASC";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
    public function preguntasExamen3(){
        $conectar=parent::Conexion();
        parent::set_names();
        $sql="SELECT preguntas.*, respuestas.* FROM preguntas, respuestas WHERE preguntas.id_pregunta >=1 AND preguntas.id_pregunta=respuestas.id_pregunta AND preguntas.id_pregunta  >=41   AND preguntas.id_pregunta  <=61  ORDER BY respuestas.id_pregunta ASC, respuestas.id_respuesta ASC";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
    public function preguntasExamen4(){
        $conectar=parent::Conexion();
        parent::set_names();
        $sql="SELECT preguntas.*, respuestas.* FROM preguntas, respuestas WHERE preguntas.id_pregunta >=1 AND preguntas.id_pregunta=respuestas.id_pregunta AND preguntas.id_pregunta  >=62   AND preguntas.id_pregunta  <=82  ORDER BY respuestas.id_pregunta ASC, respuestas.id_respuesta ASC";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
    public function preguntasExamen5(){
        $conectar=parent::Conexion();
        parent::set_names();
        $sql="SELECT preguntas.*, respuestas.* FROM preguntas, respuestas WHERE preguntas.id_pregunta >=1 AND preguntas.id_pregunta=respuestas.id_pregunta AND preguntas.id_pregunta  >=82   AND preguntas.id_pregunta  <=100  ORDER BY respuestas.id_pregunta ASC, respuestas.id_respuesta ASC";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
    public function verExamnes(){
        $conectar=parent::Conexion();
        parent::set_names();
        $sql="SELECT id_examen,examen,estatus,fotoExamen,descripcion_exam FROM examenes";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql=$sql->fetchAll();
    }
    public function abilita(){
        $conectar=parent::Conexion();
        parent::set_names();
        $sql="SELECT aspirantes.estatus,examenes.estatus FROM aspirantes,examenes";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql=$sql->fetchAll();
    }

    public function redireccionExamen(){
        $conectar=parent::Conexion();
        parent::set_names();
        $sql="SELECT id_examen,examen,estatus,fotoExamen,descripcion_exam FROM examenes WHERE id_examen=1";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql=$sql->fetchAll();
    }


    public function examenCalificado(){
        $conectar = parent::Conexion();
        parent::set_names();
        $sql="UPDATE `examenes` SET `estatus` = '0' WHERE `examenes`.`id_examen` = 1";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

   
    public function insert_correctas($id_examen,$id_pregunta,$id_respuesta,$correcta,$nombre,$id_folio){
        $conectar = parent::Conexion();
        parent::set_names();
        $sql="INSERT INTO resultados_examen (id_resultado,id_examen, id_pregunta,id_respuesta,correcta,nombre,id_folio ) VALUES (NULL, ?, ?, ?, ?, ?,?)";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$id_examen);
        $sql->bindValue(2,$id_pregunta);
        $sql->bindValue(3,$id_respuesta);
        $sql->bindValue(4,$correcta);
        $sql->bindValue(5,$nombre);
        $sql->bindValue(7,$id_folio);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    public function eliminaUsuario(){
        $idFol=$_SESSION["id_folio"];
        $conectar = parent::Conexion();
        parent::set_names();
        $sql="UPDATE aspirantes SET exam_terminado = 2 WHERE id_folio = $idFol";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    public function reActiva(){
        $idFol=$_SESSION["id_folio"];
        $conectar = parent::Conexion();
        parent::set_names();
        $sql="UPDATE examenes SET estatus = 1 WHERE id_examen = 1";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }




 }




 

?>