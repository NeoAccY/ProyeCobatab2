<?php
    session_start();
if(!isset($_SESSION['id_type_user'])){
    }else{
        if($_SESSION['id_type_user'] != 2){
            require_once 'dashboardUp.php';
        }elseif($_SESSION['id_type_user'] != 1){
            require_once 'dashboardUpPers.php'; 
        }
    }

    ?>

<div class="row justify-content-center align-content-center text-center">
            <div class="content-cards">
            <div class="alert alert-danger" role="alert">
                <h3>Funcionamiento General del Sistema</h3>
            </div>
            <div class="card" style="display: inline-block;">
                <img src="../../images/galeryimages.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Menú Galeria</h5>
                    <p class="card-text">Se tienen los principales links, para acceder a información del <b>COBATAB</b>, página oficial de <b>Facebook del plantel 2</b>, así como el uso de la plataforma de <b>WhatsApp</b>, para la comunicación con el personal y padres de familia.</p>
                    <a href="main.php" class="btn btn-warning">Ir al apartado</a>
                </div>
            </div>
            <div class="card" style="display: inline-block;">
                <img src="../../images/buttonperfil.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Botón Perfil</h5>
                    <p class="card-text">Se puede consultar la <b>información personal como de Inicio de Sesión</b>, de la persona que ha ingresado al sistema, así como tambien modificar es información. De igual forma se encuentra la opción para <b>Salir</b> y finalizar la sesión.</p>
                    <a href="#" class="btn btn-light disabled" style="color: white;">-</a>
                </div>
            </div>
            <div class="card" style="display: inline-block;">
                <img src="../../images/notifMenu.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="display: inline-block;">
                <img src="../../images/settingsMenu.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">SubMenú Configuraciones</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-light disabled" style="color: white;">-</a>
                </div>
            </div>
            <div class="card" style="display: inline-block;">
                <img src="../../images/settingsMenu.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">SubMenú Configuraciones</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-light disabled" style="color: white;">-</a>
                </div>
            </div>
            <div class="card" style="display: inline-block;">
                <img src="../../images/settingsMenu.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">SubMenú Configuraciones</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-light disabled" style="color: white;">-</a>
                </div>
            </div>
            </div>

            <?php
    require_once ('dashboardDown.php');
?>