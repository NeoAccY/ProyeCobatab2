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
    require_once "../conexion/conexionNet.php";
    global $conexionNet;

    if (!empty($_POST['id_motivo_visita'])&& !empty($_POST['id_identificaciones'])&& !empty($_POST['nombre'])&& !empty($_POST['ap_paterno'])&& !empty($_POST['ap_materno'])&& !empty($_POST['dato_identif'])) {
        $sql = "INSERT INTO visitantes (id_motivo_visita,id_identificaciones,nombre,ap_paterno,ap_materno,dato_identif) VALUES (:id_motivo_visita,:id_identificaciones,:nombre,:ap_paterno,:ap_materno,:dato_identif)";
        $stmt = $link->prepare($sql);
        $stmt->bindParam(':id_motivo_visita', $_POST['id_motivo_visita']);
        $stmt->bindParam(':id_identificaciones', $_POST['id_identificaciones']);
        $stmt->bindParam(':nombre', $_POST['nombre']);
        $stmt->bindParam(':ap_paterno', $_POST['ap_paterno']);
        $stmt->bindParam(':ap_materno', $_POST['ap_materno']);
        $stmt->bindParam(':dato_identif', $_POST['dato_identif']);
    
        if ($stmt -> execute()) {
          $message = 'Registrado con exito :D';
        } else {
          $message = 'Lo sentimos, hay algun error :(';
        }
      }

?>


<body>
<?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>


<section class="form-register">
<form class="formulario" name="formulario" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <div class="row justify-content-center align-content-center text-center">
        <h4>Registro Visitantes</h4>
    </div>
        <input class="controls" type="text" name="nombre" placeholder="Nombre">
        <input class="controls" type="text" name="ap_paterno" placeholder="Apellido paterno">
        <input class="controls" type="text" name="ap_materno" placeholder="Apellido materno">
        <label class="cont_select" for="motivo">Motivo de su visita:</label>
        <select name="id_motivo_visita" >
            <option value="0">Seleccione Opción:</option>
            <option value="1">Salud</option>
            <option value="2">Documentación</option>
        </select>
        <!-- <input class="controls" type="text" name="correo" id="correo" placeholder="Identificación"> -->
        <label class="cont_select" for="identificacion">Tipo de Identifiación:</label>
        <select name="id_identificaciones" >
            <option value="0">Seleccione Opción:</option>
            <option value="1">INE</option>
            <option value="2">Otra</option>
        </select>
        <input class="controls" type="text" name="dato_identif" placeholder="Dato identificación">
        <input class="botons" type="submit" value="Registrar">
    </form>
</section>
</body>

<?php
    require_once ('dashboardDown.php');
?>