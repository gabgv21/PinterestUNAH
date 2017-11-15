<?php

	class TipoTablero{

		private $id_tipo_tablero;
		private $tipo_tablero;

		public function __construct($id_tipo_tablero,
					$tipo_tablero){
			$this->id_tipo_tablero = $id_tipo_tablero;
			$this->tipo_tablero = $tipo_tablero;
		}
		public function getId_tipo_tablero(){
			return $this->id_tipo_tablero;
		}
		public function setId_tipo_tablero($id_tipo_tablero){
			$this->id_tipo_tablero = $id_tipo_tablero;
		}
		public function getTipo_tablero(){
			return $this->tipo_tablero;
		}
		public function setTipo_tablero($tipo_tablero){
			$this->tipo_tablero = $tipo_tablero;
		}
		public function __toString(){
			return "id_tipo_tablero: " . $this->id_tipo_tablero . 
				" tipo_tablero: " . $this->tipo_tablero;
		}

		public static function obtenerTiposTableros($conexion){
			$resultado = $conexion->ejecutarConsulta('SELECT id_tipo_tablero, tipo_tablero
				FROM tipos_tableros');

			echo '<table class="table table-striped table-hover" style="text-align: center;">';
			echo 	'<tr>';
			echo 		'<td>Código Tipo Tablero</td>';
			echo 		'<td>Tipo Tablero</td>';
			echo 		'<td>acciones</td>';
			while (($fila= $conexion->obtenerFila($resultado))) {
				echo 	'<tr>';
				echo		'<td style="aling: center; width: 10px;">'.$fila["id_tipo_tablero"].'</td>';
				echo		'<td style="aling: center; width: 10px;">'.$fila["tipo_tablero"].'</td>';
				echo 		'<td style="width: 20px;"><button onclick="eliminarTipoTablero('.$fila["id_tipo_tablero"].')" class="btn btn-danger btn-small"><span class="glyphicon glyphicon-trash " aria-hidden="true"></span></button>
							<button onclick="seleccionarTipoTablero('.$fila["id_tipo_tablero"].')" class="btn btn-success btn-small"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></td>';
				echo 	'</tr>';
			}
				echo 	'</tr>';
				echo '</table>';
		}

		public static function detalleTipoTablero($conexion, $id_tipo_tablero){
			$resultado = $conexion->ejecutarConsulta(
				sprintf(
					'SELECT id_tipo_tablero, tipo_tablero
					FROM tipos_tableros WHERE id_tipo_tablero = %s',
					$conexion->antiInyeccion($id_tipo_tablero)
				)
			);

			$fila= $conexion->obtenerFila($resultado);
			echo json_encode($fila);
		}

		public function actualizarTipoTablero($conexion){
			$sql = sprintf(
				"UPDATE tipos_tableros SET tipo_tablero = '%s' WHERE id_tipo_tablero = %s",
				$conexion->antiInyeccion($this->tipo_tablero),
				$conexion->antiInyeccion($this->id_tipo_tablero)
			);

			$resultado=$conexion->ejecutarConsulta($sql);
			echo 'Registro actualizado con éxito';
		}

		public function guardarTipoTablero($conexion){
			$sql = sprintf(
				"INSERT INTO tipos_tableros (tipo_tablero) VALUES ('%s')",
				$conexion->antiInyeccion($this->tipo_tablero)
			);

			$resultado = $conexion->ejecutarConsulta($sql);
			echo "Almacenado con éxito";
		}

		public static function eliminarTipoTablero($conexion, $id_tipo_tablero){
			$sql = sprintf(
				"DELETE FROM tipos_tableros WHERE id_tipo_tablero = %s",
				$conexion->antiInyeccion($id_tipo_tablero)
			);

			$resultado = $conexion->ejecutarConsulta($sql);
			echo "Eliminado con éxito";
		}
	}
?>