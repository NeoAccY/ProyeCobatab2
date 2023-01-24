<?php

require_once "../models/infoGroupTurns.php";

?>

<div>
	<table class="table table-hover table-condensed table-bordered" id="iddatatable">
		<thead style="background-color: #dc3545;color: white; font-weight: bold;">
			<tr>
				<td>id_Nivel_Escolar</td>
				<td>Turno</td>
				<td>Semestre y Grupo</td>
                <td>Activo</td>
                <td>Editar</td>
			</tr>
		</thead>
		<tfoot style="background-color: #ccc;color: white; font-weight: bold;">
			<tr>
            <td>id_Nivel_Escolar</td>
				<td>Turno</td>
				<td>Semestre y Grupo</td>
                <td>Activo</td>
                <td>Editar</td>
			</tr>
		</tfoot>
		<tbody >
			<?php
			while ($mostrar=mysqli_fetch_row($result)) {
				?>
				<tr >
					<td><?php echo $mostrar[0] ?></td>
					<td><?php if($mostrar[1] == 1){
                        echo "Matutino";
                    }else{
                        echo "Vespertino";
                    } ?></td>
                    <td><?php echo $mostrar[2]. "° ". $mostrar[3] ?></td>
                    <td><?php if($mostrar[4] == 0){
                        echo "No";
                    }else {
                        echo "Si";
                    } ?></td>
					<td style="text-align: center;">
						<span class="btn btn-warning btn-sm">
							<span class="fa fa-pencil-square-o"></span>
						</span>
					</td>
				</tr>
				<?php
			}
			?>
		</tbody>
	</table>
</div>



<script type="text/javascript">
	$(document).ready(function() {
		$('#iddatatable').DataTable({
			language: {
				url: '../controller/language.json'
			}
		});
	} );
</script>