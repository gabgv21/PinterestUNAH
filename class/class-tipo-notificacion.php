<?php

	class TipoNotificacion{

		private $id_tipo_notificacion;
		private $tipo_notificacion;

		public function __construct($id_tipo_notificacion,
					$tipo_notificacion){
			$this->id_tipo_notificacion = $id_tipo_notificacion;
			$this->tipo_notificacion = $tipo_notificacion;
		}
		public function getid_tipo_notificacion(){
			return $this->id_tipo_notificacion;
		}
		public function setid_tipo_notificacion($id_tipo_notificacion){
			$this->id_tipo_notificacion = $id_tipo_notificacion;
		}
		public function gettipo_notificacion(){
			return $this->tipo_notificacion;
		}
		public function settipo_notificacion($tipo_notificacion){
			$this->tipo_notificacion = $tipo_notificacion;
		}
		public function __toString(){
			return "id_tipo_notificacion: " . $this->id_tipo_notificacion . 
				" tipo_notificacion: " . $this->tipo_notificacion;
		}

		public static function obtenerTiposNotificaciones($conexion){
			$resultado = $conexion->ejecutarConsulta('SELECT id_tipos_notificaciones, tipo_notificacion FROM tipos_notificaciones');

			echo '<table class="table table-striped table-hover" style="text-align: center;">';
			echo 	'<tr>';
			echo 		'<td>Código Tipo Notificacion</td>';
			echo 		'<td>Tipo Notificacion</td>';
			echo 		'<td>acciones</td>';
			while (($fila= $conexion->obtenerFila($resultado))) {
				echo 	'<tr>';
				echo		'<td style="aling: center; width: 10px;">'.$fila["id_tipos_notificaciones"].'</td>';
				echo		'<td style="aling: center; width: 10px;">'.$fila["tipo_notificacion"].'</td>';
				echo 		'<td style="width: 20px;"><button onclick="eliminarTipoNotificacion('.$fila["id_tipos_notificaciones"].')" class="btn btn-danger btn-small"><span class="glyphicon glyphicon-trash " aria-hidden="true"></span></button>
							<button onclick="seleccionarTipoNotificacion('.$fila["id_tipos_notificaciones"].')" class="btn btn-success btn-small"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></td>';
				echo 	'</tr>';
			}
				echo 	'</tr>';
				echo '</table>';
		}

		public static function detalleTipoNotificacion($conexion, $id_tipo_notificacion){
			$resultado = $conexion->ejecutarConsulta(
				sprintf(
					'SELECT id_tipos_notificaciones, tipo_notificacion
					FROM tipos_notificaciones WHERE id_tipos_notificaciones = %s',
					$conexion->antiInyeccion($id_tipo_notificacion)
				)
			);

			$fila= $conexion->obtenerFila($resultado);
			echo json_encode($fila);
		}

		public function actualizarTipoNotificacion($conexion){
			$sql = sprintf(
				"UPDATE tipos_notificaciones SET tipo_notificacion = '%s' WHERE id_tipos_notificaciones = %s",
				$conexion->antiInyeccion($this->tipo_notificacion),
				$conexion->antiInyeccion($this->id_tipo_notificacion)
			);

			$resultado=$conexion->ejecutarConsulta($sql);
			echo 'Registro actualizado con éxito';
		}

		public function guardarTipoNotificacion($conexion){
			$sql = sprintf(
				"INSERT INTO tipos_notificaciones (tipo_notificacion) VALUES ('%s')",
				$conexion->antiInyeccion($this->tipo_notificacion)
			);

			$resultado = $conexion->ejecutarConsulta($sql);
			echo "Almacenado con éxito";
		}

		public static function eliminarTipoNotificacion($conexion, $id_tipo_notificacion){
			$sql = sprintf(
				"DELETE FROM tipos_notificaciones WHERE id_tipos_notificaciones = %s",
				$conexion->antiInyeccion($id_tipo_notificacion)
			);

			$resultado = $conexion->ejecutarConsulta($sql);
			echo "Eliminado con éxito";
		}
	}
?>