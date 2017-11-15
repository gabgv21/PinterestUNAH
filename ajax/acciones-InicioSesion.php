	<?php
	session_start(); 
	switch ($_GET["accion"]) {
		case "login": 
			
			include_once("../class/class-conexion.php");
			include_once("../class/class-usuario.php");
			$conexion = new Conexion();
			Usuario::verificarUsuario($conexion,$_POST["contrasenna"],$_POST["div-telefono-contrasena"]);
			break;
	default:
			
			break;
	}
	
?>