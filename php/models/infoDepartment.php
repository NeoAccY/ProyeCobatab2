<?php

require_once "../conexion/conexion.php";
global $conexion;

$sql= "SELECT id_departamentos, nombre, descripcion, activo FROM departamentos";

$result = mysqli_query($conexion,$sql);

?>