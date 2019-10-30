<?php
require_once "../../controllers/PacientesController.php";
require_once "../../models/PacientesModel.php";
class AjaxPaciente{
		 public function ingresoPacientesAjax (){		 
	         $namePost = array("noHistoria" => $_POST);
		 	   $guardarHistoria = HistorialController::ingresoHistorialController($namePost);
         }
      public $parametroBus;
		  public function consultaAjaxPaciente(){
             $aux = $this->parametroBus;
				 $parametroBus = array("parametroBus" => $_POST["parametroBus"]);
             $guardarHistoria = HistorialController::consultaHistoriaController($aux,"historialpaciente");
             
       }
       public function IngresoCita(){
             if(isset($_POST["noHistoriaNueva"])){
                var_dump($_POST["noHistoriaNueva"]);
             }
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
    if(isset($_POST["noHistoriaNueva"])){
      $guardarCita = new AjaxPaciente();
      $guardarCita -> IngresoCita();

   }