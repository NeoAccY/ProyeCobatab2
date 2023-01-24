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

<a href="#" class="botons"><i class="fas fa-plus m-1"></i> Añadir Nuevo</a>
<div class="container" style="padding: 10;">
		<div class="row">
			<div class="col-sm-12">
				<div class="card text-left">
					<div class="card-header">
						Información Capacitaciones
					</div>
					<div class="card-body">
						<!-- <span class="btn btn-primary">
							Agregar nuevo <span class="fa fa-plus-circle"></span>
						</span> -->
						<hr>
						<div id="tablaDatatable"></div>
					</div>
					<div class="card-footer text-muted">
                    SCAVNICOBATAB2 - Sistema para el control de alumnos, visitantes, así como notificación e informes del COBATAB N.2
					</div>
				</div>
			</div>
		</div>
</div>

<?php 
    require_once ('dashboardDown.php');
?>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaDatatable').load('tableSeries.php');
	});
</script>