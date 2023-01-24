<?php 
    session_start();
    if(!isset($_SESSION['id_type_user'])){
        header('location: ../../index.php');
    }else{
        if($_SESSION['id_type_user'] != true){
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
        <h4>Registro de Entrada</h4>
        </div>
        <!-- <input class="controls" type="text" name="nombres" id="nombres" placeholder="Matricula o Identificación"> -->
        <label class="cont_select" for="identificacion">Tipo de Identifiación:</label>
        <select name="identificacion" id="identificacion">
            <option value="0">Seleccione Opción:</option>
            <option value="1">Matricula</option>
            <option value="2">Identificación</option>
        </select>
        <input class="controls" type="text" name="ID" id="ID" placeholder="Teclee su Identificación">
        <label class="cont_select" for="Motivo">Motivo de ingreso:</label>
        <select name="Motivo" id="Motivo">
            <option value="0">Seleccione Opción:</option>
            <option value="1">Tutor</option>
            <option value="2">Despacho</option>
            <option value="3">Mantenimiento</option>
        </select>
        <!-- <input class="controls" type="text" name="hour" id="hour" placeholder="Ingrese hora de entrada"> -->
        <textarea class="controls" type="text" name="descrip" id="descrip" rows="3" placeholder="Descripción"></textarea>
        <input class="botons" type="submit" value="Registrar">
    </form>
</section>
</body>

<?php
    require_once ('dashboardDown.php');
?>