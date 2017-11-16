<?php 
    session_start();
	include("../class/class-conexion.php");
	$conexion = new Conexion(); 
	switch ($_GET["accion"]){
		case 'consultar':
			include("../class/class-usuario.php");
			Usuario::consultar($conexion,$_POST["Email"]);
			break;	
		default:
			# code...
			break;
	}
?>