$(document).ready(function(){
	$.ajax({
		url:"ajax/get-Pines.php?accion=obtener_pines",
		data:"",
		method:"POST",
		success:function(respuesta){
			//alert(respuesta);
			$("#div-imagenes").html(respuesta);
		},
		error:function(e){
			alert("Error "+e);
		}
	});
});