<?php 
	include("../class/class-conexion.php")
	$objconexion = new Conexion; 
	switch ($_GET["accion"]) {
		case 'insertar':
			include("../class/class-usuario.php");
			
			$nombre=$_POST["nombre"];
			$email=$_POST["Email"];
			$fecha=$_POST["Uconexion"];

			Usuario::Insertar($objconexion,$nombre,$email,$fecha);
			# code...
			break;
		
		default:
			# code...
			break;
	}
?>