<?php
    require_once("../../config/conection.php");
    session_destroy();
    header("Location: http://localhost/sis_incidencia/index.php?");
    exit();
?>