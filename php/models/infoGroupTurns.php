<?php
    require_once "../conexion/conexion.php";
    global $conexion;

    $sql= "SELECT `id_nivel_escolar`, `id_turnos`, `grado`, `grupo`, `activo` FROM `nivel_escolar`";

    $result = mysqli_query($conexion,$sql);
?>