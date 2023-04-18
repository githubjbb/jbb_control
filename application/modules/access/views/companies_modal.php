<script type="text/javascript" src="<?php echo base_url("assets/js/validate/access/companies.js"); ?>"></script>

<div class="modal-header">
	<h4 class="modal-title">APP info Empresa</h4>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>

<div class="modal-body">
	<p class="text-danger"><small><i class="icon fa fa-exclamation-triangle"></i> Los campos con * son obligatorios.</small></p>
	<form name="form" id="form" role="form" method="post" >
		<input type="hidden" id="hddId" name="hddId" value="<?php echo $information?$information[0]["id_company"]:""; ?>"/>
		
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group text-left">
					<label class="control-label" for="companyName">Nombre Empresa: *</label>
					<input type="text" id="companyName" name="companyName" class="form-control" value="<?php echo $information?$information[0]["company_name"]:""; ?>" placeholder="Nombre Empresa" required >
				</div>
			</div>
			
			<div class="col-sm-6">
				<div class="form-group text-left">
					<label class="control-label" for="contact">Contacto: *</label>
					<input type="text" id="contact" name="contact" class="form-control" value="<?php echo $information?$information[0]["company_contact"]:""; ?>" placeholder="Contacto" required >
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group text-left">
					<label class="control-label" for="movilNumber">Número Celular: *</label>
					<input type="number" id="movilNumber" name="movilNumber" class="form-control" value="<?php echo $information?$information[0]["company_movil"]:""; ?>" placeholder="Número Celular" required >
				</div>
			</div>
			
			<div class="col-sm-6">
				<div class="form-group text-left">
					<label class="control-label" for="email">Correo: *</label>
					<input type="email" class="form-control" id="email" name="email" value="<?php echo $information?$information[0]["company_email"]:""; ?>" placeholder="Correo" />
				</div>
			</div>
		</div>
					
		<div class="row">
	<?php if($information){ ?>
			<div class="col-sm-6">
				<div class="form-group text-left">
					<label class="control-label" for="status">Estado: *</label>
					<select name="status" id="status" class="form-control" required>
						<option value=''>Seleccione...</option>
						<option value=1 <?php if($information[0]["company_status"] == 1) { echo "selected"; }  ?>>Active</option>
						<option value=2 <?php if($information[0]["company_status"] == 2) { echo "selected"; }  ?>>Inactive</option>
					</select>
				</div>
			</div>
	<?php } ?>
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
	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	<button type="button" id="btnSubmit" name="btnSubmit" class="btn btn-primary" >
		Save <span class="fa fa-save" aria-hidden="true">
	</button> 
</div>