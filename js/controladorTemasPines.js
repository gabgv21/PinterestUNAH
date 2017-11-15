function cargarTemasPines(){
	$.ajax({
		url:"../ajax/getInfo.php?accion=obtenerTemasPines",
		data: "",
		method:"POST",
		success:function(respuesta){
			$("#contenedor-temas-pines").html(respuesta);
		},
		error:function(e){
			$("#div-error").html(e);
		}

	});		
}

$(document).ready(function() {
	cargarTemasPines();
});

$("#btn-nuevo").click(function(){

	$("#txt-tema-pin").attr('disabled', false);
	$("#txt-fecha").attr('disabled', false);
	$("#btn-nuevo").hide();
	$("#btn-guardar").show();
});

function seleccionarTemaPin(codigoTemaPin){
	//alert(codigoGenero);
	var parametros = "id_tema_de_pin="+codigoTemaPin;
	//alert(parametros);
	$("#btn-guardar").hide();
	
	$.ajax({
		url:"../ajax/getInfo.php?accion=obtenerTemaPin",
		data: parametros,
		method:"POST",
		dataType:"json",
		success:function(respuesta){
			//$("#txt-id-tema-pin").attr("disabled", false);
			//alert(respuesta);
			$("#txt-tema-pin").attr("disabled", false);
			$("#txt-id-tema-pin").val(respuesta.id_tema_de_pin);
			$("#txt-tema-pin").val(respuesta.tema);
			$("#btn-nuevo").hide();
			$("#btn-actualizar").show();
		},
		error:function(e){
			alert("Error "+e);
		}
	});
}

function eliminarTemaPin(codigoTemaPin){
	//alert(codigoGenero);
	$("#btn-guardar").hide();
	
	$.ajax({
		url:"../ajax/gestionInformacion.php?accion=eliminarTemaPin",
		data: "id_tema_de_pin="+codigoTemaPin,
		method:"POST",
		success:function(respuesta){
			//$("#txt-id-genero").attr("disabled", false);
			//$("#txt-genero").attr("disabled", false);
			//$("#txt-id-genero").val(respuesta.id_genero);
			//$("#txt-genero").val(respuesta.genero);
			//$("#btn-nuevo").hide();
			//$("#btn-actualizar").show();
			alert(respuesta);
			cargarTemasPines();
		},
		error:function(e){
			alert("Error "+e);
		}
	});
}	

$("#btn-actualizar").click(function(){

	var parametros = "txt-id-tema-pin="+$("#txt-id-tema-pin").val()+"&"+
					"txt-tema-pin="+$("#txt-tema-pin").val();
	//alert(parametros);

	$.ajax({
		url:"../ajax/gestionInformacion.php?accion=actualizarTemaPin",
		data: parametros,
		method:"POST",
		success:function(respuesta){
			//$("#txt-id-tema-pin").attr("disabled", false);
			alert(respuesta);
			cargarTemasPines();
			$("#btn-actualizar").hide();
			$("#btn-guardar").show();

		},
		error:function(e){
			alert("Error "+e);
		}
	});
	
});

$("#btn-guardar").click(function(){
	var parametros = "txt-tema-pin="+$("#txt-tema-pin").val();

	$.ajax({
		url:"../ajax/gestionInformacion.php?accion=guardarTemaPin",
		data: parametros,
		method:"POST",
		success:function(respuesta){
			alert(respuesta);
			cargarTemasPines();
			//$("#txt-id-tema-pin").attr("disabled", false);
		},
		error:function(e){
			alert("Error "+e);
		}
	});
	
});