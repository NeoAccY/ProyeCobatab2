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
    <h4>Registro de Salida</h4>
    </div>
    <input class="controls" type="text" name="identif" id="identif" placeholder="Matricula o Identificación">
    <!-- <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Seleccione motivo"> -->
    <input class="botons" type="submit" value="Registrar">
  </form>
  </section>
</body>

<?php
    require_once ('dashboardDown.php');
?>