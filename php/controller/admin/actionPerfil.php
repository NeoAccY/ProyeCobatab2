<?php

session_start();

if (!isset($_SESSION['id_user'])) {
    header("Location: ../../../");
}else {
    require_once("../../models/infoUser.php");
}

?>