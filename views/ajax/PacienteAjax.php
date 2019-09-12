<?php
require_once "../../controllers/PacientesController.php";
require_once "../../models/PacientesModel.php";
class AjaxPaciente{
		 public function ingresoPacientesAjax (){		 
	       $namePost = array("noHistoria" => $_POST);
		 	   $guardarHistoria = HistorialController::ingresoHistorialController($namePost);
		 	   echo $guardarHistoria;
         }
      public $parametroBus;
		  public function consultaAjaxPaciente(){
             $aux = $this->parametroBus;
				 	   $parametroBus = array("parametroBus" => $_POST["parametroBus"]);
             $guardarHistoria = HistorialController::consultaHistoriaController($aux,"historialpaciente");
             
		 }
}
   if(isset($_POST["noHistoria"])){
      $guardarHistoriaPrincipal = new AjaxPaciente();
      $guardarHistoriaPrincipal -> noHistoria = $_POST['noHistoria'];
      $guardarHistoriaPrincipal -> fechaIngresoPaciente = $_POST["fechaIngresoPaciente"];
      $guardarHistoriaPrincipal -> ingresoPacientesAjax();
    }
     if(isset($_POST["parametroBus"])){
      $guardarHistoriaPrincipal = new AjaxPaciente();
      $guardarHistoriaPrincipal -> parametroBus = $_POST['parametroBus'];
      $guardarHistoriaPrincipal -> consultaAjaxPaciente();
    }
?>