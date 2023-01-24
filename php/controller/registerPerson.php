<?php

// $good='';
// session_start();

// if (isset($_SESSION['id_user'])) {
//     if ($_SESSION['id_type_user'] == 1) {
//         header("Location: php/views/main.php");
//     }elseif ($_SESSION['id_type_user'] == 2){
//         header("Location: php/views/mainPersonal.php");
//     }
// }


// if(!empty($_POST)){

//     $name = $_POST['name'];
//     $paterno = $_POST['paterno'];
//     $materno = $_POST['materno'];
//     $age = $_POST['age'];
//     $phone = $_POST['phone'];
//     $sex = $_POST['sex'];
//     $email = $_POST['email'];

//     if(empty($name) && empty($paterno) && empty($materno) && empty($age) && empty($phone) && empty($sex) && empty($email)){

//         $good = "Por favor, Revise el formulario y complete los campos que faltan por rellenar.";

//     }else {

        if (isset($_POST['Registrar'])) {

            require_once "../conexion/conexion.php";
            global $conexion;
            $name = trim($_POST['name']);
            $paterno = trim($_POST['paterno']);
            $materno = trim($_POST['materno']);
            $age = $_POST['age'];
            $phone = trim($_POST['phone']);
            $sex = $_POST['sex'];
            $email = trim($_POST['email']);

            $sql = sprintf("INSERT INTO personas (id_personas, nombre, ap_paterno, ap_materno, edad, telefono, sexo, email) VALUES (%s,'%s','%s','%s',%s,%s,%s,'%s')", mysqli_real_escape_string($conexion,$name), mysqli_real_escape_string($conexion,$paterno), mysqli_real_escape_string($conexion,$materno), mysqli_real_escape_string($conexion,$age), mysqli_real_escape_string($conexion,$phone), mysqli_real_escape_string($conexion,$sex), mysqli_real_escape_string($conexion,$email));

            $result = mysqli_query($conexion,$sql);

            if($result){
                echo $good = "El registro ha sido exitoso.";
            }else{
                echo $good = "Algo falló";
                echo "Esta es la consulta=".$sql;
                echo "Este es el result".$result;
            }
        }
//     }
// }

?>