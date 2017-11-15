function cargarGeneros(){
	$.ajax({
		url:"../ajax/getInfo.php?accion=generos",
		data: "",
		method:"POST",
		success:function(respuesta){
			$("#contenedor-generos").html(respuesta);
		},
		error:function(e){
			$("#div-error").html(e);
		}

	});		
}

$(document).ready(function() {
	cargarGeneros();
});

$("#btn-nuevo").click(function(){

	$("#txt-genero").attr('disabled', false);
	$("#btn-nuevo").hide();
	$("#btn-guardar").show();
});

function seleccionarGenero(codigoGenero){
	//alert(codigoGenero);
	$("#btn-guardar").hide();
	
	$.ajax({
		url:"../ajax/getInfo.php?accion=genero",
		data: "id_genero="+codigoGenero,
		method:"POST",
		dataType:"json",
		success:function(respuesta){
			//$("#txt-id-genero").attr("disabled", false);
			$("#txt-genero").attr("disabled", false);
			$("#txt-id-genero").val(respuesta.id_genero);
			$("#txt-genero").val(respuesta.genero);
			$("#btn-nuevo").hide();
			$("#btn-actualizar").show();
		},
		error:function(e){
			alert("Error "+e);
		}
	});
}

function eliminarGenero(codigoGenero){
	//alert(codigoGenero);
	$("#btn-guardar").hide();
	
	$.ajax({
		url:"../ajax/gestionInformacion.php?accion=eliminarGenero",
		data: "id_genero="+codigoGenero,
		method:"POST",
		success:function(respuesta){
			//$("#txt-id-genero").attr("disabled", false);
			//$("#txt-genero").attr("disabled", false);
			//$("#txt-id-genero").val(respuesta.id_genero);
			//$("#txt-genero").val(respuesta.genero);
			//$("#btn-nuevo").hide();
			//$("#btn-actualizar").show();
			alert(respuesta);
			cargarGeneros();
		},
		error:function(e){
			alert("Error "+e);
		}
	});
}	

$("#btn-actualizar").click(function(){

	var parametros = "txt-id-genero="+$("#txt-id-genero").val()+"&"+
					"txt-genero="+$("#txt-genero").val();
	//alert(parametros);

	$.ajax({
		url:"../ajax/gestionInformacion.php?accion=actualizarGenero",
		data: parametros,
		method:"POST",
		success:function(respuesta){
			//$("#txt-id-genero").attr("disabled", false);
			alert(respuesta);
			cargarGeneros();
			$("#btn-actualizar").hide();
			$("#btn-guardar").show();

		},
		error:function(e){
			alert("Error "+e);
		}
	});
	
});

$("#btn-guardar").click(function(){
	var parametros = "txt-genero="+$("#txt-genero").val();

	$.ajax({
		url:"../ajax/gestionInformacion.php?accion=guardarGenero",
		data: parametros,
		method:"POST",
		success:function(respuesta){
			alert(respuesta);
			cargarGeneros();
			//$("#txt-id-genero").attr("disabled", false);
		},
		error:function(e){
			alert("Error "+e);
		}
	});
	
});