<?php
require_once 'conexion.php';
class HistorialModel extends ConexionBD{
		static public function ingresoHistoriaModel($variables, $tabla){
			$stmt = ConexionBD::conectar()->prepare("INSERT INTO $tabla(noHistoria,fechaIngresoPaciente,nombrePaciente,edadPaciente,genero,telefono,celular,familiarPaciente,parentezcoPaciente,telFamiliar,motivoCosulta,remite,enfermedadesDatos,obsEnfActual,alergiaPac,alergiaPacTipo,tipMedicamentoPact,otroMedicamento,obsMedPaciente,enferFamiliarPac,anteQuiPacient,patologiaPaciente,otraPatologia,ayudaTenicaPaciente,hiperqueratosis,hiperqueratosisMano,usoDeplantilla,detallePlantilla,separadorInt,detalleSeparador,taloneras,dentalleTaloneras,obsAyudTecniPacientePrenda,espolon,detalleEspolon,fancitis,detallefancitis,hiperqueratosisPie,detallehiperqueratosisPie,Metatarsalgia,detalleMetatarsalgia,piePlano,detallepiePlano,verrugaPlantar,detalleverrugaPlantar,obsZonaPlantar,Adactalina,Anoniquia,Coiloniquia,Exostosis,Onicogrifosis,Onicorrexis,obsGeneralPatologia,llenadoCapilar,llenadoCapilarDetalle,pulsopedio,pulsopedioDetalle,Temperatura,TemperaturaDet,Edemas,EdemasDet,Eritema,EritemaDet,Varices,VaricesDet) 
				VALUES 
			(:noHistoria,:fechaIngresoPaciente,:nombrePaciente,:edadPaciente,:genero,:telefono,:celular,:familiarPaciente,:parentezcoPaciente,:telFamiliar,:motivoCosulta,:remite,:enfermedadesDatos,:obsEnfActual,:alergiaPac,:alergiaPacTipo,:tipMedicamentoPact,:otroMedicamento,:obsMedPaciente,:enferFamiliarPac,:anteQuiPacient,:patologiaPaciente,:otraPatologia,:ayudaTenicaPaciente,:hiperqueratosis,:hiperqueratosisMano,:usoDeplantilla,:detallePlantilla,:separadorInt,:detalleSeparador,:taloneras,:dentalleTaloneras,:obsAyudTecniPacientePrenda,:espolon,:detalleEspolon,:fancitis,:detallefancitis,:hiperqueratosisPie,:detallehiperqueratosisPie,:Metatarsalgia,:detalleMetatarsalgia,:piePlano,:detallepiePlano,:verrugaPlantar,:detalleverrugaPlantar,:obsZonaPlantar,:Adactalina,:Anoniquia,:Coiloniquia,:Exostosis,:Onicogrifosis,:Onicorrexis,:obsGeneralPatologia,:llenadoCapilar,:llenadoCapilarDetalle,:pulsopedio,:pulsopedioDetalle,:Temperatura,:TemperaturaDet,:Edemas,:EdemasDet,:Eritema,:EritemaDet,:Varices,:VaricesDet)");
			$stmt -> bindParam(":noHistoria",$variables["noHistoria"]);
			$stmt -> bindParam(":fechaIngresoPaciente",$variables["fechaIngresoPaciente"]);
			$stmt -> bindParam(":nombrePaciente",$variables["nombrePaciente"]);
			$stmt -> bindParam(":edadPaciente",$variables["edadPaciente"]);
			$stmt -> bindParam(":genero",$variables["genero"]);
			$stmt -> bindParam(":telefono",$variables["telefono"]);
			$stmt -> bindParam(":celular",$variables["celular"]);
			$stmt -> bindParam(":familiarPaciente",$variables["familiarPaciente"]);
			$stmt -> bindParam(":parentezcoPaciente",$variables["parentezcoPaciente"]);
			$stmt -> bindParam(":telFamiliar",$variables["telFamiliar"]);
			$stmt -> bindParam(":motivoCosulta",$variables["motivoCosulta"]);
			$stmt -> bindParam(":remite",$variables["remite"]);
			$stmt -> bindParam(":enfermedadesDatos",$variables["enfermedadesDatos"]);
			$stmt -> bindParam(":obsEnfActual",$variables["obsEnfActual"]);
			$stmt -> bindParam(":alergiaPac",$variables["alergiaPac"]);
			$stmt -> bindParam(":alergiaPacTipo", $variables["alergiaPacTipo"]);
			$stmt -> bindParam(":tipMedicamentoPact", $variables["tipMedicamentoPact"]);
			$stmt -> bindParam(":otroMedicamento", $variables["otroMedicamento"]);
			$stmt -> bindParam(":obsMedPaciente", $variables["obsMedPaciente"]);
			$stmt -> bindParam(":enferFamiliarPac", $variables["enferFamiliarPac"]);
			$stmt -> bindParam(":anteQuiPacient",$variables["anteQuiPacient"]);
			$stmt -> bindParam(":patologiaPaciente", $variables["patologiaPaciente"]);
			$stmt -> bindParam(":otraPatologia",$variables["otraPatologia"]);
			$stmt -> bindParam(":ayudaTenicaPaciente", $variables["ayudaTenicaPaciente"]);
			$stmt -> bindParam(":hiperqueratosis", $variables["hiperqueratosis"]);
			$stmt -> bindParam(":hiperqueratosisMano", $variables["hiperqueratosisMano"]);
			$stmt -> bindParam(":usoDeplantilla", $variables["usoDeplantilla"]);
			$stmt -> bindParam(":detallePlantilla", $variables["detallePlantilla"]);
			$stmt -> bindParam(":separadorInt", $variables["separadorInt"]);
			$stmt -> bindParam(":detalleSeparador", $variables["detalleSeparador"]);
			$stmt -> bindParam(":taloneras", $variables["taloneras"]);
			$stmt -> bindParam(":dentalleTaloneras", $variables["dentalleTaloneras"]);
			$stmt -> bindParam(":obsAyudTecniPacientePrenda", $variables["obsAyudTecniPacientePrenda"]);
		    $stmt -> bindParam(":espolon", $variables["espolon"]);
		    $stmt -> bindParam(":detalleEspolon", $variables["detalleEspolon"]);
		    $stmt -> bindParam(":fancitis", $variables["fancitis"]);
		    $stmt -> bindParam(":detallefancitis", $variables["detallefancitis"]);
		    $stmt -> bindParam(":hiperqueratosisPie", $variables["hiperqueratosisPie"]);
		    $stmt -> bindParam(":detallehiperqueratosisPie", $variables["detallehiperqueratosisPie"]);
		    $stmt -> bindParam(":Metatarsalgia", $variables["Metatarsalgia"]);
		    $stmt -> bindParam(":detalleMetatarsalgia", $variables["detalleMetatarsalgia"]);
		    $stmt -> bindParam(":piePlano", $variables["piePlano"]);
		    $stmt -> bindParam(":detallepiePlano", $variables["detallepiePlano"]);
		    $stmt -> bindParam(":verrugaPlantar", $variables["verrugaPlantar"]);
		    $stmt -> bindParam(":detalleverrugaPlantar", $variables["detalleverrugaPlantar"]);
		    $stmt -> bindParam(":obsZonaPlantar", $variables["obsZonaPlantar"]);
		    $stmt -> bindParam(":Adactalina", $variables["Adactalina"]);
		    $stmt -> bindParam(":Anoniquia", $variables["Anoniquia"]);
		    $stmt -> bindParam(":Coiloniquia",$variables["Coiloniquia"]);
		    $stmt -> bindParam(":Exostosis" ,$variables["Exostosis"]);
		    $stmt -> bindParam(":Onicogrifosis",$variables["Onicogrifosis"]);
		    $stmt -> bindParam(":Onicorrexis",$variables["Onicorrexis"]);
		    $stmt -> bindParam(":obsGeneralPatologia" ,$variables["obsGeneralPatologia"]);
		    $stmt -> bindParam(":llenadoCapilar" , $variables["llenadoCapilar"]);
			$stmt -> bindParam(":llenadoCapilarDetalle" , $variables["llenadoCapilarDetalle"]);
			$stmt -> bindParam(":pulsopedio", $variables["pulsopedio"]);
			$stmt -> bindParam(":pulsopedioDetalle", $variables["pulsopedioDetalle"]);
			$stmt -> bindParam(":Temperatura", $variables["Temperatura"]);
			$stmt -> bindParam(":TemperaturaDet", $variables["TemperaturaDet"]);
			$stmt -> bindParam(":Edemas", $variables["Edemas"]);
			$stmt -> bindParam(":EdemasDet", $variables["EdemasDet"]);
			$stmt -> bindParam(":Eritema", $variables["Eritema"]);
			$stmt -> bindParam(":EritemaDet", $variables["EritemaDet"]);
			$stmt -> bindParam(":Varices", $variables["Varices"]);
			$stmt -> bindParam(":VaricesDet", $variables["VaricesDet"]);
			return $stmt -> execute();
			$stmt -> close();
		}
		static public function consultaHistoriaModel($variables, $tabla){
			$stmt = ConexionBD::conectar()->prepare("SELECT * FROM $tabla WHERE noHistoria = :noHistoria");
			$stmt -> bindParam(":noHistoria",$variables["parametroBus"]);
			if($stmt -> execute()){
				return $stmt -> fetch();
			}else{
				return "error";
			}
			$stmt -> close();
		}
		static public function consultaExistenciaPacienteModel($variables, $tabla){
			$stmt = ConexionBD::conectar()->prepare("SELECT noHistoria FROM $tabla WHERE noHistoria = :noHistoria");
			$stmt -> bindParam(":noHistoria",$variables["noHistoria"]);
			$stmt -> execute();
			return $stmt -> rowCount();
			$stmt -> close();
		}
		static public function consultaPacientesGeneralModel($tabla){
			$stmt = ConexionBD::conectar()->prepare("SELECT * FROM $tabla");
			$stmt -> execute();
			return $stmt -> fetchAll();
			$stmt -> close();
		}
		static public function consultaPacientesGeneralModelA($datosModel,$tabla){
           $statement = ConexionBD::conectar()->prepare("SELECT * FROM $tabla WHERE idPaciente =:idPaciente");
           $statement->bindParam(":idPaciente", $datosModel, PDO::PARAM_INT);
      	   $statement->execute();
      	return $statement->fetch();
      	$statement->close();
        }
}
?>
