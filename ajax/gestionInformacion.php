<?php 
	include("../class/class-conexion.php");
	$conexion = new Conexion();
	switch ($_GET["accion"]) {
		case 'guardarGenero':
			include("../class/class-genero.php");
			$genero = new Genero(null, $_POST["txt-genero"]);
			$genero->guardarGenero($conexion);
			break;
		case 'actualizarGenero':
			include("../class/class-genero.php");
			$genero = new Genero($_POST["txt-id-genero"], $_POST["txt-genero"]);
			$genero->actualizarGenero($conexion);
			break;
		case 'eliminarGenero':
			include("../class/class-genero.php");
			Genero::eliminarGenero($conexion, $_POST["id_genero"]);
			break;	
		case 'guardarTipoUsuario':
			include("../class/class-tipo-usuario.php");
			$TipoUsuario = new TipoUsuario(null, $_POST["txt-tipo-usuario"]);
			$TipoUsuario->guardarTipoUsuario($conexion);
			break;
		case 'actualizarTipoUsuario':
			include("../class/class-tipo-usuario.php");
			$TipoUsuario = new TipoUsuario($_POST["txt-id-tipo-usuario"], $_POST["txt-tipo-usuario"]);
			$TipoUsuario->actualizarTipoUsuario($conexion);
			break;
		case 'eliminarTipoUsuario':
			include("../class/class-tipo-usuario.php");
			TipoUsuario::eliminarTipoUsuario($conexion, $_POST["id_tipo_usuario"]);
			break;	
		case 'guardarTemaPin':
			include("../class/class-tema-pin.php");
			$tema = new Tema(null, $_POST["txt-tema-pin"], null);
			$tema->guardarTemaPin($conexion);
			break;
		case 'actualizarTemaPin':
			include("../class/class-tema-pin.php");
			$tema = new Tema($_POST["txt-id-tema-pin"], $_POST["txt-tema-pin"], null);
			$tema->actualizarTemaPin($conexion);
			break;
		case 'eliminarTemaPin':
			include("../class/class-tema-pin.php");
			Tema::eliminarTemaPin($conexion, $_POST["id_tema_de_pin"]);
			break;	
		case 'guardarTipoTablero':
			include("../class/class-tipo-tablero.php");
			$tipoTablero = new TipoTablero(null, $_POST["txt-tipo-tablero"]);
			$tipoTablero->guardarTipoTablero($conexion);
			break;
		case 'actualizarTipoTablero':
			include("../class/class-tipo-tablero.php");
			$tipoTablero = new TipoTablero($_POST["txt-id-tipo-tablero"], $_POST["txt-tipo-tablero"]);
			$tipoTablero->actualizarTipoTablero($conexion);
			break;
		case 'eliminarTipoTablero':
			include("../class/class-tipo-tablero.php");
			TipoTablero::eliminarTipoTablero($conexion, $_POST["id_tipo_tablero"]);
			break;	
		case 'guardarTipoEmpresa':
			include("../class/class-tipo-empresa.php");
			$tipoEmpresa = new TipoEmpresa(null, $_POST["txt-tipo-empresa"]);
			$tipoEmpresa->guardarTipoEmpresa($conexion);
			break;
		case 'actualizarTipoEmpresa':
			include("../class/class-tipo-empresa.php");
			$tipoEmpresa = new TipoEmpresa($_POST["txt-id-tipo-empresa"], $_POST["txt-tipo-empresa"]);
			$tipoEmpresa->actualizarTipoEmpresa($conexion);
			break;
		case 'eliminarTipoEmpresa':
			include("../class/class-tipo-empresa.php");
			TipoEmpresa::eliminarTipoEmpresa($conexion, $_POST["id_tipo_empresa"]);
			break;		
		case 'guardarTipoNotificacion':
			include("../class/class-tipo-notificacion.php");
			$tipoNotificacion = new TipoNotificacion(null, $_POST["txt-tipo-notificacion"]);
			$tipoNotificacion->guardarTipoNotificacion($conexion);
			break;
		case 'actualizarTipoNotificacion':
			include("../class/class-tipo-notificacion.php");
			$tipoNotificacion = new TipoNotificacion($_POST["txt-id-tipo-notificacion"], $_POST["txt-tipo-notificacion"]);
			$tipoNotificacion->actualizarTipoNotificacion($conexion);
			break;
		case 'eliminarTipoNotificacion':
			include("../class/class-tipo-notificacion.php");
			TipoNotificacion::eliminarTipoNotificacion($conexion, $_POST["id_tipo_notificacion"]);
			break;	
					
		default:
			echo "Acción inválida";
			break;
	}
	$conexion->cerrarConexion();
 ?>