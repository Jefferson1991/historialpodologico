$(document).ready(function(){
	var enfermedadesDatos=[];
	$(".enfermedadescheck").click(function() {
  	enfermedadesDatos.length=0;
    $(".enfermedadescheck:checkbox").each ( function() {
    	if ($(this).is(':checked')) {
      	enfermedadesDatos.push($(this).val());
      }
    });
    $("#enfermedadesDatos").val(enfermedadesDatos)
    });

    var Adactalina=[];
	$(".Adactalinacheck").click(function() {
  	Adactalina.length=0;
    $(".Adactalinacheck:checkbox").each ( function() {
    	if ($(this).is(':checked')) {
      	Adactalina.push($(this).val());
      }
    });
    $("#Adactalina").val(Adactalina)
    });

    var Anoniquia=[];
	$(".Anoniquiacheck").click(function() {
  	Anoniquia.length=0;
    $(".Anoniquiacheck:checkbox").each ( function() {
    	if ($(this).is(':checked')) {
      	Anoniquia.push($(this).val());
      }
    });
    $("#Anoniquia").val(Anoniquia)
    });
    var Coiloniquia=[];
	$(".Coiloniquiacheck").click(function() {
  	Coiloniquia.length=0;
    $(".Coiloniquiacheck:checkbox").each ( function() {
    	if ($(this).is(':checked')) {
      	Coiloniquia.push($(this).val());
      }
    });
    $("#Coiloniquia").val(Coiloniquia)
    });
        var Exostosis=[];
	$(".Exostosischeck").click(function() {
  	Exostosis.length=0;
    $(".Exostosischeck:checkbox").each ( function() {
    	if ($(this).is(':checked')) {
      	Exostosis.push($(this).val());
      }
    });
    $("#Exostosis").val(Exostosis)
    });
        var Onicogrifosis=[];
	$(".Onicogrifosischeck").click(function() {
  	Onicogrifosis.length=0;
    $(".Onicogrifosischeck:checkbox").each ( function() {
    	if ($(this).is(':checked')) {
      	Onicogrifosis.push($(this).val());
      }
    });
    $("#Onicogrifosis").val(Onicogrifosis)
    });
        var Onicorrexis=[];
	$(".Onicorrexischeck").click(function() {
  	Onicorrexis.length=0;
    $(".Onicorrexischeck:checkbox").each ( function() {
    	if ($(this).is(':checked')) {
      	Onicorrexis.push($(this).val());
      }
    });
    $("#Onicorrexis").val(Onicorrexis)
    });
    
});

