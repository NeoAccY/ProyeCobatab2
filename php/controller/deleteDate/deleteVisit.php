<?php
require ("../../conexion/conexion.php");
$id = $_POST ['id_visitantes'];

$query1 = mysqli_query($conexion, "DELETE FROM visitantes WHERE visitantes.id_visitantes = '$id'");

if ($query1) {
  echo "<script> alert('Se eliminaron los datos correctamente');
  location.href = '../../views/formHistVisitantes.php';
  </script>";
}
else {
  echo "<script> alert('No se eliminó correctamente');</script>";
}
 ?>