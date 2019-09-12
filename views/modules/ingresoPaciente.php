<?php
include "navegacionPodo.php";
?>
<form action="">
	 <div class="card container-fluid" style=" background-color: white;
        		-webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
				-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
				box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);">
          		<div class="row">
          			<div class="col-xs-12"><hr></div>
          		</div>
				<div class="row">
					<div class="col-md-12"><pre>DATOS GENERALES DEL PACIENTE:</pre></div>
					<div class="col-md-2">
						<pre class="blockquote-footer">Fecha de ingreso</pre>
						<input class="form-control" type="text" name="fechaIngresoPaciente" id="fechaIngresoPaciente">
				    </div>
				    <div class="col-md-4">
						<pre class="blockquote-footer">Numero de historia</pre>
						    <input class="form-control" type="text" name="noHistoria" id="noHistoria">
				    </div>
					<div class="col-md-6">
						<pre class="blockquote-footer">Nombres del paciente</pre>
				            <input class="form-control" type="text" name="nombrePaciente" id="nombrePaciente">
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<pre class="blockquote-footer">Edad</pre>
					        <input class="form-control" type="number" name="edadPaciente" id="edadPaciente">
					</div>
					<div class="col-md-2">
						<pre class="blockquote-footer">Genero</pre>
					        <select name="genero" id="genero" class="form-control">
					          	<option value="Masculino">MASCULINO</option>
					           	<option value="Femenino">FEMENINO</option>
					            <option value="Femenino">OTROS</option>
					        </select>
					</div>
				    <div class="col-md-4">
							<pre class="blockquote-footer">Telefono</pre>
					          <input type="tel" class="form-control" name="telefono" id="telefono">
					</div>
					<div class="col-md-4">
					     	<pre class="blockquote-footer">Celular</pre>
						    <input type="tel" class="form-control" name="celular" id="celular">
					</div>
					<div class="col-md-4">
						<pre class="blockquote-footer">En caso necesario llamar:</pre>
						<input class="form-control" type="text" placeholder="Ingrese el nombre familiar" name="familiarPaciente" id="familiarPaciente">
					</div>
					<div class="col-md-4">
						<pre class="blockquote-footer">Parentezco:</pre>
						<select name="parentezcoPaciente" id="parentezcoPaciente" class="form-control">
							<option value="">Madre</option>
							<option value="">Padre</option>
							<option value="">Conyugue</option>
							<option value="">Hijo/a</option>
							<option value="">Otros</option>
						</select>
					</div>
					<div class="col-md-4">
						<pre class="blockquote-footer">Telefono:</pre>
						<input class="form-control" type="text" placeholder="Ingrese el numero de contacto del familiar" name="telFamiliar" id="telFamiliar">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12"><hr><pre>1. MOTIVO DE LA CONSULTA:</pre></div>
				    <div class="col-md-12">
					       <pre class="blockquote-footer">Motivo de la consulta</pre>
			               <textarea class="form-control" name="motivoCosulta" id="motivoCosulta" cols="10" rows="2"></textarea>
			               <br>
					</div>
					<div class="col-md-2">
					    <pre class="blockquote-footer">Remite:</pre>
			        </div>
			        <div class="col-md-6">
			            <input class="form-control" type="text" name="remite" id="remite">
			        	<br>
			        </div>
			        <div class="col-md-12">
			        	<hr>
			        </div>
				</div>
				<div class="row" >
					<div class="col-md-12"><pre>2. ENFERMEDAD O PROBLEMA ACTUAL:</pre></div>
					<div class="col-md-6 form-check">
						<pre class="blockquote-footer">Escoja las enfermedades actuales</pre>
						<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input enfermedadescheck" value="ALSHEIMER" />
							ALZHEIMER
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input enfermedadescheck" value="ENFERMEDAD CARDIACA" />
							ENFERMEDAD CARDIACA
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input enfermedadescheck" value="ENFERMEDAD CIRCULATORIAS">
							ENFERMEDAD CIRCULATORIAS
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input enfermedadescheck" value="ENFERMEDAD DERMATOLOGICA">
							ENFERMEDAD DERMATOLOGICA
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input enfermedadescheck" value="VIH-SIDA / NEOPLASIA">
							VIH-SIDA / NEOPLASIA
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input enfermedadescheck" value="ENFERMEDAD OSTEO ARTICULARES">
							ENFERMEDAD OSTEO ARTICULARES
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input enfermedadescheck" value="ENFERMEDAD RESPIRATORIAS">
							ENFERMEDAD RESPIRATORIAS
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input enfermedadescheck" value="PARKINSON">
							PARKINSON
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input enfermedadescheck" value="OTROS">
							OTROS
							</label>
						</div>
						<div>
							<pre class="blockquote-footer"><input type="hidden" name="enfermedadesDatos" id="enfermedadesDatos" class="form-control"></pre>
						</div>
					</div>
					<div class="col-md-6">
						<pre class="blockquote-footer">OBSERVACIONES</pre>
						<textarea class="form-control" name="obsEnfActual" id="obsEnfActual" cols="10" rows="8"></textarea>
					</div>
				</div>
			   <div class="row">
			   	  	<div class="col-md-12"><pre>3. ANTECEDENTES PERSONALES Y FAMILIARES:</pre></div>
				    <div class="col-md-3">
						<pre class="blockquote-footer">¿Tiene alguna alergia?</pre>
						<select name="alergiaPac" id="alergiaPac" class="form-control">
							<option value="Si">Si</option>
							<option value="No">No</option>
						</select>
					</div>
					<div class="col-md-3">
						<pre class="blockquote-footer">¿Cual?</pre>
						<input type="text" class="form-control" name="alergiaPacTipo" id="alergiaPacTipo">
					</div>
					<div class="col-md-3">
						<pre class="blockquote-footer">¿Que tipo de medicamento toma ?</pre>
						<select class="form-control" name="tipMedicamentoPact" id="tipMedicamentoPact">
								<option value="Anastesico">Anastesico</option>
								<option value="Antibiotico">Antibiotico</option>
								<option value="Otros">Otros</option>
								<option value="Ninguno">Ninguno</option>
						</select>
				    </div>
				    <div class="col-md-3">
						<pre class="blockquote-footer">¿Cual?</pre>
						<input type="text" class="form-control"  name="otroMedicamento" id="otroMedicamento">
					</div>
				    <div class="col-md-4">
						<pre class="blockquote-footer">¿Toma algun medicamento o anticoagulante?</pre>
						<textarea class="form-control" name="obsMedPaciente" id="obsMedPaciente" cols="10" rows="3" placeholder="Describa cual es el medicamento que toma de manera general, en caso del paciente"></textarea>
						</div>
						<div class="col-md-4"><pre class="blockquote-footer">¿Antecedentes familiares de enfermedades?</pre>
						<textarea class="form-control" name="enferFamiliarPac" id="enferFamiliarPac" cols="10" rows="3" placeholder="Describa cuales son los antecendente sobre las enfermedades de sus familiares en caso del paciente"></textarea>
						</div>
						<div class="col-md-4">
						<pre class="blockquote-footer">¿Tiene antecedentes quirurgicos?</pre>
						<textarea class="form-control" name="anteQuiPacient" id="anteQuiPacient" cols="10" rows="3" placeholder="Describa cuales son los antecedentes quirurgicos del paciente"></textarea>
						</div>
			  </div>
			  <div class="row">
			  		<div class="col-md-12"><pre>4. UBICACIÓN DE PATOLOGIAS:</pre><hr></div>
					<div class="col-md-4">
						<pre class="blockquote-footer">Escoja la patologia</pre>
						<select class="form-control" name="patologiaPaciente" id="patologiaPaciente">
							<option value="Bromhidrosis">Bromhidrosis</option>
							<option value="Dermatitis">Dermatitis</option>
							<option value="Resequedad">Resequedad</option>
							<option value="Otros">Otros</option>
						</select>
						<pre class="blockquote-footer">¿Cual?</pre>
						<input type="text" class="form-control" name="otraPatologia" id="otraPatologia">
					</div>
					<div class="col-md-4">
						<pre >AYUDAS TECNICAS:</pre>
						<select class="form-control" name="ayudaTenicaPaciente" id="ayudaTenicaPaciente">
							<option value="Silla de ruedas">Silla de ruedas</option>
							<option value="Andador">Andador</option>
							<option value="Muletas">Muletas</option>
							<option value="Baston">Baston</option>
							<option value="Ninguna">Ninguna</option>
						</select>
					</div>

					<div class="col-md-4">
						<pre >MANOS:</pre>
						<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input" value="Hiperqueratosis" name="hiperqueratosis" id="hiperqueratosis">
							Hiperqueratosis
							</label>
						</div>
						<select class="form-control" name="hiperqueratosisMano" id="hiperqueratosisMano">
							<option value="Derecha">Derecha</option>
							<option value="Izquierda">Izquierda</option>
							<option value="Ambas">Ambas</option>
							<option value="Ninguna">Ninguna</option>
						</select>
					</div>
					<div class="col-md-12">
						<hr>
					</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<pre>USO DE:</pre>
				</div>
				  <div class="col-md-4">

						<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input" value="Plantilla" name="usoDeplantilla" id="usoDeplantilla">
							Plantilla
							</label>
							<select name="detallePlantilla" id="detallePlantilla" class="form-control" style="width: 120px;">
								<option value="Derecha">Derecha</option>
								<option value="Izquierda">Izquierda</option>
								<option value="Ambas">Ambas</option>
								<option value="Ninguna">Ninguna</option>
							</select>
						</div>
				  </div>
				  <div class="col-md-4">
						<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input" value="Separador Int" name="separadorInt" id="separadorInt">
							Separador Int
							</label>
							<select name="detalleSeparador" id="detalleSeparador" class="form-control" style="width: 120px;">
							<option value="Derecha">Derecha</option>
							<option value="Izquierda">Izquierda</option>
							<option value="Ambas">Ambas</option>
							<option value="Ninguna">Ninguna</option>
							</select>
						</div>
				 </div>
				 <div class="col-md-4">
						<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input" value="Taloneras" name="taloneras" id="taloneras">
							Taloneras
							</label>
							<select name="dentalleTaloneras" id="dentalleTaloneras" class="form-control" style="width: 120px;">
							<option value="Derecha">Derecha</option>
							<option value="Izquierda">Izquierda</option>
							<option value="Ambas">Ambas</option>
							<option value="Ninguna">Ninguna</option>
							</select>
						</div>
				 </div>
				 <div class="col-md-12">
						<br>
						<input class="form-control" placeholder="Ingrese la observacion" type="text" name="obsAyudTecniPacientePrenda" id="obsAyudTecniPacientePrenda">
				</div>
				 <div class="col-md-12"><hr class="text-danger"></div>
		   </div>
			<div class="row">
					<div class="col-md-12"><pre>ZONA PLANTAR:</pre></div>
					<div class="col-md-3">
							<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input" value="Espolon C." name="espolon" id="espolon">
							Espolon C.
							</label>
							<select name="detalleEspolon" id="detalleEspolon" class="form-control" style="width: 120px;">
							<option value="Derecha">Derecha</option>
							<option value="Izquierda">Izquierda</option>
							<option value="Ambas">Ambas</option>
							<option value="Ninguna">Ninguna</option>
							</select>
							</div>
					</div>
					<div class="col-md-3">
						<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input" value="Fancitis Plantar" name="fancitis" id="fancitis">
							 Fancitis Plantar
							</label>
							<select name="detallefancitis" id="detallefancitis" class="form-control" style="width: 120px;">
							<option value="Derecha">Derecha</option>
							<option value="Izquierda">Izquierda</option>
							<option value="Ambas">Ambas</option>
							<option value="Ninguna">Ninguna</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
							<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input" value="Hiperqueratosis" name="hiperqueratosisPie" id="hiperqueratosisPie">
							Hiperqueratosis
							</label>
							<select name="detallehiperqueratosisPie" id="detallehiperqueratosisPie" class="form-control" style="width: 120px;">
							<option value="Derecha">Derecha</option>
							<option value="Izquierda">Izquierda</option>
							<option value="Ambas">Ambas</option>
							<option value="Ninguna">Ninguna</option>
							</select>
							</div>
					</div>
					<div class="col-md-3">
						<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input" value="Metatarsalgia" name="Metatarsalgia" id="Metatarsalgia">
							Metatarsalgia
							</label>
							<select name="detalleMetatarsalgia" id="detalleMetatarsalgia" class="form-control" style="width: 120px;">
								<option value="Izquierda">Izquierda</option>
								<option value="Izquierda">Derecha</option>
								<option value="Izquierda">Ambas</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input" value="Pie plano" name="piePlano" id="piePlano">
							Pie plano
							</label>
							<select name="detallepiePlano" id="detallepiePlano" class="form-control" style="width: 120px;">
							<option value="Derecha">Derecha</option>
							<option value="Izquierda">Izquierda</option>
							<option value="Ambas">Ambas</option>
							<option value="Ninguna">Ninguna</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input" value="Verruga plantar" name="verrugaPlantar" id="verrugaPlantar">
							 Verruga plantar
							</label>
							<select name="detalleverrugaPlantar" id="detalleverrugaPlantar" class="form-control" style="width: 120px;">
							<option value="Derecha">Derecha</option>
							<option value="Izquierda">Izquierda</option>
							<option value="Ambas">Ambas</option>
							<option value="Ninguna">Ninguna</option>
							</select>
						</div>
					</div>
					<div class="col-md-12">
						<hr class="text-danger">
						<input class="form-control" placeholder="Ingrese la observacion" type="text" name="obsZonaPlantar" id="obsZonaPlantar">
						<hr>
					</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<pre>ORTEJOS:</pre>
				</div>
					<div class="col-md-2">
						<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input Adactalinacheck" value="Adactalina">
							Adactalina
							</label>
							<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input Adactalinacheck" value="1">
							1
							</label>
							</div>
							<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input Adactalinacheck" value="2">
							2
							</label>
							</div>
							<div class="form-check">

							<label class="form-check-label">
							<input type="checkbox" class="form-check-input Adactalinacheck" value="3">
							3
							</label>
							</div>
							<div class="form-check">

							<label class="form-check-label">
							<input type="checkbox" class="form-check-input Adactalinacheck" value="4">
							4
							</label>
							</div>
							<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input Adactalinacheck" value="5">
							5
							</label>
							</div>
							<input type="hidden" class="form-control" name="Adactalina" id="Adactalina">
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input Anoniquiacheck" value="Anoniquia">
							Anoniquia
							</label>
							<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input Anoniquiacheck" value="1">
							1
							</label>
							</div>
							<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input Anoniquiacheck" value="2">
							2
							</label>
							</div>
							<div class="form-check">

							<label class="form-check-label">
							<input type="checkbox" class="form-check-input Anoniquiacheck" value="3">
							3
							</label>
							</div>
							<div class="form-check">

							<label class="form-check-label">
							<input type="checkbox" class="form-check-input Anoniquiacheck" value="4">
							4
							</label>
							</div>
							<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input Anoniquiacheck" value="5">
							5
							</label>
							</div>
							<input type="hidden" name="Anoniquia" id="Anoniquia">
						</div>
					</div>
										<div class="col-md-2">
						<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input Coiloniquiacheck" value="Coiloniquia(Inv)">
							Coiloniquia(Inv)
							</label>
							<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input Coiloniquiacheck" value="1">
							1
							</label>
							</div>
							<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input Coiloniquiacheck" value="2">
							2
							</label>
							</div>
							<div class="form-check">

							<label class="form-check-label">
							<input type="checkbox" class="form-check-input Coiloniquiacheck" value="3">
							3
							</label>
							</div>
							<div class="form-check">

							<label class="form-check-label">
							<input type="checkbox" class="form-check-input Coiloniquiacheck" value="4">
							4
							</label>
							</div>
							<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input Coiloniquiacheck" value="5">
							5
							</label>
							<input type="hidden" name="Coiloniquia" id="Coiloniquia">
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input Exostosischeck" value="Exostosis(Hiptrof Falg)">
							Exostosis
							</label>
							<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input Exostosischeck" value="1">
							1
							</label>
							</div>
							<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input Exostosischeck" value="2">
							2
							</label>
							</div>
							<div class="form-check">

							<label class="form-check-label">
							<input type="checkbox" class="form-check-input Exostosischeck" value="3">
							3
							</label>
							</div>
							<div class="form-check">

							<label class="form-check-label">
							<input type="checkbox" class="form-check-input Exostosischeck" value="4">
							4
							</label>
							</div>
							<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input Exostosischeck" value="5">
							5
							</label>
							<input type="hidden" name="Exostosis" id="Exostosis">
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input Onicogrifosischeck" value="Onicogrifosis">
							Onicogrifosis
							</label>
							<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input Onicogrifosischeck" value="1">
							1
							</label>
							</div>
							<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input Onicogrifosischeck" value="2">
							2
							</label>
							</div>
							<div class="form-check">

							<label class="form-check-label">
							<input type="checkbox" class="form-check-input Onicogrifosischeck" value="3">
							3
							</label>
							</div>
							<div class="form-check">

							<label class="form-check-label">
							<input type="checkbox" class="form-check-input Onicogrifosischeck" value="4">
							4
							</label>
							</div>
							<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input Onicogrifosischeck" value="5">
							5
							</label>
							<input type="hidden" name="Onicogrifosis" id="Onicogrifosis">
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input Onicorrexischeck" value="Onicorrexis(Dist Lam)">
							Onicorrexis(Dist Lam)
							</label>
							<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input Onicorrexischeck" value="1">
							1
							</label>
							</div>
							<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input Onicorrexischeck" value="2">
							2
							</label>
							</div>
							<div class="form-check">

							<label class="form-check-label">
							<input type="checkbox" class="form-check-input Onicorrexischeck" value="3">
							3
							</label>
							</div>
							<div class="form-check">

							<label class="form-check-label">
							<input type="checkbox" class="form-check-input Onicorrexischeck" value="4">
							4
							</label>
							</div>
							<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input Onicorrexischeck" value="5">
							5
							</label>
							<input type="hidden" name="Onicorrexis" id="Onicorrexis">
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<pre class="blockquote-footer">OBSERVACION GENERAL ORTEJOS</pre>
						<textarea class="form-control" name="obsGeneralPatologia" id="obsGeneralPatologia" cols="10" rows="4" placeholder="Ingrese la observacion general"></textarea>
					</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<pre>5. PIE DIABETICO:</pre>
				</div>
				<div class="col-md-12">
					<label for="" class="breadcrumb-item">Examen Vascular</label>
				</div>
				<div class="col-md-4">
					<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input" value="Llenado capilar" name="llenadoCapilar" id="llenadoCapilar">
							Llenado capilar
							</label>
							<select name="llenadoCapilarDetalle" id="llenadoCapilarDetalle" class="form-control" style="width: 120px;">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input" value="Pulso pedio" name="pulsopedio" id="pulsopedio">
							Pulso pedio
							</label>
							<select name="pulsopedioDetalle" id="pulsopedioDetalle" class="form-control" style="width: 120px;">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input" value="Temperatura" name="Temperatura" id="Temperatura">
							Temperatura
							</label>
							<select name="TemperaturaDet" id="TemperaturaDet" class="form-control" style="width: 120px;">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
					</div>
				</div>
				<div class="col-md-4">
				     <div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input" value="Edemas" name="Edemas" id="Edemas">
							Edemas
							</label>
							<select name="EdemasDet" id="EdemasDet" class="form-control" style="width: 120px;">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
					</div>
				</div>
				<div class="col-md-4">
						<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input" value="Eritema" name="Eritema" id="Eritema">
							Eritema
							</label>
							<select name="EritemaDet" id="EritemaDet" class="form-control" style="width: 120px;">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input" value="Varices" name="Varices" id="Varices">
							Varices
							</label>
							<select name="VaricesDet" id="VaricesDet" class="form-control" style="width: 120px;">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<label for="" class="breadcrumb-item">PIE</label>
				</div>
				<div class="col-md-4">
					<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input" value="Amputación" name="amputacion" id="amputacion">
							Amputación
							</label>
							<select name="amputaciondet" id="amputaciondet" class="form-control" style="width: 120px;">
								<option value="Izquierda">Izquierda</option>
								<option value="Derecha">Derecha</option>
							</select>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input" value="Dedos deformados" name="dedosDeformados" id="dedosDeformados">
							Dedos deformados
							</label>
							<select name="dedosDeformadosDet" id="dedosDeformadosDet" class="form-control" style="width: 120px;">
								<option value="Izquierda">Izquierda</option>
								<option value="Derecha">Derecha</option>
								<option value="Ambas">Ambas</option>
							</select>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input" value="HIPERQUERATOSIS">
							Helomas blandos
							</label>
							<select name="" id="" class="form-control" style="width: 120px;">
								<option value="Izquierda">Izquierda</option>
								<option value="Derecha">Derecha</option>
								<option value="Ambas">Ambas</option>
							</select>
					</div>
				</div>
				<div class="col-md-4">
				     <div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input" value="HIPERQUERATOSIS">
							Helomas duros
							</label>
							<select name="" id="" class="form-control" style="width: 120px;">
								<option value="Izquierda">Izquierda</option>
								<option value="Derecha">Derecha</option>
								<option value="Ambas">Ambas</option>
							</select>
					</div>
				</div>
				<div class="col-md-4">
						<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input" value="HIPERQUERATOSIS">
							Pie deformado
							</label>
							<select name="" id="" class="form-control" style="width: 120px;">
								<option value="Izquierda">Izquierda</option>
								<option value="Derecha">Derecha</option>
								<option value="Ambas">Ambas</option>
							</select>
						</div>
				</div>
				<div class="col-md-4">
						<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input" value="HIPERQUERATOSIS">
							ULCERA
							</label>
							<select name="" id="" class="form-control" style="width: 120px;">
								<option value="Izquierda">Izquierda</option>
								<option value="Derecha">Derecha</option>
								<option value="Ambas">Ambas</option>
							</select>
						</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<label for="" class="breadcrumb-item">CUIDADOS DEL PIE</label>
				</div>
				<div class="col-md-4">
					<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input" value="Vacuna del tetanos">
							Vacuna del tetanos
							</label>
							<select name="" id="" class="form-control" style="width: 120px;">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input" value="Calzado apropiado">
							Calzado apropiado
							</label>
							<select name="" id="" class="form-control" style="width: 120px;">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input" value="Medidas apropiadas">
							Medidas apropiadas
							</label>
							<select name="" id="" class="form-control" style="width: 120px;">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input" value="Corte adecuado de uñas">
							Corte adecuado de uñas
							</label>
							<select name="" id="" class="form-control" style="width: 120px;">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input" value="Higiene del pie">
							Higiene del pie
							</label>
							<select name="" id="" class="form-control" style="width: 120px;">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input" value="Camina descalzo">
							Camina descalzo
							</label>
							<select name="" id="" class="form-control" style="width: 120px;">
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
					</div>
				</div>
			</div>
			<?php
			$Paciente = new HistorialController();
			$Paciente -> ingresoHistorialController();
			?>
			<div class="col-md-12"><hr class="alert-info"></div>
			<!-- <div class="col-md-12"><input type="submit" class="btn btn-success btn-lg"></div> -->
			<div class="col-md-12">
				<button type="button" class="btn btn-toolbar" id="btnGuardar">Guardar</button>
			</div>
			<hr>

   </div>
</form>
