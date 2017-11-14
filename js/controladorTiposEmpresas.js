function cargarTiposEmpresas(){
	$.ajax({
		url:"../ajax/getInfo.php?accion=obtenerTiposEmpresas",
		data: "",
		method:"POST",
		success:function(respuesta){
			$("#contenedor-tipos-empresas").html(respuesta);
		},
		error:function(e){
			$("#div-error").html(e);
		}

	});		
}

$(document).ready(function() {
	cargarTiposEmpresas();
});

$("#btn-nuevo").click(function(){

	$("#txt-tipo-empresa").attr('disabled', false);
	$("#btn-nuevo").hide();
	$("#btn-guardar").show();
});

function seleccionarTipoEmpresa(codigoTipoEmpresa){
	//alert(codigoGenero);
	var parametros = "id_tipo_empresa="+codigoTipoEmpresa;
	//alert(parametros);
	$("#btn-guardar").hide();
	
	$.ajax({
		url:"../ajax/getInfo.php?accion=obtenerTipoEmpresa",
		data: parametros,
		method:"POST",
		dataType:"json",
		success:function(respuesta){
			//$("#txt-id-tipo-empresa").attr("disabled", false);
			//alert(respuesta);
			$("#txt-tipo-empresa").attr("disabled", false);
			$("#txt-id-tipo-empresa").val(respuesta.id_tipo_empresa);
			$("#txt-tipo-empresa").val(respuesta.tipo_empresa);
			$("#btn-nuevo").hide();
			$("#btn-actualizar").show();
		},
		error:function(e){
			alert("Error "+e);
		}
	});
}

function eliminarTipoEmpresa(codigoTipoEmpresa){
	$("#btn-guardar").hide();
	
	$.ajax({
		url:"../ajax/gestionInformacion.php?accion=eliminarTipoEmpresa",
		data: "id_tipo_empresa="+codigoTipoEmpresa,
		method:"POST",
		success:function(respuesta){
			
			alert(respuesta);
			cargarTiposEmpresas();
		},
		error:function(e){
			alert("Error "+e);
		}
	});
}	

$("#btn-actualizar").click(function(){

	var parametros = "txt-id-tipo-empresa="+$("#txt-id-tipo-empresa").val()+"&"+
					"txt-tipo-empresa="+$("#txt-tipo-empresa").val();
	//alert(parametros);

	$.ajax({
		url:"../ajax/gestionInformacion.php?accion=actualizarTipoEmpresa",
		data: parametros,
		method:"POST",
		success:function(respuesta){
			//$("#txt-id-tipo-empresa").attr("disabled", false);
			alert(respuesta);
			cargarTiposEmpresas();
			$("#btn-actualizar").hide();
			$("#btn-nuevo").show();

		},
		error:function(e){
			alert("Error "+e);
		}
	});
	
});

$("#btn-guardar").click(function(){
	var parametros = "txt-tipo-empresa="+$("#txt-tipo-empresa").val();

	$.ajax({
		url:"../ajax/gestionInformacion.php?accion=guardarTipoEmpresa",
		data: parametros,
		method:"POST",
		success:function(respuesta){
			alert(respuesta);
			cargarTiposEmpresas();
			//$("#txt-id-tipo-empresa").attr("disabled", false);
		},
		error:function(e){
			alert("Error "+e);
		}
	});
	
});