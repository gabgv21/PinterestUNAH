function cargarTiposUsuarios(){
	$.ajax({
		url:"../ajax/getInfo.php?accion=obtenerTiposUsuarios",
		data: "",
		method:"POST",
		success:function(respuesta){
			$("#contenedor-tipos-usuarios").html(respuesta);
		},
		error:function(e){
			$("#div-error").html(e);
		}

	});		
}

$(document).ready(function() {
	cargarTiposUsuarios();
});

$("#btn-nuevo").click(function(){

	$("#txt-tipo-usuario").attr('disabled', false);
	$("#btn-nuevo").hide();
	$("#btn-guardar").show();
});

function seleccionarTipoUsuario(codigoTipoUsuario){
	//alert(codigoGenero);
	var parametros = "id_tipo_usuario="+codigoTipoUsuario;
	//alert(parametros);
	$("#btn-guardar").hide();
	
	$.ajax({
		url:"../ajax/getInfo.php?accion=obtenerTipoUsuario",
		data: parametros,
		method:"POST",
		dataType:"json",
		success:function(respuesta){
			//$("#txt-id-tipo-usuario").attr("disabled", false);
			//alert(respuesta);
			$("#txt-tipo-usuario").attr("disabled", false);
			$("#txt-id-tipo-usuario").val(respuesta.id_tipo_usuario);
			$("#txt-tipo-usuario").val(respuesta.tipo_usuario);
			$("#btn-nuevo").hide();
			$("#btn-actualizar").show();
		},
		error:function(e){
			alert("Error "+e);
		}
	});
}	

function eliminarTipoUsuario(codigoTipoUsuario){
	$("#btn-guardar").hide();
	
	$.ajax({
		url:"../ajax/gestionInformacion.php?accion=eliminarTipoUsuario",
		data: "id_tipo_usuario="+codigoTipoUsuario,
		method:"POST",
		success:function(respuesta){
			//$("#txt-id-genero").attr("disabled", false);
			//$("#txt-genero").attr("disabled", false);
			//$("#txt-id-genero").val(respuesta.id_genero);
			//$("#txt-genero").val(respuesta.genero);
			//$("#btn-nuevo").hide();
			//$("#btn-actualizar").show();
			alert(respuesta);
			cargarTiposUsuarios();
		},
		error:function(e){
			alert("Error "+e);
		}
	});
}

$("#btn-actualizar").click(function(){

	var parametros = "txt-id-tipo-usuario="+$("#txt-id-tipo-usuario").val()+"&"+
					"txt-tipo-usuario="+$("#txt-tipo-usuario").val();
	//alert(parametros);

	$.ajax({
		url:"../ajax/gestionInformacion.php?accion=actualizarTipoUsuario",
		data: parametros,
		method:"POST",
		success:function(respuesta){
			//$("#txt-id-tipo-usuario").attr("disabled", false);
			alert(respuesta);
			cargarTiposUsuarios();
			$("#btn-actualizar").hide();
			$("#btn-guardar").show();

		},
		error:function(e){
			alert("Error "+e);
		}
	});
	
});

$("#btn-guardar").click(function(){
	var parametros = "txt-tipo-usuario="+$("#txt-tipo-usuario").val();

	$.ajax({
		url:"../ajax/gestionInformacion.php?accion=guardarTipoUsuario",
		data: parametros,
		method:"POST",
		success:function(respuesta){
			alert(respuesta);
			cargarTiposUsuarios();
			//$("#txt-id-tipo-usuario").attr("disabled", false);
		},
		error:function(e){
			alert("Error "+e);
		}
	});
	
});