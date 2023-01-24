<?php

    session_start();
    if (!isset($_SESSION['id_type_user'])) {
        header('Location: ../../index.php');
    } else {
        if ($_SESSION['id_type_user'] != 1) {
            header("Location: ../../index.php");
        }
    }
    
    require_once ('dashboardUp.php');
?>
<section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">Da click en una de las <b>OPCIONES</b>, para modificar o leer la documentación:</h2>
                
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="../../images/img9.jpg" alt="">
                        <div class="hover-galeria">
                            <a href="formDepartment.php"><img src="../../images/icono1.png" alt=""></a>
                            <p>Departamentos</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="../../images/img10.jpg" alt="">
                        <div class="hover-galeria">
                            <a href="formJob.php"><img src="../../images/icono1.png" alt=""></a>
                            <p>Ocupaciones/Oficios</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="../../images/img10.jpg" alt="">
                        <div class="hover-galeria">
                            <a href="formReportes.php"><img src="../../images/icono1.png" alt=""></a>
                            <p>Reportes</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <div class="justify-content-center align-content-center text-center" style="margin-top: -305px;margin-left: 260px;">

            <!-- Button trigger modal -->
            <button type="button" class="btn" style="background:#71022B; color:white" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Documentación Departamentos
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apartado Departamentos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="text-align:Justify">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" style="background:#71022B; color:white;" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



            <!-- Button trigger modal -->
            <button type="button" class="btn" style="background:#71022B; color:white" data-bs-toggle="modal" data-bs-target="#exampleModal1">
  Documentación Ocupaciones
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Apartado Ocupaciones</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="text-align:Justify">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" style="background:#71022B; color:white;" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

            <!-- Button trigger modal -->
            <button type="button" class="btn" style="background:#71022B; color:white" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Documentación Reportes
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apartado Reportes</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="text-align:Justify">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" style="background:#71022B; color:white;" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</div>

        </section>

       <?php
    require_once ('dashboardDown.php');
?>