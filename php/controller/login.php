<?php

$fallo='';
session_start();

if (isset($_SESSION['id_user'])) {
    if ($_SESSION['id_type_user'] == 1) {
        header("Location: php/views/main.php");
    }elseif ($_SESSION['id_type_user'] == 2){
        header("Location: php/views/mainPersonal.php");
    }
}

if(!empty($_POST)){

    $user = ($_POST['user']);
    $pass = ($_POST['pass']);
    // $error = array();
    if (empty($user) && empty($pass)) {
        $fallo = "Ingrese usuario y contraseña.";
        // array_push($error, $fallo);
    } elseif (empty($user)) {
        $fallo = "Ingrese su usuario.";
        // array_push($error, $fallo);
    } elseif (empty($pass)){
        $fallo = "Ingrese una contraseña.";
        // array_push($error, $fallo);
    } else {

        require_once("php/conexion/conexion.php");
        global $conexion;

        $user = trim($_POST['user']);
        $pass = trim($_POST['pass']);

        $sql = sprintf("SELECT usuarios.id_usuarios, usuarios.id_tipo_usuario, usuarios.nombre_usuario, usuarios.password, usuarios.activo FROM usuarios WHERE usuarios.nombre_usuario = '%s' AND usuarios.password = '%s'", 
        mysqli_real_escape_string($conexion, $user),
        mysqli_real_escape_string($conexion, $pass));

        $result = mysqli_query($conexion,$sql);
        $rows = mysqli_num_rows($result);

            if ($rows) {
                $array = mysqli_fetch_array($result);
                $_SESSION["id_user"] = $array["id_usuarios"];
                $_SESSION["id_type_user"] = $array["id_tipo_usuario"];
                $_SESSION["user_name"] = $array["nombre_usuario"];
                // Línea Modificada

                if ($_SESSION["id_type_user"] == 1) {
                    // header("Location:../views/main.php");
                    header("Location:php/views/main.php");
                } else {
                    // header("Location:../views/mainPersonal.php");
                    header("Location:php/views/mainPersonal.php");
                }
                
            } else {
                $fallo = "El Usuario o Contraseña, son incorrectos.";
                // array_push($error,$fallo);
            }
        }
    }

?>