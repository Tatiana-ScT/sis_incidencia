<?php
    class Usuario extends conectar{

        public function login(){
            $conectar=parent::conexion();
            parent::set_names();
            if(isset($_POST["enviar"])){
                $correo = $_POST["email"];
                $pass = $_POST["password"];
                if (empty($correo) and empty($pass)){
                    header("Location: http://localhost/sis_incidencia/index.php?m=2");
                    //header("http://localhost/sis_incidencia/index.php?m=2");
                    exit();
                }else {
                    $sql = "SELECT * FROM tm_usuario WHERE email=? AND password=? AND estado=1";
                    $stmt=$conectar->prepare($sql);
                    $stmt->bindValue(1, $correo);
                    $stmt->bindValue(2, $pass);
                    $stmt->execute();
                    $resultado = $stmt->fetch();
                    if (is_array($resultado) and count($resultado)>0) {
                        $_SESSION["id_usuario"]=$resultado["id_usuario"];
                        $_SESSION["nombre"]=$resultado["nombre"];
                        $_SESSION["apellido"]=$resultado["apellido"];
                        header("Location: http://localhost/sis_incidencia/view/home");
                        //header("http://localhost/sis_incidencia/view/home");
                        exit();
                    } else {
                        header("Location: http://localhost/sis_incidencia/index.php?m=1");
                        //header("http://localhost/sis_incidencia/index.php?m=1");
                        exit();
                    }
                }
            }
        }
    }

?>