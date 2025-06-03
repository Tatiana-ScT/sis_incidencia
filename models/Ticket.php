<?php
    class Ticket extends conectar{
        public function insert_ticket($id_usuario,$ofi_id,$tick_titulo,$ticket_descrip){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="INSERT INTO tm_ticket (tick_id, id_usuario, ofi_id, tick_titulo, ticket_descrip, estado) VALUES (NULL, ?, ?, ?, ?, '1');";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $id_usuario);
            $sql->bindValue(2, $ofi_id);
            $sql->bindValue(3, $tick_titulo);
            $sql->bindValue(4, $ticket_descrip);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
    }
?>