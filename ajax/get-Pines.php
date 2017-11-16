<?php 
	include("../class/class-conexion.php");
	$conexion = new Conexion();
	switch ($_GET["accion"]) {
		case 'obtener_pines':
			include("../class/class-pin.php");
			Pin::obtenerPin($conexion);
			break;
			echo "Algo anda mal";
		}
 ?>