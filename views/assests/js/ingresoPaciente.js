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
					  VaricesDet:VaricesDet};
	$.ajax({
		url:"./views/ajax/PacienteAjax.php",
		method: "POST",
		data: parametros,
		success:function(datos) {
			console.log("datos",datos);
			if(datos > 0){
				console.log("datos",datos);
				swal("El paciente ya existe");
			}else{
				console.log("datos",datos);
				swal("Paciente registrado correctamente");
			}
		}
	});
});
$("#btnConsultar").click(function(){
	var parametroBus = $("#parametroBus").val();
	var parametro = {parametroBus:parametroBus};
	$.ajax({
		url:"./views/ajax/PacienteAjax.php",
		method: "POST",
		data: parametro,
		dataType: "text",
		success:function(datos) {
			$("#resultConsulta").html(datos);
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
