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
        <h4>Registro Nuevo Alumno (a)</h4>
    </div>
        <input class="controls" type="text" name="matricula" id="matricula" placeholder="Matricula">
        <input class="controls" type="text" name="name" id="name" placeholder="Nombre del alumno">
        <input class="controls" type="text" name="paterno" id="paterno" placeholder="Apellido paterno">
        <input class="controls" type="text" name="materno" id="materno" placeholder="Apellido materno">
        <input class="controls" type="text" name="email" id="email" placeholder="Correo Institucional">
        <label for="" class="cont_select">Grado y Grupo:</label>
        <select name="nivel" id="nivel">
            <option class="" value="0">Seleccione Nivel Escolar:</option>
            <option value="1">3° A - Matutino</option>
            <option value="2">5° C - Matutino</option>
            <option value="3">1° D - Vespertino</option>
            <option value="4">5° C - Vespertino</option>
        </select>
        <input class="botons" type="submit" value="Registrar">
    </form>
  </section>
</body>

<?php
    require_once ('dashboardDown.php');
?>