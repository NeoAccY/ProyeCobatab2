<?php

require_once ("../conexion/conexion.php");
global $conexion;

// Esta variable me guarda el id del tipo de usuario que está en sesión

$idUser =  $_SESSION["id_user"];

// Consulta 1 para seleccionar el id de la persona y consultar su información
$sql = "SELECT * FROM usuarios WHERE usuarios.id_usuarios = '$idUser'";
$result = mysqli_query($conexion, $sql);
// Esta variable me guarda el valor del id de la persona
$row = mysqli_num_rows($result);

if ($row>0) {
    if($result){
        while($colum=mysqli_fetch_row($result)){
            $id_usuarios = $colum[0]; // Id del usuario
            $id_tipo = $colum[1]; // id del tipo de usuario en sesión
            $id_persona = $colum[2]; //id de la persona
            $usuario = $colum[3]; //nombre usuario
            $password = $colum[4]; // contraseña
            $activo = $colum[5]; // valor booleano si está activo el tipo de usuario
        }
    }
}


// En la consulta 2 se hace la consulta a la tabla personas para conocer su información

$sql2 = "SELECT id_personas, nombre, ap_paterno, ap_materno, edad, telefono, sexo, email FROM personas WHERE personas.id_personas = '$id_persona'";

$result2 = mysqli_query($conexion, $sql2);
$encontro = mysqli_num_rows($result2);


if ($encontro>0) {
    if($result2){
        while($rows=mysqli_fetch_row($result2)){
            $id = $rows[0]; // id de la persona en la tabla personas
            $name = $rows[1]; 
            $paterno = $rows[2];
            $materno = $rows[3];
            $age = $rows[4];
            $phone = $rows[5];
            $gender = $rows[6];
            $email = $rows[7];
        }
    }
}

?>