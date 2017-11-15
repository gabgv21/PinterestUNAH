function cargarTiposNotificaciones(){
	$.ajax({
		url:"../ajax/getInfo.php?accion=obtenerTiposNotificaciones",
		data: "",
		method:"POST",
		success:function(respuesta){
			$("#contenedor-tipos-notificaciones").html(respuesta);
		},
		error:function(e){
			$("#div-error").html(e);
		}

	});		
}

$(document).ready(function() {
	cargarTiposNotificaciones();
});

$("#btn-nuevo").click(function(){

	$("#txt-tipo-notificacion").attr('disabled', false);
	$("#btn-nuevo").hide();
	$("#btn-guardar").show();
});

function seleccionarTipoNotificacion(codigoTipoNotificacion){
	//alert(codigoGenero);
	var parametros = "id_tipo_notificacion="+codigoTipoNotificacion;
	//alert(parametros);
	$("#btn-guardar").hide();
	
	$.ajax({
		url:"../ajax/getInfo.php?accion=obtenerTipoNotificacion",
		data: parametros,
		method:"POST",
		dataType:"json",
		success:function(respuesta){
			//$("#txt-id-tipo-notificacion").attr("disabled", false);
			//alert(respuesta);
			$("#txt-tipo-notificacion").attr("disabled", false);
			$("#txt-id-tipo-notificacion").val(respuesta.id_tipos_notificaciones);
			$("#txt-tipo-notificacion").val(respuesta.tipo_notificacion);
			$("#btn-nuevo").hide();
			$("#btn-actualizar").show();
		},
		error:function(e){
			alert("Error "+e);
		}
	});
}

function eliminarTipoNotificacion(codigoTipoNotificacion){
	//alert(codigoGenero);
	$("#btn-guardar").hide();
	
	$.ajax({
		url:"../ajax/gestionInformacion.php?accion=eliminarTipoNotificacion",
		data: "id_tipo_notificacion="+codigoTipoNotificacion,
		method:"POST",
		success:function(respuesta){
			//$("#txt-id-genero").attr("disabled", false);
			//$("#txt-genero").attr("disabled", false);
			//$("#txt-id-genero").val(respuesta.id_genero);
			//$("#txt-genero").val(respuesta.genero);
			//$("#btn-nuevo").hide();
			//$("#btn-actualizar").show();
			alert(respuesta);
			cargarTiposNotificaciones();
		},
		error:function(e){
			alert("Error "+e);
		}
	});
}

$("#btn-actualizar").click(function(){

	var parametros = "txt-id-tipo-notificacion="+$("#txt-id-tipo-notificacion").val()+"&"+
					"txt-tipo-notificacion="+$("#txt-tipo-notificacion").val();
	//alert(parametros);

	$.ajax({
		url:"../ajax/gestionInformacion.php?accion=actualizarTipoNotificacion",
		data: parametros,
		method:"POST",
		success:function(respuesta){
			//$("#txt-id-tipo-notificacion").attr("disabled", false);
			alert(respuesta);
			cargarTiposNotificaciones();
			$("#btn-actualizar").hide();
			$("#btn-nuevo").show();

		},
		error:function(e){
			alert("Error "+e);
		}
	});
	
});

$("#btn-guardar").click(function(){
	var parametros = "txt-tipo-notificacion="+$("#txt-tipo-notificacion").val();

	$.ajax({
		url:"../ajax/gestionInformacion.php?accion=guardarTipoNotificacion",
		data: parametros,
		method:"POST",
		success:function(respuesta){
			alert(respuesta);
			cargarTiposNotificaciones();
			//$("#txt-id-tipo-notificacion").attr("disabled", false);
		},
		error:function(e){
			alert("Error "+e);
		}
	});
	
});