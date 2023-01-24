<?php

require_once "../models/infoAlumn.php";

?>

<div>
	<table class="table table-hover table-condensed table-bordered" id="iddatatable">
		<thead style="background-color: #dc3545;color: white; font-weight: bold;">
			<tr>
				<td>ID persona</td>
                <td>ID especialidad</td>
                <td>ID tutores</td>
				<td>Matricula</td>
                <td>Editar</td>
                <td>Eliminar</td>
			</tr>
		</thead>
		<tfoot style="background-color: #ccc;color: white; font-weight: bold;">
			<tr>
            <td>ID persona</td>
                <td>ID especialidad</td>
                <td>ID tutores</td>
				<td>Matricula</td>
                <td>Editar</td>
                <td>Eliminar</td>
			</tr>
		</tfoot>
		<tbody >
        <?php
			while ($mostrar=mysqli_fetch_row($result)) {
				?>
				<tr >
                    <td><?php echo $mostrar[1] ?></td>
                    <td><?php echo $mostrar[3] ?></td>
                    <td><?php echo $mostrar[4] ?></td>
                    <td><?php echo $mostrar[5] ?></td>

					<td style="text-align: center;">
						<span class="btn btn-warning btn-sm">
							<span class="fa fa-pencil-square-o"></span>
						</span>
					</td>
					<td style="text-align: center;">
						<span class="btn btn-danger btn-sm" >
							<span class="fa fa-trash"></span>
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