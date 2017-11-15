<?php

	class TipoUsuario{

		private $id_tipo_usuario;
		private $tipo_usuario;

		public function __construct($id_tipo_usuario,
					$tipo_usuario){
			$this->id_tipo_usuario = $id_tipo_usuario;
			$this->tipo_usuario = $tipo_usuario;
		}
		public function getId_tipo_usuario(){
			return $this->id_tipo_usuario;
		}
		public function setId_tipo_usuario($id_tipo_usuario){
			$this->id_tipo_usuario = $id_tipo_usuario;
		}
		public function getTipo_usuario(){
			return $this->tipo_usuario;
		}
		public function setTipo_usuario($tipo_usuario){
			$this->tipo_usuario = $tipo_usuario;
		}
		public function __toString(){
			return "id_tipo_usuario: " . $this->id_tipo_usuario . 
				" Tipo_usuario: " . $this->tipo_usuario;
		}

		public static function obtenerTipoUsuarios($conexion){
			$resultado = $conexion->ejecutarConsulta('SELECT id_tipo_usuario, tipo_usuario
				FROM tipos_usuarios');

			echo '<table class="table table-striped table-hover" style="text-align: center;">';
			echo 	'<tr>';
			echo 		'<td>Código Tipo Usuario</td>';
			echo 		'<td>Tipo Usuario</td>';
			echo 		'<td>acciones</td>';
			while (($fila= $conexion->obtenerFila($resultado))) {
				echo 	'<tr>';
				echo		'<td style="aling: center; width: 10px;">'.$fila["id_tipo_usuario"].'</td>';
				echo		'<td style="aling: center; width: 10px;">'.$fila["tipo_usuario"].'</td>';
				echo 		'<td style="width: 20px;"><button onclick="eliminarTipoUsuario('.$fila["id_tipo_usuario"].')" class="btn btn-danger btn-small"><span class="glyphicon glyphicon-trash " aria-hidden="true"></span></button>
							<button onclick="seleccionarTipoUsuario('.$fila["id_tipo_usuario"].')" class="btn btn-success btn-small"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></td>';
				echo 	'</tr>';
			}
				echo 	'</tr>';
				echo '</table>';
		}

		public static function detalleTipoUsuario($conexion, $id_tipo_usuario){
			$resultado = $conexion->ejecutarConsulta(
				sprintf(
					'SELECT id_tipo_usuario, tipo_usuario
					FROM tipos_usuarios WHERE id_tipo_usuario = %s',
					$conexion->antiInyeccion($id_tipo_usuario)
				)
			);

			$fila= $conexion->obtenerFila($resultado);
			echo json_encode($fila);
		}

		public function actualizarTipoUsuario($conexion){
			$sql = sprintf(
				"UPDATE tipos_usuarios SET tipo_usuario = '%s' WHERE id_tipo_usuario = %s",
				$conexion->antiInyeccion($this->tipo_usuario),
				$conexion->antiInyeccion($this->id_tipo_usuario)
			);

			$resultado=$conexion->ejecutarConsulta($sql);
			echo 'Registro actualizado con éxito';
		}

		public function guardarTipoUsuario($conexion){
			$sql = sprintf(
				"INSERT INTO tipos_usuarios (tipo_usuario) VALUES ('%s')",
				$conexion->antiInyeccion($this->tipo_usuario)
			);

			$resultado = $conexion->ejecutarConsulta($sql);
			echo "Almacenado con éxito";
		}

		public static function eliminarTipoUsuario($conexion, $id_tipo_usuario){
			$sql = sprintf(
				"DELETE FROM tipos_usuarios WHERE id_tipo_usuario = %s",
				$conexion->antiInyeccion($id_tipo_usuario)
			);

			$resultado = $conexion->ejecutarConsulta($sql);
			echo "Eliminado con éxito";
		}
	}
?>