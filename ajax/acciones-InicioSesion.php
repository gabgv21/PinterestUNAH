	<?php
	session_start(); 
	switch ($_GET["accion"]) {
		case "login": 
			
			include_once("../class/class-conexion.php");
			include_once("../class/class-usuario.php");
			$conexion = new Conexion();
			$contrasena = sha1($_POST["contrasenna"]);
			Usuario::verificarUsuario($conexion,$contrasena,$_POST["div-telefono-contrasena"]);
			break;
	default:
			
			break;
	}
	
?>