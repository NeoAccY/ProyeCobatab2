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
                <h2 class="titulo">Da click en una de las <b>OPCIONES</b>, para agregar o leer la documentación:</h2>
                
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="../../images/img14.jpg" alt="">
                        <div class="hover-galeria">
                            <a href="formAdPerson.php"><img src="../../images/icono1.png" alt=""></a>
                            <p>Personas</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="../../images/img18.png" alt="">
                        <div class="hover-galeria">
                            <a href="#"><img src="../../images/icono1.png" alt=""></a>
                            <p>Personal</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="../../images/img22.jpg" alt="">
                        <div class="hover-galeria">
                            <a href="formAdAlumn.php"><img src="../../images/icono1.png" alt=""></a>
                            <p>Alumnos</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="justify-content-center align-content-center text-center" style="margin-top: -75;margin-left:5">
            <!-- Button trigger modal -->
<button type="button" class="btn" style="background:#71022B; color:white" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Documentación Personas
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apartado Personas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="text-align:Justify">
        Aquí se podrán agregar o dar de alta a nuevas personas.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" style="background:#71022B; color:white;" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

            <!-- Button trigger modal -->
            <button type="button" class="btn" style="background:#71022B; color:white" data-bs-toggle="modal" data-bs-target="#exampleModal1">
  Documentación Personal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="text-align:Justify">
        Dar de alta a un nuevo trabajador o administrativo.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" style="background:#71022B; color:white;" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



            <!-- Button trigger modal -->
            <button type="button" class="btn" style="background:#71022B; color:white" data-bs-toggle="modal" data-bs-target="#exampleModal2">
  Documentación Alumnos
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">Apartado Alumnos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="text-align:Justify">
        En este apartado, se podrá de dar de alta a un nuevo alumno.
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