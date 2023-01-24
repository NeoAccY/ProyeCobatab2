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

    if (!empty($_POST['nombre'])&& !empty($_POST['ap_paterno'])&& !empty($_POST['ap_materno'])&& !empty($_POST['edad'])&& !empty($_POST['telefono'])&& !empty($_POST['sexo'])&& !empty($_POST['email'])) {
        $sql = "INSERT INTO personas (nombre,ap_paterno,ap_materno,edad,telefono,sexo,email) VALUES (:nombre,:ap_paterno,:ap_materno,:edad,:telefono,:sexo,:email)";
        $stmt = $link->prepare($sql);
        $stmt->bindParam(':nombre', $_POST['nombre']);
        $stmt->bindParam(':ap_paterno', $_POST['ap_paterno']);
        $stmt->bindParam(':ap_materno', $_POST['ap_materno']);
        $stmt->bindParam(':edad', $_POST['edad']);
        $stmt->bindParam(':telefono', $_POST['telefono']);
        $stmt->bindParam(':sexo', $_POST['sexo']);
        $stmt->bindParam(':email', $_POST['email']);
    
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
        <h4>Registro Nueva Persona</h4>
    </div>
        <input class="controls" type="text" name="nombre" placeholder="Ingrese su nombre (s)">
        <input class="controls" type="text" name="ap_paterno" placeholder="Ingrese apellido paterno">
        <input class="controls" type="text" name="ap_materno" placeholder="Ingrese apellido materno">
        <label class="cont_select">Ingrese edad:</label>
        <input class="num" type="number" min="14" name="edad">
        <input class="controls" type="tel" name="telefono" placeholder="Ingrese número telefónico">
        <label class="cont_select" for="tipoSexo">Sexo:</label>
        <select name="sexo">
            <option value="0">Seleccione Opción:</option>
            <option value="1">Femenino</option>
            <option value="2">Masculino</option>
        </select>
        <input class="controls" type="text" name="email" placeholder="Correo Institucional o Personal">
        <input class="botons" type="submit" value="Registrar">
    </form>
  </section>
</body>

<?php
    require_once ('dashboardDown.php');
?>