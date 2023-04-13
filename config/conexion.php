<?php
   //Iniciar sesion

   session_start();

   //clear clase de coneccion
    class  Conectar{

        protected $dbh;

        protected function Conexion(){

    

        try{

            $conectar = $this->dbh= new PDO("mysql:local=localhost;dbname=utn1tgvj_purebas", "root","");
            return $conectar;

        } catch(Exception $e){
            print "Error en la BD:" .$e->getMessage(). "<br/>";
            die();

        }
    }
    public function set_names(){
        return $this->dbh->query("SET NAMES 'utf8'");
    }

    public function ruta(){
        return "http://localhost/empleos/";
    }

}


?>