$("#btnGuardar").click(function(){
	
	var noHistoria = $("#noHistoria").val();
	var fechaIngresoPaciente = $("#fechaIngresoPaciente").val();
	var nombrePaciente = $("#nombrePaciente").val();
	var edadPaciente = $("#edadPaciente").val();
	var genero = $("#genero").val();
	var telefono = $("#telefono").val();
	var celular = $("#celular").val();
	var familiarPaciente = $("#familiarPaciente").val();
	var parentezcoPaciente = $("#parentezcoPaciente").val();
	var telFamiliar = $("#telFamiliar").val();
	var motivoCosulta = $("#motivoCosulta").val(); 
	var remite = $("#remite").val();
    var enfermedadesDatos = $("#enfermedadesDatos").val()
    var obsEnfActual = $("#obsEnfActual").val();
    var alergiaPac = $("#alergiaPac").val();
    var alergiaPacTipo = $("#alergiaPacTipo").val();
    var tipMedicamentoPact = $("#tipMedicamentoPact").val();
    var otroMedicamento = $("#otroMedicamento").val();
    var obsMedPaciente =$("#obsMedPaciente").val();
    var enferFamiliarPac =$("#enferFamiliarPac").val();
    var anteQuiPacient =$("#anteQuiPacient").val();
    var patologiaPaciente=$("#patologiaPaciente").val();
    var otraPatologia = $("#otraPatologia").val();
    var ayudaTenicaPaciente=$("#ayudaTenicaPaciente").val();
    var hiperqueratosis = $("#hiperqueratosis:checked").val();
    var hiperqueratosisMano =$("#hiperqueratosisMano").val();
    var usoDeplantilla = $("#usoDeplantilla:checked").val();
	var detallePlantilla = $("#detallePlantilla").val();
	var separadorInt = $("#separadorInt:checked").val();
	var detalleSeparador = $("#detalleSeparador").val();
	var taloneras = $("#taloneras:checked").val();
	var dentalleTaloneras = $("#dentalleTaloneras").val();
	var obsAyudTecniPacientePrenda = $("#obsAyudTecniPacientePrenda").val();
	var espolon = $("#espolon").val();
	var detalleEspolon = $("#detalleEspolon").val();
	var fancitis = $("#fancitis").val();
	var detallefancitis = $("#detallefancitis").val();
	var hiperqueratosisPie = $("#hiperqueratosisPie").val();
	var detallehiperqueratosisPie = $("#detallehiperqueratosisPie").val();
	var Metatarsalgia = $("#Metatarsalgia").val();
	var detalleMetatarsalgia = $("#detalleMetatarsalgia").val();
	var piePlano = $("#piePlano").val();
	var detallepiePlano = $("#detallepiePlano").val();
	var verrugaPlantar = $("#verrugaPlantar").val();
	var detalleverrugaPlantar = $("#detalleverrugaPlantar").val();
	var obsZonaPlantar = $("#obsZonaPlantar").val();
	var Adactalina = $("#Adactalina").val();
	var Anoniquia =$("#Anoniquia").val();
	var Coiloniquia=$("#Coiloniquia").val();
	var Exostosis =$("#Exostosis").val();
	var Onicogrifosis=$("#Onicogrifosis").val();
	var Onicorrexis =$("#Onicorrexis").val();
	var obsGeneralPatologia=$("#obsGeneralPatologia").val();
	var llenadoCapilar = $("#llenadoCapilar:checked").val();
	var llenadoCapilarDetalle = $("#llenadoCapilarDetalle").val();
	var pulsopedio =$("#pulsopedio:checked").val();
	var pulsopedioDetalle =$("#pulsopedioDetalle").val();
	var Temperatura = $("#Temperatura:checked").val();
	var TemperaturaDet = $("#TemperaturaDet").val();
	var Edemas = $("#Edemas:checked").val();
	var EdemasDet = $("#EdemasDet").val();
	var Eritema = $("#Eritema:checked").val();
	var EritemaDet = $("#EritemaDet").val();
	var Varices = $("#Varices:checked").val();
	var VaricesDet = $("#VaricesDet").val();
	var amputacion = $("#amputacion:checked").val();
	var amputaciondet = $("#amputaciondet").val();
	var dedosDeformados = $("#dedosDeformados:checked").val();
	var dedosDeformadosDet = $("#dedosDeformadosDet").val();
	var Helomasblandos = $("#Helomasblandos:checked").val();
	var HelomasblandosDet = $("#HelomasblandosDet").val();
	var Helomasduros = $("#Helomasduros:checked").val();
	var HelomasdurosDet = $("#HelomasdurosDet").val();
	var Piedeformado = $("#Piedeformado:checked").val();
	var PiedeformadoDet = $("#PiedeformadoDet").val();
	var Ulcera = $("#Ulcera:checked").val();
	var UlceraDet = $("#UlceraDet").val();
	var vacunaTetanos = $("#vacunaTetanos:checked").val();
	var vacunaTetanosDet = $("#vacunaTetanosDet").val();
	var calzadoApropiado = $("#calzadoApropiado:checked").val();
	var calzadoApropiadoDet = $("#calzadoApropiadoDet").val();
	var medidasApropiadas = $("#medidasApropiadas:checked").val();
	var medidasApropiadasDet = $("#medidasApropiadasDet").val();
	var corteUnasAdecuado = $("#corteUnasAdecuado:checked").val();
	var corteUnasAdecuadoDet = $("#corteUnasAdecuadoDet").val();
	var higinePie = $("#higinePie").val();
	var higinePieDet = $("#higinePieDet").val();
	var caminaDescalzo = $("#caminaDescalzo").val();
	var caminaDescalzoDet = $("#caminaDescalzoDet").val();
	var parametros = {noHistoria:noHistoria,
					  fechaIngresoPaciente:fechaIngresoPaciente,
					  nombrePaciente:nombrePaciente,
					  edadPaciente:edadPaciente,
					  genero:genero,
					  telefono:telefono,
					  celular:celular,
					  familiarPaciente:familiarPaciente,
					  parentezcoPaciente:parentezcoPaciente,
					  telFamiliar:telFamiliar,
					  motivoCosulta:motivoCosulta,
					  remite:remite,
				      enfermedadesDatos:enfermedadesDatos,
				      obsEnfActual:obsEnfActual,
				      alergiaPac:alergiaPac,
				      alergiaPacTipo:alergiaPacTipo,
				  	  tipMedicamentoPact:tipMedicamentoPact,
				  	  otroMedicamento:otroMedicamento,
				  	  obsMedPaciente:obsMedPaciente,
				  	  enferFamiliarPac:enferFamiliarPac,
				  	  anteQuiPacient:anteQuiPacient,
				  	  patologiaPaciente:patologiaPaciente,
				  	  otraPatologia:otraPatologia,
				  	  ayudaTenicaPaciente:ayudaTenicaPaciente,
				  	  hiperqueratosis:hiperqueratosis,
				  	  hiperqueratosisMano:hiperqueratosisMano,
				  	  usoDeplantilla:usoDeplantilla,
					  detallePlantilla:detallePlantilla,
					  separadorInt:separadorInt,
					  detalleSeparador:detalleSeparador,
					  taloneras:taloneras,
					  dentalleTaloneras:dentalleTaloneras,
					  obsAyudTecniPacientePrenda:obsAyudTecniPacientePrenda,
					  espolon:espolon,
					  detalleEspolon:detalleEspolon,
					  fancitis:fancitis,
					  detallefancitis:detallefancitis,
					  hiperqueratosisPie:hiperqueratosisPie,
					  detallehiperqueratosisPie:detallehiperqueratosisPie,
					  Metatarsalgia:Metatarsalgia,
					  detalleMetatarsalgia:detalleMetatarsalgia,
					  piePlano:piePlano,
					  detallepiePlano:detallepiePlano,
					  verrugaPlantar:verrugaPlantar,
					  detalleverrugaPlantar:detalleverrugaPlantar,
					  obsZonaPlantar:obsZonaPlantar,
					  Adactalina:Adactalina,
					  Anoniquia:Anoniquia,
					  Coiloniquia:Coiloniquia,
					  Exostosis:Exostosis,
					  Onicogrifosis:Onicogrifosis,
					  Onicorrexis:Onicorrexis,
					  obsGeneralPatologia:obsGeneralPatologia,
					  llenadoCapilar:llenadoCapilar,
					  llenadoCapilarDetalle:llenadoCapilarDetalle,
					  pulsopedio:pulsopedio,
					  pulsopedioDetalle:pulsopedioDetalle,
					  Temperatura:Temperatura,
					  TemperaturaDet:TemperaturaDet,
					  Edemas:Edemas,
					  EdemasDet:EdemasDet,
					  Eritema:Eritema,
					  EritemaDet:EritemaDet,
					  Varices:Varices,
					  VaricesDet:VaricesDet,
					  amputacion:amputacion,
					  amputaciondet:amputaciondet,
					  dedosDeformados:dedosDeformados,
					  dedosDeformadosDet:dedosDeformadosDet,
					  Helomasblandos:Helomasblandos,
					  HelomasblandosDet:HelomasblandosDet,
					  Helomasduros:Helomasduros,
					  HelomasdurosDet:HelomasdurosDet,
					  Piedeformado:Piedeformado,
					  PiedeformadoDet:PiedeformadoDet,
					  Ulcera:Ulcera,
					  UlceraDet:UlceraDet,
					  vacunaTetanos:vacunaTetanos,
					  vacunaTetanosDet:vacunaTetanosDet,
					  calzadoApropiado:calzadoApropiado,
					  calzadoApropiadoDet:calzadoApropiadoDet,
					  medidasApropiadas:medidasApropiadas,
					  medidasApropiadasDet:medidasApropiadasDet,
					  corteUnasAdecuado:corteUnasAdecuado,
					  corteUnasAdecuadoDet:corteUnasAdecuadoDet,
					  higinePie:higinePie,
					  higinePieDet:higinePieDet,
					  caminaDescalzo:caminaDescalzo,
					  caminaDescalzoDet:caminaDescalzoDet};
					  
					 
	$.ajax({
		url:"./views/ajax/PacienteAjax.php",
		method: "POST",
		data: parametros,
		success:function(datos) {
			if(datos > 0){
				swal("El paciente ya existe");
			}else{
				swal("Paciente registrado correctamente");
			}
		}
	});
});
$("#btnConsultar").click(function(){
	var parametroBus = $("#parametroBus").val();
	var parametro = {parametroBus:parametroBus};
	console.log("parametroBus",parametroBus)
	$.ajax({
		url:"views/ajax/PacienteAjax.php",
		method: "POST",
		data: parametro,
		dataType: "json",
		success:function(datos) {
			console.log("datos",datos);
			if (datos) {

				$("#nombrePaciente").val(datos['nombrePaciente']);
				$("#noHistoria").val(datos['noHistoria']);
				$("#fechaIngresoPacienteC").val(datos['fechaIngresoPaciente']);
				$("#edadPaciente").val(datos['edadPaciente'])
				$("#genero").val(datos['genero'])
				$("#telefono").val(datos['telefono'])
				$("#celular").val(datos['celular'])
				$("#familiarPaciente").val(datos['familiarPaciente'])
				$("#parentezcoPaciente").val(datos['parentezcoPaciente'])
				$("#telFamiliar").val(datos['telFamiliar'])
/* -------------------------------------------------------------------------- */
/*                              Seccion Motivo consulta                              */
/* -------------------------------------------------------------------------- */
				$("#motivoCosulta").val(datos['motivoCosulta']);
				$("#remite").val(datos['remite']);
/* -------------------------------------------------------------------------- */
/*                              Enfermedades actules                             */
/* -------------------------------------------------------------------------- */
				$("#enfermedadesDatos").val(datos["enfermedadesDatos"]);
				$("#obsEnfActual").val(datos["obsEnfActual"]);
/* -------------------------------------------------------------------------- */
/*                           Antecedentes personales                          */
/* -------------------------------------------------------------------------- */
				$("#alergiaPac").val(datos["alergiaPac"]);
				$("#alergiaPacTipo").val(datos["alergiaPacTipo"]);
				$("#tipMedicamentoPact").val(datos["tipMedicamentoPact"]);
				$("#otroMedicamento").val(datos["otroMedicamento"]);
				$("#obsMedPaciente").val(datos["obsMedPaciente"]);
				$("#enferFamiliarPac").val(datos["enferFamiliarPac"]);
				$("#anteQuiPacient").val(datos["anteQuiPacient"]);
/* -------------------------------------------------------------------------- */
/*                         4. UBICACIÓN DE PATOLOGIAS:                        */
/* -------------------------------------------------------------------------- */
				$("#patologiaPaciente").val(datos["patologiaPaciente"]);
				$("#otraPatologia").val(datos["otraPatologia"]);
				$("#ayudaTenicaPaciente").val(datos["ayudaTenicaPaciente"]);
				$("#hiperqueratosis").val(datos["hiperqueratosis"]+" en "+datos["hiperqueratosisMano"]);
/* -------------------------------------------------------------------------- */
/*                                   USO DE:                                  */
/* -------------------------------------------------------------------------- */
				$("#usoDeplantilla").val(datos["usoDeplantilla"]+" en el pie/pies -"+datos["detallePlantilla"]);
				$("#separadorInt").val(datos["separadorInt"]+" en el pie/pies -"+datos["detalleSeparador"]);
				$("#taloneras").val(datos["taloneras"]+" en el pie/pies -"+datos["dentalleTaloneras"])
				$("#obsAyudTecniPacientePrenda").val("Observacion:  "+datos["obsAyudTecniPacientePrenda"])
/* ------------------------------ ZONA PLANTAR: ----------------------------- */
				$("#espolon").val(datos["espolon"] +"-"+datos["detalleEspolon"])
				$("#fancitis").val(datos["fancitis"] +"-"+datos["detallefancitis"])
				$("#hiperqueratosisPie").val(datos["hiperqueratosisPie"] +"-"+datos["detallehiperqueratosisPie"])
				$("#Metatarsalgia").val(datos["Metatarsalgia"] +"-"+datos["detalleMetatarsalgia"])
				$("#piePlano").val(datos["piePlano"] +"-"+datos["detallepiePlano"])
				$("#verrugaPlantar").val(datos["verrugaPlantar"] +"-"+datos["detalleverrugaPlantar"])
				$("#obsZonaPlantar").val("Observación:" +"-"+datos["obsZonaPlantar"])
/* -------------------------------------------------------------------------- */
/*                                  ORTEJOS:                                  */
/* -------------------------------------------------------------------------- */
				$("#Adactalina").val(datos["Adactalina"]);
				$("#Anoniquia").val(datos["Anoniquia"]);
				$("#Coiloniquia").val(datos["Coiloniquia"]);
				$("#Exostosis").val(datos["Exostosis"]);
				$("#Onicogrifosis").val(datos["Onicogrifosis"]);
				$("#Onicorrexis").val(datos["Onicorrexis"]);
				$("#obsGeneralPatologia").val(datos["obsGeneralPatologia"]);
/* -------------------------------------------------------------------------- */
/*                              5. PIE DIABETICO: EXAMEN VASCULAR                             */
/* -------------------------------------------------------------------------- */
				$("#llenadoCapilar").html(datos["llenadoCapilar"]);
				$("#pulsopedio").html(datos["pulsopedio"]);
				$("#Temperatura").html(datos["Temperatura"]);
				$("#Edemas").html(datos["Edemas"]);
				$("#Eritema").html(datos["Eritema"]);
				$("#Varices").html(datos["Varices"]);
/* -------------------------------------------------------------------------- */
/*                                     Detalle                                    */
/* -------------------------------------------------------------------------- */
				$("#llenadoCapilarDetalle").val(datos["llenadoCapilarDetalle"]);
				$("#pulsopedioDetalle").val(datos["pulsopedioDetalle"]);
				$("#TemperaturaDet").val(datos["TemperaturaDet"]);
				$("#EdemasDet").val(datos["EdemasDet"]);
				$("#EritemaDet").val(datos["EritemaDet"]);
				$("#VaricesDet").val(datos["VaricesDet"]);
/* -------------------------------------------------------------------------- */
/*                              5. PIE DIABETICO: PIE                             */
/* -------------------------------------------------------------------------- */
					$("#amputacion").html(datos["amputacion"]);
					$("#amputaciondet").val(datos["amputaciondet"]);
					$("#dedosDeformados").html(datos["dedosDeformados"]);
					$("#dedosDeformadosDet").val(datos["dedosDeformadosDet"]);
					$("#Helomasblandos").html(datos["Helomasblandos"]);
					$("#HelomasblandosDet").val(datos["HelomasblandosDet"]);
					$("#Helomasduros").html(datos["Helomasduros"]);
					$("#HelomasdurosDet").val(datos["HelomasdurosDet"]);
					$("#Piedeformado").html(datos["Piedeformado"]);
					$("#PiedeformadoDet").val(datos["PiedeformadoDet"]);
					$("#Ulcera").html(datos["Ulcera"]);
					$("#UlceraDet").val(datos["UlceraDet"]);
					$("#vacunaTetanos").html(datos["vacunaTetanos"]);
					$("#vacunaTetanosDet").val(datos["vacunaTetanosDet"]);
					$("#calzadoApropiado").html(datos["calzadoApropiado"]);
					$("#calzadoApropiadoDet").val(datos["calzadoApropiadoDet"]);
					$("#medidasApropiadas").html(datos["medidasApropiadas"]);
					$("#medidasApropiadasDet").val(datos["medidasApropiadasDet"]);
					$("#corteUnasAdecuado").html(datos["corteUnasAdecuado"]);
					$("#corteUnasAdecuadoDet").val(datos["corteUnasAdecuadoDet"]);
					$("#higinePie").html(datos["higinePie"]);
					$("#higinePieDet").val(datos["higinePieDet"]);
					$("#caminaDescalzo").html(datos["caminaDescalzo"]);
					$("#caminaDescalzoDet").val(datos["caminaDescalzoDet"]);
			}else if(datos === false){
				alert("Es posible que el campo de busqueda se encuentre vacio");
				window.location = "consultaHistorial";
			}
			
		}
	});
});
$('#tableData').DataTable({
				  "responsive":true,
					    "destroy":true,
					      "lengthMenu": [[2,5,10, 25, 50, -1], [2,5,10, 25, 50, "All"]],

		    "language": {
            "sProcessing":     "Procesando...",
			"sLengthMenu":     "Mostrar _MENU_ registros",
			"sZeroRecords":    "No se encontraron resultados",
			"sEmptyTable":     "Ningún dato disponible en esta tabla",
			"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
			"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
			"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
			"sInfoPostFix":    "",
			"sSearch":         "Buscar:",
			"sUrl":            "",
			"sInfoThousands":  ",",
			"sLoadingRecords": "Cargando...",
			"oPaginate": {
				"sFirst":    "Primero",
				"sLast":     "Último",
				"sNext":     "Siguiente",
				"sPrevious": "Anterior"
			},
			"oAria": {
				"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
				"sSortDescending": ": Activar para ordenar la columna de manera descendente"
			}
        }
});
