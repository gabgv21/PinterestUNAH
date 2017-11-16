<?php 
	include("../class/class-conexion.php");
	$conexion = new Conexion(); 
	switch ($_GET["accion"]){
		case 'consultar':
			include("../class/class-usuario.php");
			Usuario::consultar($conexion,$_POST["nombreU"],$_POST["Email"]);
			break;	
		default:
			# code...
			break;
	}
?>