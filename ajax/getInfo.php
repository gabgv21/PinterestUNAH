<?php 
	include("../class/class-conexion.php");
	$conexion = new Conexion();
	switch ($_GET["accion"]) {
		case 'generos':
			include("../class/class-genero.php");
			Genero::obtenerGeneros($conexion);
			break;
		case 'genero':
			include("../class/class-genero.php");
			Genero::detalleGenero($conexion, $_POST["id_genero"]);
			break;
		case 'obtenerTiposUsuarios':
			include("../class/class-tipo-usuario.php");
			TipoUsuario::obtenerTipoUsuarios($conexion);
			break;
		case 'obtenerTipoUsuario':
			include("../class/class-tipo-usuario.php");
			TipoUsuario::detalleTipoUsuario($conexion, $_POST["id_tipo_usuario"]);
			break;
		case 'obtenerTemasPines':
			include("../class/class-tema-pin.php");
			Tema::obtenerTemasPines($conexion);
			break;
		case 'obtenerTemaPin':
			include("../class/class-tema-pin.php");
			Tema::detalleTemaPin($conexion, $_POST["id_tema_de_pin"]);
			break;
		case 'obtenerTiposTableros':
			include("../class/class-tipo-tablero.php");
			TipoTablero::obtenerTiposTableros($conexion);
			break;
		case 'obtenerTipoTablero':
			include("../class/class-tipo-tablero.php");
			TipoTablero::detalleTipoTablero($conexion, $_POST["id_tipo_tablero"]);
			break;
		case 'obtenerTiposEmpresas':
			include("../class/class-tipo-empresa.php");
			TipoEmpresa::obtenerTiposEmpresas($conexion);
			break;
		case 'obtenerTipoEmpresa':
			include("../class/class-tipo-empresa.php");
			TipoEmpresa::detalleTipoEmpresa($conexion, $_POST["id_tipo_empresa"]);
			break;
		case 'obtenerTiposNotificaciones':
			include("../class/class-tipo-notificacion.php");
			TipoNotificacion::obtenerTiposNotificaciones($conexion);
			break;
		case 'obtenerTipoNotificacion':
			include("../class/class-tipo-notificacion.php");
			TipoNotificacion::detalleTipoNotificacion($conexion, $_POST["id_tipo_notificacion"]);
			break;				
		default:
			echo "Acción inválida";
			break;
	}
	$conexion->cerrarConexion();
?>