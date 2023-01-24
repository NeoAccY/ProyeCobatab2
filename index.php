<?php
require_once("php/controller/login.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCAVNICOBATAB2 - Sistema para el control de alumnos, visitantes, así como notificación e informes del COBATAB N.2</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <div>
        <nav class="nav">
                <img src="images/app-logo.png" alt="" class="logo">
        </nav>
    </div>
    <div class="container">
        <div class="form">
            <?php
        // if (count($error) > 0) {
            if($fallo != '') {
            // for ($i=0; $i < count($error); $i++) { 
                echo'<div class="error"> • '.$fallo.'</div>';
            // }
        }
            ?>
            <div class="thumbnail">
                <img src="images/user_man.png"/>
            </div>
            <form name="formLogin" action="index.php" method="POST">
                <h2>Inicio de Sesión</h2>
                <label for="Usuario" class="text">Usuario</label>
                <input type="text" id="user" name="user" placeholder="Ingrese su Usuario" value="<?php if (isset($user)) echo $user ?>"/>
                <label for="Contraseña" class="text">Contraseña</label>
                <input type="password" id="pass" name="pass" placeholder="Ingrese su Contraseña" value="<?php if(isset($pass)) echo $pass ?>"/>
                <button class="boton" type="submit" name="Ingresar">Ingresar</button>
            </form>
        </div>
    </div>
    <footer class="footer">
        <div class="info">
            <p>Segunda cerrada de niño artillero No. 102, Col. Tamulte de las Barrancas, 86150, Villahermosa, Tabasco.</p>
            <h5>COBATAB Plantel Núm. 2 © 2021. Todos los derechos reservados.</h5>
        </div>
    </footer>    
</body>
</html>