<?php
require_once("conexion.php");
//require_once("demo.php");

class colector{

    private $con;
    public function __construct()
    {

    //en $this->con tenemos la conexión con la bd pruebas
    $this->con = new conexion();

    }

    //obtenemos usuarios de una tabla con postgreSql
   public function Listar($table)
       {
           try
           {
               $result = array();
               $cadnea = "SELECT * FROM ".$table;

               echo $cadnea;
               $stm = $this->con->prepare($cadnea);
               $stm->execute();

               $result = $stm->fetchAll(PDO::FETCH_CLASS, $table);
               var_dump($result);
               $this->con->close_con();
               return $result;
           }
           catch(Exception $e)
           {
               die($e->getMessage());
           }
       }

       public function operacion($cadena)
       {
           try
           {
               $count = $this->con->exec($cadena);
                $this->con->close_con();
               return $count;
           }
           catch(Exception $e)
           {
               die($e->getMessage());
           }
       }



}
 ?>
