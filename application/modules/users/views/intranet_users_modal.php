<script type="text/javascript" src="<?php echo base_url("assets/js/validate/users/intranet_users.js"); ?>"></script>

<script>
$(document).ready(function () {
	
    $('#tipoVinculacion').change(function () {
        $('#tipoVinculacion option:selected').each(function () {
            var tipoVinculacion = $('#tipoVinculacion').val();
            if ((tipoVinculacion > 0 || tipoVinculacion != '') ) {
				$("#div_fecha").css("display", "none");
				if(tipoVinculacion==2){
					$("#div_fecha").css("display", "inline");
				}
            } 
        });
    });
});
</script>

<div class="modal-header">
	<h4 class="modal-title">Usuario con acceso a Intranet</h4>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>

<div class="modal-body">
	<p class="text-danger"><small><i class="icon fa fa-exclamation-triangle"></i> Los campos con * son obligatorios.</small></p>
	<form name="form" id="form" role="form" method="post" >
		<input type="hidden" id="hddId" name="hddId" value="<?php echo $information?$information[0]["id"]:""; ?>"/>
		
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group text-left">
					<label class="control-label" for="nombreCompleto">Nombre Completo: *</label>
					<input type="text" id="nombreCompleto" name="nombreCompleto" class="form-control" value="<?php echo $information?$information[0]["nombreCompleto"]:""; ?>" placeholder="Nombre Completo" required >
				</div>
			</div>
			
			<div class="col-sm-6">
				<div class="form-group text-left">
					<label class="control-label" for="username">Usuario: *</label>
					<input type="text" id="username" name="username" class="form-control" value="<?php echo $information?$information[0]["username"]:""; ?>" placeholder="Usuario" required >
				</div>
			</div>
		</div>
			
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group text-left">
					<label class="control-label" for="email">Correo: *</label>
					<input type="email" class="form-control" id="email" name="email" value="<?php echo $information?$information[0]["correoUsuario"]:""; ?>" placeholder="Correo" />
				</div>
			</div>

			<div class="col-sm-6">
				<div class="form-group text-left">
					<label class="control-label" for="tipoVinculacion">Tipo Vinculación: *</label>
					<select name="tipoVinculacion" id="tipoVinculacion" class="form-control" required>
						<option value=''>Seleccione...</option>
						<option value=1 <?php if($information && $information[0]["tipoVinculacion"] == 1) { echo "selected"; }  ?>>Planta</option>
						<option value=2 <?php if($information && $information[0]["tipoVinculacion"] == 2) { echo "selected"; }  ?>>Contratista</option>
					</select>
				</div>
			</div>

		</div>


		<div class="row">
			<div class="col-sm-6">
				<div class="form-group text-left">
					<label class="control-label" for="estado">Estado: *</label>
					<select name="estado" id="estado" class="form-control" required>
						<option value=''>Seleccione...</option>
						<option value=1 <?php if($information && $information[0]["estado_usuario"] == 1) { echo "selected"; }  ?>>Activo</option>
						<option value=2 <?php if($information && $information[0]["estado_usuario"] == 2) { echo "selected"; }  ?>>Inactivo</option>
					</select>
				</div>
			</div>

<?php 
	$mostrar = "none";
	$fechaFinContratoRequired = "";
	if($information && $information[0]["tipoVinculacion"]==2){
		$mostrar = "inline";
		$fechaFinContratoRequired = "required";
	}elseif($information && $information[0]["tipoVinculacion"]==1){
		$fechaFinContratoRequired = "";
	}
?>

			<div class="col-sm-6">
				<div class="form-group text-left" id="div_fecha" style="display:<?php echo $mostrar; ?>">
					<label class="control-label" for="fechaFinContrato">Fecha Fin Contrato: *</label>
                    <div class="input-group date" id="fechaFinContrato" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" id="fechaFinContrato" name="fechaFinContrato" data-target="#fechaFinContrato" value="<?php echo $information?$information[0]["fechaFinalizacionContrato"]:""; ?>" placeholder="Fecha Fin Contrato" <?php echo $fechaFinContratoRequired; ?> />
                        <div class="input-group-append" data-target="#fechaFinContrato" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
		
		<div class="form-group">
			<div id="div_load" style="display:none">		
				<div class="progress progress-striped active">
					<div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
						<span class="sr-only">45% completado</span>
					</div>
				</div>
			</div>
			<div id="div_error" style="display:none">			
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<div id="span_msj"></div>
				</div>
			</div>	
		</div>
			
	</form>
</div>
<div class="modal-footer justify-content-between">
	<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
	<button type="button" id="btnSubmit" name="btnSubmit" class="btn btn-primary" >
		Guardar <span class="fa fa-save" aria-hidden="true">
	</button> 
</div>

<script>
  $(function () {
    //Date picker
    $('#fechaFinContrato').datetimepicker({
        format: 'YYYY-MM-DD'
    });
   });
 </script>