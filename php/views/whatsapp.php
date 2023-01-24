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
?>


<?php 
    require_once ('dashboardDown.php');
?>

