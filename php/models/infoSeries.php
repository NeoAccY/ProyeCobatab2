<?php

    require_once "../conexion/conexion.php";
    global $conexion;

    $sql="SELECT id_especialidad, id_nivel_escolar, nombre, abreviatura, capacitacion, activo FROM especialidad WHERE capacitacion != 1";
    
    $result=mysqli_query($conexion,$sql);

    // $sql2 = "SELECT id_nivel_escolar, id_turnos, grado, grupo, activo FROM nivel_escolar WHERE id_nivel_escolar = '$mostrar[1]'";

    // $result2 = mysqli_query($conexion,$sql2);
?>
