<script type="text/javascript" src="<?php echo base_url("assets/js/validate/control/catalogo.js"); ?>"></script>

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
			<div class="col-sm-3">
				<div class="form-group text-left">
					<label class="control-label" for="nombre">Nombre: *</label>
					<input type="text" id="nombre" name="nombre" class="form-control" value="<?php echo $information?$information[0]["nombre_sistema"]:""; ?>" placeholder="Nombre" required >
				</div>
			</div>
			
			<div class="col-sm-3">
				<div class="form-group text-left">
					<label class="control-label" for="sigla">Sigla: *</label>
					<input type="text" id="sigla" name="sigla" class="form-control" value="<?php echo $information?$information[0]["sigla_sistema"]:""; ?>" placeholder="Sigla" required >
				</div>
			</div>

			<div class="col-sm-3">
				<div class="form-group text-left">
					<label class="control-label" for="version_sistema">Versión: *</label>
					<input type="text" id="version_sistema" name="version_sistema" class="form-control" value="<?php echo $information?$information[0]["version_sistema"]:""; ?>" placeholder="Versión" required >
				</div>
			</div>
			
			<div class="col-sm-3">
				<div class="form-group text-left">
					<label class="control-label" for="fabricante">Fabricante: *</label>
                    <input type="text" id="fabricante" name="fabricante" class="form-control" value="<?php echo $information?$information[0]["fabricante"]:""; ?>" placeholder="Fabricante" required >
				</div>
			</div>
		</div>

		<div class="row">	
			<div class="col-sm-4">
				<div class="form-group text-left">
					<label class="control-label" for="firstName">Fecha Vencimiento Soporte: *</label>
                    <div class="input-group date" id="vencimientoSoporte" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" id="fechaVencimiento" name="fechaVencimiento" data-target="#vencimientoSoporte" value="<?php echo $information?$information[0]["fecha_vencimiento_soporte"]:""; ?>" placeholder="Fecha Vencimiento Soporte" required/>
                        <div class="input-group-append" data-target="#vencimientoSoporte" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="form-group text-left">
					<label class="control-label" for="sistema_operativo">Sistema Operativo: *</label>
					<select name="sistema_operativo" id="sistema_operativo" class="form-control" >
						<option value=''>Select...</option>
						<?php for ($i = 0; $i < count($listaSO); $i++) { ?>
							<option value="<?php echo $listaSO[$i]["id_sistema_operativo"]; ?>" <?php if($information && $listaSO[$i]["id_sistema_operativo"] == $information[0]['fk_id_sistema_operativo']) { echo "selected"; }  ?>><?php echo $listaSO[$i]["sistema_operativo"]; ?></option>	
						<?php } ?>
					</select>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="form-group text-left">
					<label class="control-label" for="lenguaje_programacion">Lenguaje de Programación: *</label>
					<select name="lenguaje_programacion" id="lenguaje_programacion" class="form-control" >
						<option value=''>Select...</option>
						<?php for ($i = 0; $i < count($listaLenguajeProgramacion); $i++) { ?>
							<option value="<?php echo $listaLenguajeProgramacion[$i]["id_lenguaje_programacion"]; ?>" <?php if($information && $listaLenguajeProgramacion[$i]["id_lenguaje_programacion"] == $information[0]['fk_id_leguaje_programacion']) { echo "selected"; }  ?>><?php echo $listaLenguajeProgramacion[$i]["lenguaje_programacion"]; ?></option>	
						<?php } ?>
					</select>
				</div>
			</div>
		</div>

		<div class="row">	
			<div class="col-sm-5">
				<div class="form-group text-left">
					<label class="control-label" for="responsable_tecnico">Responsable técnico: *</label>
					<select name="responsable_tecnico" id="responsable_tecnico" class="form-control" >
						<option value=''>Select...</option>
						<?php for ($i = 0; $i < count($listaUsuarios); $i++) { ?>
							<option value="<?php echo $listaUsuarios[$i]["id_user"]; ?>" <?php if($information && $listaUsuarios[$i]["id_user"] == $information[0]['fk_id_responsable_tecnico']) { echo "selected"; }  ?>><?php echo $listaUsuarios[$i]["first_name"] . ' ' . $listaUsuarios[$i]["last_name"]; ?></option>
						<?php } ?>
					</select>
				</div>
			</div>

			<div class="col-sm-5">
				<div class="form-group text-left">
					<label class="control-label" for="responsable_funcional">Responsable funcional: *</label>
					<select name="responsable_funcional" id="responsable_funcional" class="form-control" >
						<option value=''>Select...</option>
						<?php for ($i = 0; $i < count($listaUsuarios); $i++) { ?>
							<option value="<?php echo $listaUsuarios[$i]["id_user"]; ?>" <?php if($information && $listaUsuarios[$i]["id_user"] == $information[0]['fk_id_responsable_funcional']) { echo "selected"; }  ?>><?php echo $listaUsuarios[$i]["first_name"] . ' ' . $listaUsuarios[$i]["last_name"]; ?></option>
						<?php } ?>
					</select>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6">
				<div class="form-group text-left">
					<label class="control-label" for="descripcion">Descripción: *</label>
					<textarea id="descripcion" name="descripcion" placeholder="Descripción" class="form-control" rows="2" ><?php echo $information?$information[0]["descripcion_sistema"]:""; ?></textarea>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="form-group text-left">
					<label class="control-label" for="observaciones">Observaciones: </label>
					<textarea id="observaciones" name="observaciones" placeholder="Descripción" class="form-control" rows="2" ><?php echo $information?$information[0]["observaciones"]:""; ?></textarea>
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
    $('#vencimientoSoporte').datetimepicker({
        format: 'YYYY-MM-DD'
    });
   });
 </script>