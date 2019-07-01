<?php
include "navegacionPodo.php";

?>
<div class="card container-fluid" style=" background-color: white; 
        		-webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
				-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
				box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);">
	<div class="row">
	<div class="col-md-12">
      <?php
              $leerActualizacionController = new HistorialController();
              $leerActualizacionController -> consultaPacientesGeneralControllerA();
              // $leerActualizacionController -> actualizarUserController();
              ?>
            
              
  </div>
             <hr> 
	</div>
</div>
