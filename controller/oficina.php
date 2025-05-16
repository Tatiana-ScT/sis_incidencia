<?php
    require_once("../config/conection.php");
    require_once("../models/Oficina.php");
    $oficina = new Oficina();

    switch($_GET["op"]){
        case "combo":
            $datos = $oficina->get_oficina();
            if(is_array($datos)==true and count($datos)>0){
                $html= "<option></option>";
                foreach($datos as $row)
                {
                    $hmtl= "<option value='".$row['ofi_id']."'>".$row['ofi_nombre']."</option>";
                }
                echo $html;
            }
        break;
    }
?>