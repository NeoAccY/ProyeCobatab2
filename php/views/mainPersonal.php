<?php

    session_start();
    if (!isset($_SESSION['id_type_user'])) {
        header('Location: ../../index.php');
    } else {
        if ($_SESSION['id_type_user'] != 2) {
            header("Location: ../../index.php");
        }
    }
    
    require_once ('dashboardUpPers.php');
?>
<section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">Bienvenido al menú de <b>SCAVNICOBATAB2</b>, para mas información:</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="../../images/img1.png" alt="">
                        <div class="hover-galeria">
                            <a href="funcionamiento.php"><img src="../../images/icono1.png" alt=""></a>
                            <p>Funcionamiento</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="../../images/img2.png" alt="">
                        <div class="hover-galeria">
                            <a href="https://cobatab.edu.mx/" target="_blank"><img src="../../images/icono1.png" alt=""></a>
                            <p>Cobatab</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="../../images/img3.jpg" alt="">
                        <div class="hover-galeria">
                            <a href="whatsapp.php"><img src="../../images/icono1.png" alt=""></a>
                            <p>API de Mensajes</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="../../images/img4.jpg" alt="">
                        <div class="hover-galeria">
                            <a href="https://www.facebook.com/cobatabplantel02" target="_blank"><img src="../../images/icono1.png" alt=""></a>
                            <p>Redes</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php
    require_once ('dashboardDown.php');
?>