<?php
    require_once("../config/conection.php");
    require_once("../models/Ticket.php");
    $ticket = new Ticket();

    switch($_GET["op"]){
        case "insert":
            $ticket->insert_ticket($_POST["id_usuario"], $_POST["ofi_id"], $_POST["tick_titulo"], $_POST["ticket_descrip"]);    
        break;
    }
?>