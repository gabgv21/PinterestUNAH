function iniciarSesion(){	
	//$("#div-btnSesion").click(function(){
			var parametros = "div-telefono-contrasena=" +$("#div-telefono-contrasena").val() + 
						"&contrasenna="+$("#contrasenna").val();
			alert(parametros);

			$.ajax({
				url:"ajax/acciones-IniciarSesion.php?accion=login",
				method:"POST",
				data:parametros,
				dataType:'json',
				success:function(respuesta){
					alert(respuesta);

				},
				error:function(e){

				}

			});
	//});
}	