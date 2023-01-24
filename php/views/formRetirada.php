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
        <h4>Retirar Alumno</h4>
        </div>
        <input class="controls" type="text" name="matricula" id="matricula" placeholder="Ingrese matricula del alumno">
        <label class="cont_select" for="motivo">Se retira por:</label>
        <select name="motivo" id="motivo">
            <option value="0">Seleccione Opción:</option>
            <option value="1">Mala conducta</option>
            <option value="2">Enfermedad</option>
            <option value="3">Problemas Familiares</option>
        </select>
        <textarea class="controls" type="text" name="descrip" id="descrip" rows="3" placeholder="Ingrese Descripción"></textarea>
        <input class="botons" type="submit" value="Notificar">
    </form>
</section>
</body>

<?php
    require_once ('dashboardDown.php');
?>