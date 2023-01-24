<?php

require_once "../conexion/conexion.php";
global $conexion;

$sql= "SELECT id_ocupaciones, nombre, activo FROM ocupaciones";

$result = mysqli_query($conexion,$sql);
?>