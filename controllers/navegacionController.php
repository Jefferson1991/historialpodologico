<?php
class PlantillaController{
  #llamo al viewMenu
              static public function menuPlantillaController(){
                        include 'views/templePodologiaGeneral.php';
                }
  #llamada de menus desde el controlador
               static public function enlacePaginaController(){
                  if(isset($_GET["action"])){
                      $enlacesController = $_GET["action"];
                  }else {
                    $enlacesController ="index";
                  }
                  $respuesta = EnlacesPaginas::enlacesPaginasModels($enlacesController);
                  include $respuesta;
                }

  
}


 ?>
