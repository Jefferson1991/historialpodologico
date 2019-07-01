<?php
class EnlacesPaginas{

static public function enlacesPaginasModels($enlacesModel){

      if( $enlacesModel == "IngresoPaciente" || 
  		  $enlacesModel == "blank" || 
        $enlacesModel == "consultaHistorial" || 
        $enlacesModel == "templeReportesPaciente" ||
        $enlacesModel == "actualizacionPaciente"){

            $moduloMenu = "./views/modules/".$enlacesModel.".php";
          }elseif ($enlacesModel == "index") {
            $moduloMenu = "./views/modules/blank.php";
          }else {
            $moduloMenu = "./views/modules/blank.php";
          }
      return $moduloMenu;
      }
}

?>
