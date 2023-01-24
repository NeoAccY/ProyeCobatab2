<?php

require_once "../conexion/conexion.php";
global $conexion;

$sql="SELECT id_alumnos, id_personas, id_turnos, id_especialidad, id_tutores, matricula FROM alumnos";

$result = mysqli_query($conexion,$sql);
?>