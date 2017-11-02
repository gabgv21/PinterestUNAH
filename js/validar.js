var  password, correo;
/*validacion*/
$("#enviar").click(function(){
	// Password
	password = $("#password").val(); 
	if (password == "" ){
		$("#div-password").addClass("has-error");
	}else{
		$("#div-password").removeClass("has-error");	
	}


	//correo
	correo = $("#correo").val(); 
	if (correo == "" ){
		$("#div-correo").addClass("has-error");
	}else{
		$("#div-correo").removeClass("has-error");	
	}

	/*validacion*/
	if (password != "" && correo != "") {
		var parametro = "correo="+correo+"&password="+password;
		$.ajax({
			url: "ajax/obtener-elementos-empresa.php",
			method: "POST",
			data: parametro,
			success: function(respuesta){
    //$().html(respuesta);
   
  }
		});
	}
});	