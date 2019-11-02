<?php
require_once "../../controllers/PacientesController.php";
require_once "../../models/PacientesModel.php";
class AjaxPaciente{
		 public function ingresoPacientesAjax (){
          if(isset($_POST["noHistoria"])){
            $namePost = array("noHistoria" => $_POST);
            $guardarHistoria = HistorialController::ingresoHistorialController($namePost);
          }		 
         }
      public $parametroBus;
		  public function consultaAjaxPaciente(){
             $aux = $this->parametroBus;
				     $parametroBus = array("parametroBus" => $_POST["parametroBus"]);
             $guardarHistoria = HistorialController::consultaHistoriaController($aux,"historialpaciente");
       }
       public function consultaCita(){
         $parametroNuevo = array("parametroNuevo" => $_POST["parametroNuevo"]);
         $consultaCitas = HistorialController::ctrHistoriaController($parametroNuevo);
         echo json_encode($consultaCitas);
       }
       public function IngresoCita(){
             if(isset($_POST["noHistoriaNueva"])){
               $postName = array("noHistoria" => $_POST["noHistoriaNueva"],
                                 "fechaConsulta" => $_POST["fechaConsulta"],
                                 "diagnostico" => $_POST["diagnostico"],
                                 "procedimiento" => $_POST["procedimiento"],
                                 "prescripcion" => $_POST["prescripcion"],
                                 "fechaControlProximo" => $_POST["fechaControlProximo"]);
               $IngresoCitaPost = HistorialController::ctrIngresoCita($postName);
               return $IngresoCitaPost;
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

   if(isset($_POST["parametroNuevo"])){
    $ConsultaHistoria = new AjaxPaciente();
    $ConsultaHistoria -> consultaCita();
  }