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

    if (!empty($_POST['nombre'])&& !empty($_POST['fecha_hora'])) {
        $sql = "INSERT INTO reportes (nombre,fecha_hora) VALUES (:nombre,:fecha_hora)";
        $stmt = $link->prepare($sql);
        $stmt->bindParam(':nombre', $_POST['nombre']);
        $stmt->bindParam(':fecha_hora', $_POST['fecha_hora']);
        
        if ($stmt -> execute()) {
          $message = 'Registrado con exito :D';
        } else {
          $message = 'Lo sentimos, hay algun error :(';
        }
      }
      date_default_timezone_set('America/Mexico_City');
      $fecha_actual=date("Y-m-d H:i:s")
?>

<body>


<section class="form-register">
<?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
<form class="formulario" name="formulario" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <div class="row justify-content-center align-content-center text-center">
        <h4>Reportes</h4>
        </div>
        <input class="controls" type="text" name="nombre" placeholder="Nombre del reporte">
        <input class="controls" type="datetime" name="fecha_hora" value="<?= $fecha_actual?>">
        <input class="botons" type="submit" value="Registrar">
    </form>
</section>
</body>

<?php
    require_once ('dashboardDown.php');
?>