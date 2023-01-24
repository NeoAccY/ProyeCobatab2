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
<form action="">
    <div class="row justify-content-center align-content-center text-center">
        <div class="content-cards">
            <div class="alert alert-danger" style="margin-top: -25;" role="alert">
                <h3>Funcionamiento General del Sistema</h3>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Menú -> <b style="color: #75002d">⠀Inicio</b>
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="cardt">
                                <img src="../../images/galeryimages.png" class="card-img-top img-responsive center-block" alt="...">
                            </div>
                            <div class="card-texto">
                            Se tienen los principales links, para acceder a información del <b>COBATAB</b>, página oficial de <b>Facebook del plantel 2</b>, así como el uso de la plataforma de <b>WhatsApp</b>, para la comunicación con el personal y padres de familia.
                            <p></p><p style="font-size: 12;">Da clic en el <strong>Logo</strong> para visitar este apartado.</p>
                            </div>
                            <a href="main.php" class="btn btn-warning">Ir al apartado</a>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Apartado Submenú -> <b style="color: #75002d">⠀Accesos</b>
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="cardt">
                                <img src="../../images/accessMenu.png" class="card-img-top img-responsive center-block" alt="...">
                            </div>
                            <div class="card-texto">
                            Formulario en donde se llevará a cabo los registros de los ingresos, el tiempo estimado y el motivo de las personas que ingresan.
                            </div>
                            </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Apartado Submenú -> <b style="color:#75002d">⠀Notificaciones</b>
                    </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="cardt">
                                <img src="../../images/notifMenu.png" class="card-img-top img-responsive center-block" alt="...">
                            </div>
                            <div class="card-texto">
                                Cuenta con las opciones <b>Avisos</b> y <b>Retirada</b>. Su función es notificar a los tutores sobre alguna situación con el alumno, así como registrar la información correspondiente al motivo de salida, respectivamente.
                            </div>
                            </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Apartado Submenú -> <b style="color:#75002d">Registro</b>
                    </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="cardt">
                                <img src="../../images/registerMenu.png" class="card-img-top img-responsive center-block" alt="...">
                            </div>
                            <div class="card-texto">
                            Formulario para dar de alta a algún visitante (necesario para mejorar el nivel de seguridad).
                            </div>
                            </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Apartado Submenú -> <b style="color:#75002d">⠀Reportes</b>
                    </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="cardt">
                                <img src="../../images/reportMenu.png" class="card-img-top img-responsive center-block" alt="...">
                            </div>
                            <div class="card-texto">
                                Se caracteriza por tener el control de los <b>Reportes</b> generales de cada estudiante, para observar su conducta en el plantel, así como detectar problemas o situaciones con alguno de ellos.
                            </div>
                            </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Apartado Submenú -> <b style="color:#75002d">⠀Historial</b>
                    </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="cardt">
                                <img src="../../images/historyMenu.png" class="card-img-top img-responsive center-block" alt="...">
                            </div>
                            <div class="card-texto">
                            Este apartado muestra el total de personas que han ingresado al plantel, ya sea personal, alumnos o terceros, así como los reportes de cada uno de los estudiantes.
                            </div>
                            </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    Botones -> <b style="color:#75002d">⠀Perfil & WhatsApp</b>
                    </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                                <div class="cardes" style="width: 22rem;display:inline-block; padding: 15px 15px 15px 15px;">
                                    <img src="../../images/buttonperfil.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Opciones Botón Perfil</h5>
                                        <p class="card-texto">El usuario administrador en sesión podrá consultar su información, así como dar de alta a un nuevo usuario. <br>De igual tiene la opción para finalizar su sesión <b>(Salir)</b> en el sistema.</p>
                                    </div>
                                </div>
                                <div class="cardes" style="width: 22rem; display:inline-block;padding: 15px 15px 15px 15px;">
                                    <img src="../../images/buttonWhats.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Envío de Mensajes - WhatsApp</h5>
                                        <p class="card-texto">Es el apartado para la <b>comunicación interna</b> entre el personal y los directivos de la institución. <br>El mensaje que se envía es al número particular del <b>Secretario (a)</b> de dirección.</p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</form>
</section>
</body>

<?php
    require_once ('dashboardDown.php');
?>