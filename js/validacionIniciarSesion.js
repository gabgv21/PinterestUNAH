var  contrasena, telefono;
/*validacion*/
$("#btnSesion").click(function(){
	// contrasena
	contrasena = $("#contrasena").val(); 
	if (contrasena == "" ){
		$("#div-contrasena").addClass("has-error");
	}else{
		$("#div-contrasena").removeClass("has-error");	
	}


	//telefono
	telefono = $("#telefono").val(); 
	if (telefono == "" ){
		$("#div-telefono").addClass("has-error");
	}else{
		$("#div-telefono").removeClass("has-error");	
	}

	/*validacion*/
	if (contrasena != "" && telefono != "") {
		var parametro = "telefono="+telefono+"&contrasena="+contrasena;
		$.ajax({
			url: "ajax/iniciarSesion.php",
			method: "POST",
			data: parametro,
			success: function(){
				
			}
		});
	}
});