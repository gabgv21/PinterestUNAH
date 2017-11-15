function cargarTiposTableros(){
	$.ajax({
		url:"../ajax/getInfo.php?accion=obtenerTiposTableros",
		data: "",
		method:"POST",
		success:function(respuesta){
			$("#contenedor-tipos-tableros").html(respuesta);
		},
		error:function(e){
			$("#div-error").html(e);
		}

	});		
}

$(document).ready(function() {
	cargarTiposTableros();
});

$("#btn-nuevo").click(function(){

	$("#txt-tipo-tablero").attr('disabled', false);
	$("#btn-nuevo").hide();
	$("#btn-guardar").show();
});

function seleccionarTipoTablero(codigoTipoTablero){
	//alert(codigoGenero);
	var parametros = "id_tipo_tablero="+codigoTipoTablero;
	//alert(parametros);
	$("#btn-guardar").hide();
	
	$.ajax({
		url:"../ajax/getInfo.php?accion=obtenerTipoTablero",
		data: parametros,
		method:"POST",
		dataType:"json",
		success:function(respuesta){
			//$("#txt-id-tipo-tablero").attr("disabled", false);
			//alert(respuesta);
			$("#txt-tipo-tablero").attr("disabled", false);
			$("#txt-id-tipo-tablero").val(respuesta.id_tipo_tablero);
			$("#txt-tipo-tablero").val(respuesta.tipo_tablero);
			$("#btn-nuevo").hide();
			$("#btn-actualizar").show();
		},
		error:function(e){
			alert("Error "+e);
		}
	});
}

function eliminarTipoTablero(codigoTipoTablero){
	//alert(codigoGenero);
	$("#btn-guardar").hide();
	
	$.ajax({
		url:"../ajax/gestionInformacion.php?accion=eliminarTipoTablero",
		data: "id_tipo_tablero="+codigoTipoTablero,
		method:"POST",
		success:function(respuesta){
			//$("#txt-id-genero").attr("disabled", false);
			//$("#txt-genero").attr("disabled", false);
			//$("#txt-id-genero").val(respuesta.id_genero);
			//$("#txt-genero").val(respuesta.genero);
			//$("#btn-nuevo").hide();
			//$("#btn-actualizar").show();
			alert(respuesta);
			cargarTiposTableros();
		},
		error:function(e){
			alert("Error "+e);
		}
	});
}

$("#btn-actualizar").click(function(){

	var parametros = "txt-id-tipo-tablero="+$("#txt-id-tipo-tablero").val()+"&"+
					"txt-tipo-tablero="+$("#txt-tipo-tablero").val();
	//alert(parametros);

	$.ajax({
		url:"../ajax/gestionInformacion.php?accion=actualizarTipoTablero",
		data: parametros,
		method:"POST",
		success:function(respuesta){
			//$("#txt-id-tipo-tablero").attr("disabled", false);
			alert(respuesta);
			cargarTiposTableros();
			$("#btn-actualizar").hide();
			$("#btn-nuevo").show();

		},
		error:function(e){
			alert("Error "+e);
		}
	});
	
});

$("#btn-guardar").click(function(){
	var parametros = "txt-tipo-tablero="+$("#txt-tipo-tablero").val();

	$.ajax({
		url:"../ajax/gestionInformacion.php?accion=guardarTipoTablero",
		data: parametros,
		method:"POST",
		success:function(respuesta){
			alert(respuesta);
			cargarTiposTableros();
			//$("#txt-id-tipo-tablero").attr("disabled", false);
		},
		error:function(e){
			alert("Error "+e);
		}
	});
	
});