/*function cargarTableros(){
	$.ajax({
		url:"../ajax/getInfo.php?accion=obtenerTableros",
		data: "",
		method:"POST",
		success:function(respuesta){
			$("#contenedor-tableros").html(respuesta);
		},
		error:function(e){
			$("#div-error").html(e);
		}

	});		
}

$(document).ready(function() {
	cargarTableros();
});*/

$("#btn-pines").click(function(){

	$("#div-tableros").hide();
	$("#div-pines").show();
	//$("#btn-nuevo").hide();
	//$("#btn-guardar").show();
});

$("#btn-tableros").click(function(){

	$("#div-tableros").show();
	$("#div-pines").hide();
});
