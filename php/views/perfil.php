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

    require_once ('../models/infoUser.php');
?>

    <div class="info_perfil">
        <form name="formulario" action="">
            <h1>Detalles del Usuario</h1>
            <div class="info_login">
                <h4>Información Personal</h4>
                <section class='mark-list'>
                    <div class='mark-item'>
                    <br>
                    <div class='text-mark'>
                    <h6>Nombre Completo: <?php echo $name." ". $paterno." ".$materno ?></h6>
                    <h6>Edad: <?php echo $age ?></h6>
                    <h6>Teléfono: <?php echo $phone ?></h6>
                    <h6>Email: <?php echo $email ?></h6>
                    </div>
                    </div>
                    <a href="edit.php"><button class="btn1" type="submit" name="Editar">Editar</button></a>
                </section>            
            </div>
            <div class="info_login">
                <h4>Información Área de Trabajo</h4>
                <section class='mark-list'>
                    <div class='mark-item'>
                    <br>
                    <div class='text-mark'>
                    <h6>Nombre Completo: <?php echo $name." ". $paterno." ".$materno ?></h6>
                    <h6>Edad: <?php echo $age ?></h6>
                    <h6>Teléfono: <?php echo $phone ?></h6>
                    <h6>Email: <?php echo $email ?></h6>
                    </div>
                    </div>
                    <button class="btn1" type="submit" name="Editar">Editar</button>
                </section>            
            </div>
            <div class="info_login">
                <h4>Información Sesión Usuario</h4>
                <section class='mark-list'>
                    <div class='mark-item'>
                    <br>
                    <div class='text-mark'>
                    <h6>Nombre Usuario: <?php echo $usuario ?></h6>
                    <h6>Contraseña: <?php echo $password ?></h6>
                    </div>
                    </div>
                    <button class="btn1" type="submit" name="Editar">Editar</button>
                </section>            
            </div>
        </form>
    </div>

<?php
    require_once ('dashboardDown.php');
?>