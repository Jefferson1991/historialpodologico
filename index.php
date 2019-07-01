<?php
#PACIENTES
require_once "./controllers/PacientesController.php";
require_once "./models/PacientesModel.php";

#NAVEGACION HTACCCES
require_once "./controllers/navegacionController.php";
require_once "./models/navegacionModels.php";

$plantilla = new PlantillaController();
$plantilla -> menuPlantillaController();

?>

