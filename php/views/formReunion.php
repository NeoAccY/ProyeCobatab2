<?php 

    session_start();
    if(!isset($_SESSION['id_type_user'])){
        header('location: ../../index.php');
    }else{
        if($_SESSION['id_type_user'] != 1){
            header('location: ../../index.php');
        }
    }
    if(!isset($_SESSION['id_type_user'])){
    }else{
        if($_SESSION['id_type_user'] != 2){
            require_once 'dashboardUp.php';
        }elseif($_SESSION['id_type_user'] != 1){
            require_once 'dashboardUpPers.php'; 
        }
    }
?>

<body>
<section class="form-register">
<form action="">
<div class="row justify-content-center align-content-center text-center">
    <h4>Programar Reunión</h4>
 </div>
    <label class="cont_select text-center" for="dirigido">Se dirige a:</label>
    <select name="dirigido" id="dirigido">
        <option value="0">Seleccione Opción:</option>
        <option value="1">Alumnos</option>
        <option value="2">Maestros</option>
        <option value="3">Tutores</option>
    </select>
    <label class="cont_select text-center" for="motivo">Motivo:</label>
    <select name="motivo" id="motivo">
        <option value="0">Seleccione Opción:</option>
        <option value="1">Reunion de aprendizaje</option>
        <option value="2">Junta de planes</option>
        <option value="3">Entrega calificación</option>
    </select>
    <label for="dates" class="cont_select text-center">Ingrese fecha:</label>
    <input  class="controldati" type="date" name="date" id="date">
    <!-- <input class="controls" type="text" name="date" id="date" placeholder="Ingrese fecha"> -->
    <label for="hours" class="cont_select text-center">Ingrese hora de la reunión:</label>
    <input class="controldati" type="time" name="hour" id="hour">
    <!-- <input class="controls" type="text" name="hour" id="hour" placeholder="Ingrese horario"> -->
    <textarea class="controls" type="text" name="descrip" id="descrip" rows="3" placeholder="Descripción"></textarea>
    <input class="botons" type="submit" value="Registrar">
  </section>
  </form>
</body>

<?php
    require_once 'dashboardDown.php';
?>