<script type="text/javascript" src="<?php echo base_url("assets/js/validate/invoice/invoice_service.js"); ?>"></script>

<script>
$(function(){ 		
	$(".btn-success").click(function () {	
			var oID = $(this).attr("id");
            $.ajax ({
                type: 'POST',
				        url: base_url + 'control/cargarModalDetalleCatalogo',
                data: {'idCatalogo': oID},
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

        <div class="invoice p-3 mb-3">
          <div class="row">
            <div class="col-12">
              <h5>
                <i class="fas fa-globe"></i> <?php echo $infoCatagolo[0]['nombre_sistema']; ?> 
                <small class="float-right">Fecha Vencimiento Soporte:  <?php echo $infoCatagolo[0]['fecha_vencimiento_soporte']; ?></small>
              </h5>
            </div>
          </div>
              <!-- info row -->
          <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
              <address>
                <strong>Versión: </strong><?php echo $infoCatagolo[0]['version_sistema']; ?><br>
                <strong>Sigla: </strong><?php echo $infoCatagolo[0]['sigla_sistema']; ?><br>
                <strong>Fabricante: </strong><?php echo $infoCatagolo[0]['fabricante']; ?><br>
                <strong>Sistema Operativo: </strong><?php echo $infoCatagolo[0]['sistema_operativo']; ?><br>
                <strong>Lenguaje de Programación: </strong><?php echo $infoCatagolo[0]['lenguaje_programacion']; ?><br>
              </address>
            </div>
                <!-- /.col -->
            <div class="col-sm-4 invoice-col">
              Responsable técnico <br>
                <strong><?php echo $infoCatagolo[0]['tecnico']; ?></strong><br>
              Responsable funcional:<br>
              <strong><?php echo $infoCatagolo[0]['funcional']; ?></strong><br>
            </div>
            <div class="col-sm-4 invoice-col">
              <b># <?php echo $infoCatagolo[0]['id_catalogo_sistema']; ?></b><br>
              <b>Descripción:</b><br> <?php echo $infoCatagolo[0]['descripcion_sistema']; ?><br>
              <b>Observaciones:</b><br> <?php echo $infoCatagolo[0]['observaciones']; ?>
            </div>
          </div>

          <div class="row">
            <div class="col-12 table-responsive">

              <table class="table table-striped">
                <thead>
                <tr>
                  <th>Enlace Aplicación</th>
                  <th class='text-center'>Servidor Aplicación</th>
                  <th class='text-center'>Servidor Base de Datos</th>
                  <th>Nombre Base de Datos</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  echo '<tr>';
                  echo "<td>" . $infoCatagolo[0]['url_aplicacion'] . "</td>";
                  echo "<td class='text-center'>" . $infoCatagolo[0]['servidor_aplicacion'] . "</td>";
                  echo "<td class='text-center'>" . $infoCatagolo[0]['servidor_base_datos'] . "</td>";
                  echo "<td>" . $infoCatagolo[0]['nombre_base_datos'] . "</td>";
                  echo "</tr>";
                ?>
              </tbody>
            </table>

          </div>
        </div>

        <div class="row">
          <!-- accepted payments column -->
          <div class="col-6">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal" id="<?php echo $infoCatagolo[0]['id_catalogo_sistema']; ?>" >
              Más Información <i class="fas fa-edit"></i>
            </button>  
          </div>
          <!-- /.col -->

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