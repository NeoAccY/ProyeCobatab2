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

    require_once "../conexion/conexionNet.php";
    global $conexionNet;

    if (!empty($_POST['id_tipo_usuario'])&& !empty($_POST['id_personas'])&& !empty($_POST['nombre_usuario'])&& !empty($_POST['password'])&& !empty($_POST['activo'])) {
        $sql = "INSERT INTO usuarios (id_tipo_usuario,id_personas,nombre_usuario,password,activo) VALUES (:id_tipo_usuario,:id_personas,:nombre_usuario,:password,:activo)";
        $stmt = $link->prepare($sql);
        $stmt->bindParam(':nombre_usuario', $_POST['nombre_usuario']);
        $stmt->bindParam(':password', $_POST['password']);
        $stmt->bindParam(':id_personas', $_POST['id_personas']);
        $stmt->bindParam(':id_tipo_usuario', $_POST['id_tipo_usuario']);
        $stmt->bindParam(':activo', $_POST['activo']);
           if ($stmt -> execute()) {
          $message = 'Registrado con exito :D';
        } else {
          $message = 'Lo sentimos, hay algun error :(';
        }
      }

?>
<body>

<?php if(!empty($message)):
 
        // if (count($error) > 0)
                echo'<div class="error"> • '.$message.'</div>';
            // }
    
  
     endif; ?>

<section class="form-register">
    <div class="row justify-content-center align-content-center text-center">
    <form class="formulario" name="formulario" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <h4>Registro Nuevo Usuario</h4>
    </div>
        <input class="controls" type="text" name="nombre_usuario" placeholder="Ingrese su(s) nombre (s) de Usuario">
        <input class="controls" type="text" name="password" placeholder="Ingrese una contraseña">
        <label class="cont_select" for="id_personas">Seleccione al usuario:</label>
        <select name="id_personas">
            <option value="0">Seleccione Opción:</option>
            <option value="1">Isaac Herrera</option>
            <option value="2">José Alcazar</option>
        </select>
        <label class="cont_select" for="id_tipo_usuario">Tipo de Usuario:</label>
        <select name="id_tipo_usuario">
            <option value="0">Seleccione Opción:</option>
            <option value="1">Administrador</option>
            <option value="2">Personal</option>
        </select>
        <label class="cont_select" for="activo">Estado de cuenta:</label>
        <select name="activo">
            <option value="0">Seleccione Opción:</option>
            <option value="1">Activo</option>
            <option value="2">Inactivo</option>
        </select>
        <input class="botons" type="submit" value="Registrar">
    </form>
  </section>
</body>

<?php
    require_once ('dashboardDown.php');
?>