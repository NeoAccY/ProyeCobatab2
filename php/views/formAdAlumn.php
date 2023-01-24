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

    if (!empty($_POST['id_personas'])&& !empty($_POST['id_turnos'])&& !empty($_POST['id_especialidad'])&& !empty($_POST['id_tutores'])&& !empty($_POST['matricula'])) {
        $sql = "INSERT INTO alumnos (id_personas,id_turnos,id_especialidad,id_tutores,matricula) VALUES (:id_personas,:id_turnos,:id_especialidad,:id_tutores,:matricula)";
        $stmt = $link->prepare($sql);
        $stmt->bindParam(':id_personas', $_POST['id_personas']);
        $stmt->bindParam(':id_turnos', $_POST['id_turnos']);
        $stmt->bindParam(':id_especialidad', $_POST['id_especialidad']);
        $stmt->bindParam(':id_tutores', $_POST['id_tutores']);
        $stmt->bindParam(':matricula', $_POST['matricula']);
    
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
        <h4>Registro Alumno</h4>
    </div>
        <input class="controls" type="text" name="id_personas" placeholder="ID del alumno">
        <label for="grado" class="cont_select">Turno:</label>
        <select name="id_turnos">
            <option class="" value="0">Seleccione Turno:</option>
            <option value="1">Matutino</option>
            <option value="2">Vespertino</option>
        </select>
        <label for="especialidad" class="cont_select">Especialidad:</label>
        <select name="id_especialidad">
            <option class="" value="0">Seleccione Especialidad:</option>
            <option value="1">Informatica</option>
            <option value="2">Administración</option>
        </select>
        <input class="controls" type="text" name="id_tutores" placeholder="ID del tutor">
        <input class="controls" type="text" name="matricula" placeholder="Teclee la matricula">
        <input class="botons" type="submit" value="Registrar">
    </form>
  </section>
</body>

<?php
    require_once ('dashboardDown.php');
?>