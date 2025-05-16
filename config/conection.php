<?php
//$conection = mysqli_connect("localhost","root","","sis_incidencia");

//if($conection->connect_error) {
   // die("Error de conexión: ".$conection->connect_error);
//}

//echo "Conexión establecida correctamente";

    session_start();

    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try {
                $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=sis_incidencia","root","");
                return $conectar;
            } catch (Exception $e){
                print "Error DB!: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }

        public function ruta(){
            return "http://localhost/sis_incidencia/index.php";
        }
    }

?>