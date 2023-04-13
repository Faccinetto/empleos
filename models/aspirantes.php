<?php 

class Aspirantes extends Conectar{

    public function login(){
        $conectar=parent::Conexion();
        parent::set_names();
        if(isset($_POST["enviar"])){
            $nombre=$_POST["nombre"];
            $id_folio=$_POST["id_folio"];
            if(empty($nombre) and empty($id_folio)){
                header("Location:" .conectar::ruta(). "/pages/index.php?m=2");
                exit();
            }else{
               $sql="SELECT * FROM aspirantes WHERE  nombre=? AND id_folio=?";
               $stmt=$conectar->prepare($sql);
               $stmt->bindValue(1,$nombre);
               $stmt->bindValue(2,$id_folio);
               $stmt->execute();
               $resultado=$stmt->fetch();
               if(is_array($resultado) and count($resultado)>0){
                $_SESSION["nombre"]=$resultado["nombre"];
                $_SESSION["id_folio"]=$resultado["id_folio"];
                $_SESSION["exam_terminado"]=$resultado["exam_terminado"];
                if($_SESSION["exam_terminado"]==2){
                    header("Location:" .conectar::ruta()."/pages/index.php?m=2");
                }else{
 
                    header("Location:" .conectar::ruta()."pages/verExamen.php");
                exit();
                }
                
               }else{
                header("Location:" .conectar::ruta()."/pages/index.php?m=1");
                print("No ente");
                exit();

               }
            }
        }
    }
    public function bariableSesion(){
        $conectar=parent::Conexion();
        parent::set_names();
               $sql="SELECT * FROM examenes WHERE  id_examen=1 ";
               $stmt=$conectar->prepare($sql);
               $stmt->execute();
               $resultado=$stmt->fetch();
               if(is_array($resultado) and count($resultado)>0){
                $_SESSION["estatus"]=$resultado["estatus"];
                header("Location:" .conectar::ruta()."/pages/formExamen.php");
                exit();
               }else{
                header("Location:" .conectar::ruta()."/pages/index.php?m=3");
                print("No ente");
                exit();

               }
            }
  
}
?>