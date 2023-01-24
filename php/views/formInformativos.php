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
            <h4>Reporte Informativo</h4>
        </div>
        <label class="cont_select" for="dirigido">Se dirige a:</label>
        <select name="dirigido" id="dirigido">
            <option value="0">Seleccione Opción:</option>
            <option value="1">Alumnos</option>
            <option value="2">Maestros</option>
            <option value="3">Tutores</option>
        </select>
        <label class="cont_select" for="identificacion">Motivo:</label>
        <select name="identificacion" id="identificacion">
            <option value="0">Seleccione Opción:</option>
            <option value="1">Reunion de aprendizaje</option>
            <option value="2">Junta de planes</option>
            <option value="3">Entrega calificación</option>
        </select>
        <textarea class="controls" type="text" name="descrip" id="descrip" rows="3" placeholder="Ingrese Descripción"></textarea>
        <input class="botons" type="submit" value="Registrar">
    </form>
</section>
</body>

<?php
    require_once ('dashboardDown.php');
?>