<?php
include "navegacionPodo.php";
?>
<div class="card container-fluid" style=" background-color: white; 
        		-webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
				-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
				box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);">
	<div class="row">
		<div class="col-md-12"><hr></div>
			<div class="col-md-6">
					<div class="input-group">
						<input  class="form-control" type="text" name="parametroBus" id="parametroBus" placeholder="Ingrese el parametro de busqueda" value="1722576202">
						<span class="input-group-btn">
						<button class="btn btn-info" type="button" id="btnConsultar">Buscar paciente</button>
						</span>
					</div>	
			</div>
	</div>
	<hr>	
				<?php
				 $consultaIndividual = new HistorialController();
				 $consultaIndividual -> consultaHistoriaController();
				?>
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header card bg-success text-white">Datos personales</div>
								<div class="card-body">
										<div class="row">											
											<div class="col-sm-2">
											Fecha registro:
											<input type="text"class="form-control" name="fechaIngresoPacienteC" id="fechaIngresoPacienteC"> disabled
											</div>
											<div class="col-sm-2">
											No. Historia:
											<input type="text"class="form-control" name="noHistoria" id="noHistoria" disabled>
											</div>
											<div class="col-sm-5">
											Nombre completo del paciente:
											<input type="text"class="form-control" name="nombrePaciente" id="nombrePaciente" disabled>
											</div>
											<div class="col-sm-1">
											Edad:
											<input type="text"class="form-control" name="edadPaciente" id="edadPaciente" disabled>
											</div>
											<div class="col-sm-2">
											Genero:
											<input type="text"class="form-control" name="genero" id="genero" disabled>
											</div>
											<div class="col-sm-2">
											Tel. convencional:
											<input type="text"class="form-control" name="telefono" id="telefono" disabled>
											</div>
											<div class="col-sm-2">
											Tel. Celular:
											<input type="text"class="form-control" name="celular" id="celular" disabled>
											</div>
											<div class="col-sm-2">
											Familiar :
											<input type="text"class="form-control" name="familiarPaciente" id="familiarPaciente" disabled> 
											</div>
											<div class="col-sm-2">
											Parentezco:
											<input type="text"class="form-control" name="parentezcoPaciente" id="parentezcoPaciente" disabled>
											</div>
											<div class="col-sm-2">
											Telefono familiar:
											<input type="text"class="form-control" name="telFamiliar" id="telFamiliar" disabled>
											</div>
										</div>
								</div>
							<!--<div class="card-footer ard bg-dark text-white">Campos ingresados por:</div>-->
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header card bg-info text-white">1. MOTIVO DE LA CONSULTA:</div>
								<div class="card-body">
										<div class="row">											
											<div class="col-sm-6">
											Motivo primera consulta
											<input type="text"class="form-control" name="motivoCosulta" id="motivoCosulta" disabled>
											</div>
											<div class="col-sm-6">
											¿Quién remite al consultorio ?
											<input type="text"class="form-control" name="remite" id="remite" disabled>
											</div>
										</div>
								</div>
							<!--<div class="card-footer ard bg-dark text-white">Campos ingresados por:</div>-->
						</div>
					</div>
					<div class="col-md-6">
						<div class="card">
							<div class="card-header card bg-warning text-black">2. ENFERMEDAD O PROBLEMA ACTUAL:</div>
								<div class="card-body">
										<div class="row">											
											<div class="col-sm-6">
											Enfermedades
											<input type="text"class="form-control" name="enfermedadesDatos" id="enfermedadesDatos" disabled>
											</div>
											<div class="col-sm-6">
											Observacion enfermedades
											<input type="text"class="form-control" name="obsEnfActual" id="obsEnfActual" disabled>
											</div>
										</div>
								</div>
							<!--<div class="card-footer ard bg-dark text-white">Campos ingresados por:</div>-->
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header card bg-dark text-white">3. ANTECEDENTES PERSONALES Y FAMILIARES:</div>
								<div class="card-body">
										<div class="row">											
											<div class="col-sm-6">
											¿Tiene alguna alergia?
											<input type="text"class="form-control" name="alergiaPac" id="alergiaPac" disabled>
											</div>
											<div class="col-sm-6">
											¿Cual?
											<input type="text"class="form-control" name="alergiaPacTipo" id="alergiaPacTipo" disabled>
											</div>
											<div class="col-sm-6">
											¿Que tipo de medicamento toma ?
											<input type="text"class="form-control" name="tipMedicamentoPact" id="tipMedicamentoPact" disabled>
											</div>
											<div class="col-sm-6">
											¿Cual?
											<input type="text"class="form-control" name="otroMedicamento" id="otroMedicamento" disabled>
											</div>
											<div class="col-sm-6">
											¿Toma algun medicamento o anticoagulante?
											<input type="text"class="form-control" name="obsMedPaciente" id="obsMedPaciente" disabled>
											</div>
											<div class="col-sm-6">
											¿Antecedentes familiares de enfermedades?
											<input type="text"class="form-control" name="enferFamiliarPac" id="enferFamiliarPac" disabled>
											</div>
											<div class="col-sm-6">
											¿Tiene antecedentes quirurgicos?
											<input type="text"class="form-control" name="anteQuiPacient" id="anteQuiPacient" disabled>
											</div>
										</div>
								</div>
							<!--<div class="card-footer ard bg-dark text-white">Campos ingresados por:</div>-->
						</div>
					</div>
					
					<div class="col-md-12">
						<div class="card">
							<div class="card-header card bg-info text-white">4. UBICACIÓN DE PATOLOGIAS:</div>
								<div class="card-body">
										<div class="row">											
											<div class="col-sm-6">
											Patologia
											<input type="text"class="form-control" name="patologiaPaciente" id="patologiaPaciente" disabled>
											</div>
											<div class="col-sm-6">
											Otras patologias
											<input type="text"class="form-control" name="otraPatologia" id="otraPatologia" disabled>
											</div>
											<div class="col-sm-6">
											 Ayuda tecnica
											<input type="text"class="form-control" name="ayudaTenicaPaciente" id="ayudaTenicaPaciente" disabled>
											</div>
											<div class="col-sm-6">
											Manos:
											<input type="text"class="form-control" name="hiperqueratosis" id="hiperqueratosis"  disabled>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												USO DE:
												<hr>
												<div class="col-sm-12">
												<input type="text"class="form-control" name="usoDeplantilla" id="usoDeplantilla"  disabled>
												</div>
												<div class="col-sm-12">
												<input type="text"class="form-control" name="separadorInt" id="separadorInt"  disabled>
												</div>
												<div class="col-sm-12">
												<input type="text"class="form-control" name="taloneras" id="taloneras"  disabled>
												</div>
												<div class="col-sm-12">
												<input type="text"class="form-control" name="obsAyudTecniPacientePrenda" id="obsAyudTecniPacientePrenda"  disabled>
												</div>
											</div>
											<div class="col-md-6">
											ZONA PLANTAR:
											<hr>
											<div class="col-md-12">
											<input type="text"class="form-control" name="espolon" id="espolon"  disabled>
											</div>
											<div class="col-sm-12">
											<input type="text"class="form-control" name="fancitis" id="fancitis"  disabled>
											</div>
											<div class="col-sm-12">
											<input type="text"class="form-control" name="hiperqueratosisPie" id="hiperqueratosisPie"  disabled>
											</div>
											<div class="col-sm-12">
											<input type="text"class="form-control" name="Metatarsalgia" id="Metatarsalgia"  disabled>
											</div>
											<div class="col-sm-12">
											<input type="text"class="form-control" name="piePlano" id="piePlano"  disabled>
											</div>
											<div class="col-sm-12">
											<input type="text"class="form-control" name="verrugaPlantar" id="verrugaPlantar"  disabled>
											</div>
											<div class="col-sm-12">
											<input type="text"class="form-control" name="obsZonaPlantar" id="obsZonaPlantar"  disabled>
											</div>
											</div>
											<div class="col-md-6">
											ORTEJOS:
											<hr>
											<div class="col-sm-12">
											<input type="text"class="form-control" name="Adactalina" id="Adactalina"  disabled>
											</div>
											<div class="col-sm-12">
											<input type="text"class="form-control" name="Anoniquia" id="Anoniquia"  disabled>
											</div>
											<div class="col-sm-12">
											<input type="text"class="form-control" name="Coiloniquia" id="Coiloniquia"  disabled>
											</div>
											<div class="col-sm-12">
											<input type="text"class="form-control" name="Exostosis" id="Exostosis"  disabled>
											</div>
											<div class="col-sm-12">
											<input type="text"class="form-control" name="Onicogrifosis" id="Onicogrifosis"  disabled>
											</div>
											<div class="col-sm-12">
											<input type="text"class="form-control" name="Onicorrexis" id="Onicorrexis"  disabled>
											</div>
											<div class="col-sm-12">
											<input type="text"class="form-control" name="obsGeneralPatologia" id="obsGeneralPatologia"  disabled>
											</div>
											
											</div>
											
									</div>
	
								</div>
							<!--<div class="card-footer ard bg-dark text-white">Campos ingresados por:</div>-->
						</div>
					</div>
				</div>
				<div class="row">				
					<div class="col-md-12">
						<div class="card">
							<div class="card-header card bg-primary text-white">5. PIE DIABETICO:</div>
								<div class="card-body">
										<div class="row">
											<div class="col-md-12">Exámen Vascular<hr></div>											
											<div class="col-sm-2">
											<p id="llenadoCapilar" name="llenadoCapilar"></p>
											<input type="text"class="form-control" name="llenadoCapilarDetalle" id="llenadoCapilarDetalle" disabled>
											</div>
											<div class="col-sm-2">
											<p id="pulsopedio" name="pulsopedio"></p>
											<input type="text"class="form-control" name="pulsopedioDetalle" id="pulsopedioDetalle" disabled>
											</div>
											<div class="col-sm-2">
											<p id="Temperatura" name="Temperatura"></p>
											<input type="text"class="form-control" name="TemperaturaDet" id="TemperaturaDet" disabled>
											</div>
											<div class="col-sm-2">
											<p id="Edemas" name="Edemas"></p>
											<input type="text"class="form-control" name="EdemasDet" id="EdemasDet" disabled>
											</div>
											<div class="col-sm-2">
											<p id="Eritema" name="Eritema"></p>
											<input type="text"class="form-control" name="EritemaDet" id="EritemaDet" disabled>
											</div>
											<div class="col-sm-2">
											<p id="Varices" name="Varices"></p>
											<input type="text"class="form-control" name="VaricesDet" id="VaricesDet" disabled>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12"><hr>PIE:<hr></div>											
											<div class="col-sm-2">
											<p id="amputacion" name="amputacion"></p>
											<input type="text"class="form-control" name="amputaciondet" id="amputaciondet" disabled>
											</div>
											<div class="col-sm-2">
											<p id="dedosDeformados" name="dedosDeformados"></p>
											<input type="text"class="form-control" name="dedosDeformadosDet" id="dedosDeformadosDet" disabled>
											</div>											<div class="col-sm-2">
											<p id="Helomasblandos" name="Helomasblandos"></p>
											<input type="text"class="form-control" name="HelomasblandosDet" id="HelomasblandosDet" disabled>
											</div>											<div class="col-sm-2">
											<p id="Helomasduros" name="Helomasduros"></p>
											<input type="text"class="form-control" name="HelomasdurosDet" id="HelomasdurosDet" disabled>
											</div>											<div class="col-sm-2">
											<p id="Piedeformado" name="Piedeformado"></p>
											<input type="text"class="form-control" name="PiedeformadoDet" id="PiedeformadoDet" disabled>
											</div>											<div class="col-sm-2">
											<p id="Ulcera" name="Ulcera"></p>
											<input type="text"class="form-control" name="UlceraDet" id="UlceraDet" disabled>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12"><hr>CUIDADO DEL PIE:<hr></div>
												<div class="col-sm-2">
												<p id="vacunaTetanos" name="vacunaTetanos"></p>
												<input type="text"class="form-control" name="vacunaTetanosDet" id="vacunaTetanosDet" disabled>
												</div>
												<div class="col-sm-2">
												<p id="calzadoApropiado" name="calzadoApropiado"></p>
												<input type="text"class="form-control" name="calzadoApropiadoDet" id="calzadoApropiadoDet" disabled>
												</div>
												<div class="col-sm-2">
												<p id="medidasApropiadas" name="medidasApropiadas"></p>
												<input type="text"class="form-control" name="medidasApropiadasDet" id="medidasApropiadasDet" disabled>
												</div>
												<div class="col-sm-2">
												<p id="corteUnasAdecuado" name="corteUnasAdecuado"></p>
												<input type="text"class="form-control" name="corteUnasAdecuadoDet" id="corteUnasAdecuadoDet" disabled>
												</div>
												<div class="col-sm-2">
												<p id="higinePie" name="higinePie"></p>
												<input type="text"class="form-control" name="higinePieDet" id="higinePieDet" disabled>
												</div>
												<div class="col-sm-2">
												<p id="caminaDescalzo" name="caminaDescalzo"></p>
												<input type="text"class="form-control" name="caminaDescalzoDet" id="caminaDescalzoDet" disabled>
												</div>
										</div>
								</div>
							<!--<div class="card-footer ard bg-dark text-white">Campos ingresados por:</div>-->
						</div>
					</div>
				</div>
				<br><br><br><br>
</div>
