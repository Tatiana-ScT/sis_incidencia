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

        public function listar_ticket_x_usu($id_usuario){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="SELECT 
                tm_ticket.tick_id, 
                tm_ticket.id_usuario, 
                tm_ticket.ofi_id, 
                tm_ticket.tick_titulo, 
                tm_ticket.ticket_descrip, 
                tm_usuario.nombre,
                tm_usuario.apellido,
                tm_oficina.ofi_nombre
                FROM 
                tm_ticket 
                INNER join tm_oficina on tm_ticket.ofi_id=tm_oficina.ofi_id 
                INNER join tm_usuario on tm_ticket.id_usuario=tm_usuario.id_usuario 
                WHERE 
                tm_ticket.estado=1
                AND tm_usuaruio.id_usuario=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $id_usuario);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
    }
?>