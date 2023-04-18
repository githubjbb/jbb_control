<script type="text/javascript" src="<?php echo base_url("assets/js/validate/control/detallle_catalogo.js"); ?>"></script>

<div class="modal-header">
	<h4 class="modal-title">Catálogo De Sistemas De Información </h4>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>

<div class="modal-body">
	<p class="text-danger"><small><i class="icon fa fa-exclamation-triangle"></i> Los campos con * son obligatorios.</small></p>
	<form name="form" id="form" role="form" method="post" >
		<input type="hidden" id="hddId" name="hddId" value="<?php echo $information?$information[0]["id_catalogo_sistema"]:""; ?>"/>
		
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group text-left">
					<label class="control-label" for="url_aplicacion">URL Apicación: *</label>
					<input type="text" id="url_aplicacion" name="url_aplicacion" class="form-control" value="<?php echo $information?$information[0]["url_aplicacion"]:""; ?>" placeholder="URL Apicación" required >
				</div>
			</div>
			
			<div class="col-sm-6">
				<div class="form-group text-left">
					<label class="control-label" for="servidor_aplicacion">Servidor aplicación: *</label>
					<input type="text" id="servidor_aplicacion" name="servidor_aplicacion" class="form-control" value="<?php echo $information?$information[0]["servidor_aplicacion"]:""; ?>" placeholder="Servidor_aplicación" required >
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6">
				<div class="form-group text-left">
					<label class="control-label" for="servidor_base_datos">Servidor base de datos: *</label>
					<input type="text" id="servidor_base_datos" name="servidor_base_datos" class="form-control" value="<?php echo $information?$information[0]["servidor_base_datos"]:""; ?>" placeholder="Servidor Base de Datos" required >
				</div>
			</div>
			
			<div class="col-sm-6">
				<div class="form-group text-left">
					<label class="control-label" for="nombre_base_datos">Nombre base de datos: *</label>
                    <input type="text" id="nombre_base_datos" name="nombre_base_datos" class="form-control" value="<?php echo $information?$information[0]["nombre_base_datos"]:""; ?>" placeholder="Base de Datos" required >
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