<?php 
	include("../class/class-conexion.php");
	$conexion = new Conexion(); 
	switch ($_GET["accion"]){
		case 'registro':
			include("../class/class-usuario.php");
			$usuario = new Usuario(null,
					$_POST["nombreU"],
					$_POST["nombreP"],
					null,
					$_POST["Email"],
					null,
					null,
					$_POST["url_imagen"],
					null,
					null,
					null,
					$_POST["genero"],
					null);
			$usuario->registrarUsuario($conexion);
			break;	

	}
?>