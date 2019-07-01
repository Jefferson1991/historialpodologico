<?php
include "navegacionPodo.php";

?>
<div class="card container-fluid" style=" background-color: white; 
        		-webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
				-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
				box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);">
	<div class="row">
			<div class="table-responsive col-md-12 col-xs-12">
			<hr>
					<table id="tableData" class="table table-striped table-hover" style="width: 100%" >
					    <thead>
					      <tr>
					        <th style="width: 10px;">#</th>
					        <th style="width: 10px;">Paciente</th>
					        <th></th>
					      </tr>
					    </thead>
					    <tbody>
					   	<?php
						$resultado = new HistorialController();
					    $resultado -> consultaPacientesGeneralController();
						?>
					    </tbody>
					  </table>
		</div>
	</div>
</div>


