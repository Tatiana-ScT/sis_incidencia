<?php
    require_once("../config/conection.php");
    require_once("../models/Ticket.php");
    $ticket = new Ticket();

    switch($_GET["op"]){
        case "insert":
            $ticket->insert_ticket($_POST["id_usuario"], $_POST["ofi_id"], $_POST["tick_titulo"], $_POST["ticket_descrip"]);    
        break;

        case "listar_x_usu":
            $datos = $ticket->listar_ticket_x_usu($_POST["id_usuario"]);
            $data = Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["tick_id"];
                $sub_array[] = $row["ofi_nombre"];
                $sub_array[] = $row["tick_titulo"];
                $sub_array[] = '<button type="button" onClick="ver('.$row["tick_id"].');" id="'.$row["tick_id"].'" class="btn btn-inline btn-primary btn-sm ladda-buton"><div><i class="fa fa-eye"></i></div></button>';
                $data[] = $sub_array;
            }

            $results = array(
                "sEcho" => 1,
                "iTotalRecords" =>count($data),
                "iTotalDisplayRecords" =>count($data),
                "aaData" => $data);
            echo json_encode($results);
        break;
    }
?>