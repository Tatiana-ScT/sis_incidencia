<?php
    class Oficina extends conectar{
        public function get_oficina(){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="SELECT FROM tm_oficina WHERE estado=1;";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
    }
?>