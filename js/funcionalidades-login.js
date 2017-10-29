function validarRegistro() {
	
	if (document.getElementById("txt-correo").value) {
		document.getElementById("txt-correo").style.borderColor = "#00ff00";
		//document.getElementById("txt-contrasenna").style.borderColor = "#ccc";
	}
	else{
		document.getElementById("txt-correo").style.borderColor = "#ff0000";
		//document.getElementById("txt-contrasenna").style.borderColor = "#ff0000";
	}
}

