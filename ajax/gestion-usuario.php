<?php
   session_start();
   include ('../class/class-conexion.php');
   $conexion  = new Conexion();
   switch ($_GET["accion"]) {
   	case 'crear-usuario':
   		include ('../class/class-usuario.php');
         $usuario = new Usuario(null,
                                $_POST["txt-nombre-completo"],
                              $_POST["txt-nombre-completo"],
                              $_POST["txt-password"],
                              $_POST["txt-correo"],
                              null,
                              $_POST["txt-fecha"],
                              null,
                              null,
                              null,
                              null,
                              $_POST["rbt-genero"],
                              null
                           );
         $usuario->guardarUsuario($conexion);
   		break;
   	case 'login':
   		include ('../class/class-usuario.php');
   		Usuario::verificarUsuario($conexion,$_POST["txt-correo"],$_POST["txt-password"]);
   		break;
   	default:
   		# code...
   		break;
   }
?>