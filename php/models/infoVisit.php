<?php

require_once "../conexion/conexion.php";
global $conexion;

$sql="SELECT id_visitantes, id_motivo_visita, id_identificaciones, nombre, ap_paterno, ap_materno, dato_identif FROM visitantes";

$result = mysqli_query($conexion,$sql);
?>