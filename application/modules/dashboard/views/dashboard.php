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
			<div class="col-md-3 col-sm-6 col-12">
				<div class="info-box">
					<span class="info-box-icon bg-info"><i class="far fa-address-book"></i></span>
					<div class="info-box-content">
						<span class="info-box-text">Usuarios Planta</span>
						<span class="info-box-number"><?php echo $noUsuariosPlanta; ?></span>
					</div>
				</div>
			</div>

			<div class="col-md-3 col-sm-6 col-12">
				<div class="info-box">
					<span class="info-box-icon bg-info"><i class="far fa-address-book"></i></span>
					<div class="info-box-content">
						<span class="info-box-text">Usuarios Contratista</span>
						<span class="info-box-number"><?php echo $noUsuariosContratistas; ?></span>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12">

				<!-- /.card -->
			</div>
		</div>
	</div>
</section>