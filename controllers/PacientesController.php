<?php
class HistorialController{
	  public function ingresoHistorialController(){
			if (isset($_POST["noHistoria"]) && isset($_POST)) {
				$namePost = array("fechaIngresoPaciente" => $_POST["fechaIngresoPaciente"],
								  "noHistoria"=>$_POST["noHistoria"],
								  "nombrePaciente" =>$_POST["nombrePaciente"],
								  "edadPaciente" =>$_POST["edadPaciente"],
								  "genero" =>$_POST["genero"],
								  "telefono" =>$_POST["telefono"],
								  "celular" =>$_POST["celular"],
								  "familiarPaciente" =>$_POST["familiarPaciente"],
								  "parentezcoPaciente" =>$_POST["parentezcoPaciente"],
								  "telFamiliar" =>$_POST["telFamiliar"],
								  "motivoCosulta" => $_POST["motivoCosulta"],
								  "remite" => $_POST["remite"],
								  "enfermedadesDatos" => $_POST["enfermedadesDatos"],
								  "obsEnfActual" => $_POST["obsEnfActual"],
								  "alergiaPac" => $_POST["alergiaPac"],
								  "alergiaPacTipo" => $_POST["alergiaPacTipo"],
								  "tipMedicamentoPact" => $_POST["tipMedicamentoPact"],
								  "otroMedicamento"=>$_POST["otroMedicamento"],
								  "obsMedPaciente"=>$_POST["obsMedPaciente"],
								  "enferFamiliarPac"=>$_POST["enferFamiliarPac"],
								  "anteQuiPacient"=>$_POST["anteQuiPacient"],
								  "patologiaPaciente"=>$_POST["patologiaPaciente"],
								  "otraPatologia" => $_POST["otraPatologia"],
								  "ayudaTenicaPaciente"=>$_POST["ayudaTenicaPaciente"],
								  "hiperqueratosis"=>$_POST["hiperqueratosis"],
								  "hiperqueratosisMano"=>$_POST["hiperqueratosisMano"],
								  "usoDeplantilla" => $_POST["usoDeplantilla"],
								  "detallePlantilla" => $_POST["detallePlantilla"],
								  "separadorInt" => $_POST["separadorInt"],
								  "detalleSeparador" => $_POST["detalleSeparador"],
								  "taloneras" => $_POST["taloneras"],
								  "dentalleTaloneras" => $_POST["dentalleTaloneras"],
								  "obsAyudTecniPacientePrenda" => $_POST["obsAyudTecniPacientePrenda"],
								  "espolon" => $_POST["espolon"],
								  "detalleEspolon" => $_POST["detalleEspolon"],
								  "fancitis" => $_POST["fancitis"],
								  "detallefancitis" => $_POST["detallefancitis"],
								  "hiperqueratosisPie" => $_POST["hiperqueratosisPie"],
								  "detallehiperqueratosisPie" => $_POST["detallehiperqueratosisPie"],
								  "Metatarsalgia" => $_POST["Metatarsalgia"],
								  "detalleMetatarsalgia" => $_POST["detalleMetatarsalgia"],
								  "piePlano" => $_POST["piePlano"],
								  "detallepiePlano" => $_POST["detallepiePlano"],
								  "verrugaPlantar" => $_POST["verrugaPlantar"],
								  "detalleverrugaPlantar" => $_POST["detalleverrugaPlantar"],
								  "obsZonaPlantar" => $_POST["obsZonaPlantar"],
								  "Adactalina" => $_POST["Adactalina"],
								  "Anoniquia" => $_POST["Anoniquia"],
								  "Coiloniquia" => $_POST["Coiloniquia"],
								  "Exostosis" => $_POST["Exostosis"],
								  "Onicogrifosis" => $_POST["Onicogrifosis"],
								  "Onicorrexis" => $_POST["Onicorrexis"],
								  "obsGeneralPatologia" => $_POST["obsGeneralPatologia"],
								  "llenadoCapilar" => $_POST["llenadoCapilar"],
								  "llenadoCapilarDetalle" => $_POST["llenadoCapilarDetalle"],
								  "pulsopedio" => $_POST["pulsopedio"],
								  "pulsopedioDetalle" => $_POST["pulsopedioDetalle"],
								  "Temperatura" => $_POST["Temperatura"],
								  "TemperaturaDet" => $_POST["TemperaturaDet"],
								  "Edemas" => $_POST["Edemas"],
								  "EdemasDet" => $_POST["EdemasDet"],
								  "Eritema" => $_POST["Eritema"],
								  "EritemaDet" => $_POST["EritemaDet"],
								  "Varices" => $_POST["Varices"],
								  "VaricesDet" => $_POST["VaricesDet"],
								  "amputacion" => $_POST["amputacion"],
								  "amputaciondet" => $_POST["amputaciondet"],
								  "dedosDeformados" => $_POST["dedosDeformados"],
								  "dedosDeformadosDet" => $_POST["dedosDeformadosDet"],
								  "Helomasblandos" => $_POST["Helomasblandos"],
								  "HelomasblandosDet" => $_POST["HelomasblandosDet"],
								  "Helomasduros" => $_POST["Helomasduros"],
								  "HelomasdurosDet" => $_POST["HelomasdurosDet"],
								  "Piedeformado" => $_POST["Piedeformado"],
								  "PiedeformadoDet" => $_POST["PiedeformadoDet"],
								  "Ulcera" => $_POST["Ulcera"],
								  "UlceraDet" => $_POST["UlceraDet"],
								  "vacunaTetanos" => $_POST["vacunaTetanos"],
								  "vacunaTetanosDet" => $_POST["vacunaTetanosDet"],
								  "calzadoApropiado" => $_POST["calzadoApropiado"],
								  "calzadoApropiadoDet" => $_POST["calzadoApropiadoDet"],
								  "medidasApropiadas" => $_POST["medidasApropiadas"],
								  "medidasApropiadasDet" => $_POST["medidasApropiadasDet"],
								  "corteUnasAdecuado" => $_POST["corteUnasAdecuado"],
								  "corteUnasAdecuadoDet" => $_POST["corteUnasAdecuadoDet"],
								  "higinePie" => $_POST["higinePie"],
								  "higinePieDet" => $_POST["higinePieDet"],
								  "caminaDescalzo" => $_POST["caminaDescalzo"],
								  "caminaDescalzoDet" => $_POST["caminaDescalzoDet"],
								  "tratamientoDiabetico" => $_POST["tratamientoDiabetico"]);
				$datoExistente = array("noHistoria"=>$_POST["noHistoria"]);
				$existenciaPaciente = HistorialModel::consultaExistenciaPacienteModel($datoExistente,"historialpaciente");
				if($existenciaPaciente > 0){
					echo 1;
				}else{
					echo 0;
					HistorialModel::ingresoHistoriaModel($namePost,"historialpaciente");
				}
			}
		}
		/*Busqueda en campo de texto devuelve ajax y despliega campo por campo */
		public function consultaHistoriaController(){
			if (isset($_POST["parametroBus"])) {
				$parametroBus = array("parametroBus" => $_POST["parametroBus"]);
				$postName = HistorialModel::consultaHistoriaModel($parametroBus,"historialpaciente");
				echo json_encode($postName);
				}
			}
			static public function ctrHistoriaController($parametroNuevo){
				    $tbl= "auxcitasconsiguientes";
					$postVaribles = HistorialModel::mdlHistoriaModel($parametroNuevo,$tbl);
					return($postVaribles);
					
				}
		public function consultaPacientesGeneralController()
			{
			   $consultaPacienteTable = HistorialModel::consultaPacientesGeneralModel("historialpaciente");
			   if(!$consultaPacienteTable){
			   	die("Error");
			   }else{
			   foreach($consultaPacienteTable as $value => $resultado) {
			   			echo
			   			"<tr>
				        <td style='width: 10px;'>".$resultado['idPaciente']."</td>
				        <td >".$resultado["noHistoria"]."</th>
				        <th><a href='index.php?action=actualizacionPaciente&idPaciente=".$resultado['idPaciente']." '>
				        <button type='button' name='modalModificar' class='btn btn-danger'>Modificar</button>
				      </tr>";
			   		}
			   }
		}
		public function consultaPacientesGeneralControllerA(){
						            if(isset($_GET["idPaciente"])){
						              $datosController = $_GET["idPaciente"];
						              $respuesta = HistorialModel::consultaPacientesGeneralModelA($datosController,"historialpaciente");
						               echo '<div class="row">
						                 <div class="col-md-12">
						                 <hr>
						                   <div class="row">
						                     <div class="col-md-4 col-sm-offset-3 ">
						                       <input type="text" class="form-control" value="'.$respuesta['idPaciente'].'" name="cmp_id_actualizar" value="">
						                       <input type="text" class="form-control" value="'.$respuesta['nombrePaciente'].'" name="cmp_id_actualizar" value="">
						                     </div>
						                     <a href="templeReportesPaciente">
											<button type="button" name="modalModificar" class="btn btn-danger btn-sm"></button>
						                 </div>
						               </div>';
						            }else {
						                echo "<blockquote >
						                  NINGUN REGISTRO...!
						                </blockquote>";
						            }
								  }
		static public function ctrIngresoCita($variables){
			if(isset($_POST)){
				$tabla = "auxcitasconsiguientes";
				$ingresoCita = HistorialModel::mdlIngresoCita($tabla,$variables);
				return $ingresoCita;
			}
		}
	}

