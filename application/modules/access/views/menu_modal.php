<script type="text/javascript" src="<?php echo base_url("assets/js/validate/access/menu.js"); ?>"></script>

<script>
$(function () {
	$('.select2').select2();
    $('#order').select2({
        dropdownParent: $('#modal')
    });
});
</script>

<div class="modal-header">
	<h4 class="modal-title">Menu links</h4>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>

<div class="modal-body">
	<form name="form" id="form" role="form" method="post" >
		<input type="hidden" id="hddId" name="hddId" value="<?php echo $information?$information[0]["id_menu"]:""; ?>"/>
		
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group text-left">
					<label class="control-label" for="menu_name">Menu name : *</label>
					<input type="text" id="menu_name" name="menu_name" class="form-control" value="<?php echo $information?$information[0]["menu_name"]:""; ?>" placeholder="Menu name" required >
				</div> 
			</div>
			
			<div class="col-sm-6">
				<div class="form-group text-left">
					<label class="control-label" for="menu_url">Menu URL : *</label>
					<input type="text" id="menu_url" name="menu_url" class="form-control" value="<?php echo $information?$information[0]["menu_url"]:""; ?>" placeholder="Menu url" >
				</div> 
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6">
				<div class="form-group text-left">
					<label class="control-label" for="order">Order: *</label>
					<select name="order" id="order" class="form-control select2" required>
						<option value='' >Select...</option>
						<?php for ($i = 1; $i <= 10; $i++) { ?>
							<option value='<?php echo $i; ?>' <?php if ($information && $i == $information[0]["menu_order"]) { echo 'selected="selected"'; } ?> ><?php echo $i; ?></option>
						<?php } ?>									
					</select>
				</div> 
			</div>
		
			<div class="col-sm-6">		
				<div class="form-group text-left">
					<label class="control-label" for="menu_type">Menu type : *</label>
					<select name="menu_type" id="menu_type" class="form-control select2" required>
						<option value=''>Select...</option>
						<option value=1 <?php if($information && $information[0]["menu_type"] == 1) { echo "selected"; }  ?>>Left</option>
						<option value=2 <?php if($information && $information[0]["menu_type"] == 2) { echo "selected"; }  ?>>Top</option>
					</select>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-6">		
				<div class="form-group text-left">
					<label class="control-label" for="menu_status">Status: *</label>
					<select name="menu_status" id="menu_status" class="form-control" required>
						<option value=''>Select...</option>
						<option value=1 <?php if($information && $information[0]["menu_status"] == 1) { echo "selected"; }  ?>>Active</option>
						<option value=2 <?php if($information && $information[0]["menu_status"] == 2) { echo "selected"; }  ?>>Inactive</option>
					</select>
				</div>
			</div>
		
			<div class="col-sm-6">
				<div class="form-group text-left">
					<label class="control-label" for="menu_icon">Menu icon: *</label>
					<input type="text" id="menu_icon" name="menu_icon" class="form-control" value="<?php echo $information?$information[0]["menu_icon"]:""; ?>" placeholder="Menu icon" >
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
				<div class="alert alert-danger"><span class="glyphicon glyphicon-remove" id="span_msj">&nbsp;</span></div>
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