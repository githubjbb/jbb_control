<script>
$(function(){ 
	$(".btn-success").click(function () {	
			var oID = $(this).attr("id");
            $.ajax ({
                type: 'POST',
								url: base_url + 'users/cargarModalIntranetUsers',
                data: {'idUser': oID},
                cache: false,
                success: function (data) {
                    $('#tablaDatos').html(data);
                }
            });
	});	
});
</script>

<?php
	$retornoExito = $this->session->flashdata('retornoExito');
	if ($retornoExito) {
?>
		<script>
			$(function() {
				toastr.success('<?php echo $retornoExito ?>')
		  	});
		</script>
<?php
	}

	$retornoError = $this->session->flashdata('retornoError');
	if ($retornoError) {
?>
		<script>
			$(function() {
				toastr.error('<?php echo $retornoError ?>')
		  	});
		</script>
<?php
	}
?> 

<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<!-- Default box -->
				<div class="card">
					<div class="card-header">
						<div class="btn-group btn-group-toggle">
							<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal" id="x">
									<span class="fa fa-plus" aria-hidden="true"></span> Adicionar Usuario
							</button>
						</div>
						<div class="card-tools">
							<div class="btn-group btn-group-toggle">
	                <a type="button" class="btn btn-info swalDefaultInfo <?php if($estado == 1){ echo 'active';} ?>" href="<?php echo base_url("users/intranet_users/1"); ?>">
	                  Usuarios Activos
	                </a>
	                <a type="button" class="btn btn-info swalDefaultInfo <?php if($estado == 2){ echo 'active';} ?>" href="<?php echo base_url("users/intranet_users/2"); ?>">
	                  Usuarios Inactivos
	                </a>
							</div>
						</div>
					</div>
					<div class="card-body">

					<?php 										
						if(!$info){ 
							echo '<div class="col-lg-12">
									<p class="text-danger"><span class="fa fa-alert" aria-hidden="true"></span> No se encontraron registros.</p>
								</div>';
						}else{
					?>
						
						<table id="usuarios" class="table table-bordered table-striped">
							<thead>
								<tr>
								<th>Nombre</th>
								<th>Correo institucional</th>
								<th class="text-center">Usuario</th>
								<th class="text-center">Fecha Fin Contrato</th>
								<th class="text-center">Estado</th>
								<th class="text-center">Editar</th>
								<th class="text-center">Contraseña</th>
								</tr>
							</thead>
							<tbody>							
							<?php
							foreach ($info as $lista):
									echo "<tr>";
									echo "<td>" . $lista['nombreCompleto'] . "</td>";
									echo "<td>" . $lista['correoUsuario'] . "</td>";
									echo "<td class='text-center'>" . $lista['username'] . "</td>";
									echo "<td class='text-center'>" . $lista['fechaFinalizacionContrato'] . "</td>";
									echo "<td class='text-center'>";
									switch ($lista['estado_usuario']) {
										case 1:
											$valor = 'Activo';
											$clase = "text-success";
											break;
										case 2:
											$valor = 'Inactivo';
											$clase = "text-danger";
											break;
									}
									echo '<p class="' . $clase . '"><strong>' . $valor . '</strong></p>';
									echo "</td>";
									echo "<td class='text-center'>";
						?>
									<button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#modal" id="<?php echo $lista['id']; ?>" >
										Editar <span class="fa fa-edit" aria-hidden="true">
									</button>
						<?php
									echo "</td>";
									echo "<td class='text-center'>";
							?>
									<a href="<?php echo base_url("users/email/" . $lista['id']); ?>" class="btn btn-default btn-xs">Reiniciar Contraseña <span class="fa fa-lock" aria-hidden="true"></a> 
							<?php
									echo "</td>";									
									echo "</tr>";
							endforeach;
							?>
							</tbody>
						</table>
					<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--INICIO Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">    
	<div class="modal-dialog">
		<div class="modal-content" id="tablaDatos">

		</div>
	</div>
</div>                       
<!--FIN Modal -->

<script>
  $(function () {
    $('#usuarios').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": false,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>