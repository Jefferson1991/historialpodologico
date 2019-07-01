<?php
include "navegacionPodo.php";
?>
<div class="card container-fluid" style=" background-color: white; 
        		-webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
				-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
				box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);">
	<div class="row">
		<div class="col-md-12"><hr></div>
		<div class="col-md-6">
				<div class="input-group">
					<input  class="form-control" type="text" name="parametroBus" id="parametroBus" placeholder="Ingrese el parametro de busqueda">
					<span class="input-group-btn">
					<button class="btn btn-info" type="button" id="btnConsultar">Buscar paciente</button>
					</span>
				</div>	
		</div>
	</div>	
		<div class="col-md-12"><hr class="text-danger"></div>
		<div class="col-md-12 jumbotron" id="resultConsulta">	
				<?php
				 $consultaIndividual = new HistorialController();
				 $consultaIndividual -> consultaHistoriaController();
				?>
		</div>
	

</div>
