<?php

	class Tema{

		private $id_tema_pin;
		private $tema;
		private $fecha_registro;

		public function __construct($id_tema_pin,
					$tema,
					$fecha_registro){
			$this->id_tema_pin = $id_tema_pin;
			$this->tema = $tema;
			$this->fecha_registro = $fecha_registro;
		}
		public function getId_tema_pin(){
			return $this->id_tema_pin;
		}
		public function setId_tema_pin($id_tema_pin){
			$this->id_tema_pin = $id_tema_pin;
		}
		public function getTema(){
			return $this->tema;
		}
		public function setTema($tema){
			$this->tema = $tema;
		}
		public function getFecha_registro(){
			return $this->fecha_registro;
		}
		public function setFecha_registro($fecha_registro){
			$this->fecha_registro = $fecha_registro;
		}
		public function __toString(){
			return "Id_tema_pin: " . $this->id_tema_pin . 
				" Tema: " . $this->tema . 
				" Fecha_registro: " . $this->fecha_registro;
		}

		public static function obtenerTemasPines($conexion){
			$resultado = $conexion->ejecutarConsulta('SELECT id_tema_de_pin, tema, fecha_registro
				FROM temas_de_pines');

			echo '<table class="table table-striped table-hover" style="text-align: center;">';
			echo 	'<tr>';
			echo 		'<td>Código Tema Pin</td>';
			echo 		'<td>Tema</td>';
			echo 		'<td>Fecha</td>';
			echo 		'<td>acciones</td>';
			while (($fila= $conexion->obtenerFila($resultado))) {
				echo 	'<tr>';
				echo		'<td style="aling: center; width: 10px;">'.$fila["id_tema_de_pin"].'</td>';
				echo		'<td style="aling: center; width: 10px;">'.$fila["tema"].'</td>';
				echo 		'<td style="aling: center; width: 10px;">'.$fila["fecha_registro"].'</td>';
				echo 		'<td style="width: 20px;"><button onclick="eliminarTemaPin('.$fila["id_tema_de_pin"].')" class="btn btn-danger btn-small"><span class="glyphicon glyphicon-trash " aria-hidden="true"></span></button>
							<button onclick="seleccionarTemaPin('.$fila["id_tema_de_pin"].')" class="btn btn-success btn-small"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></td>';
				echo 	'</tr>';
			}
				echo 	'</tr>';
				echo '</table>';
		}

		public static function detalleTemaPin($conexion, $id_tema_pin){
			$resultado = $conexion->ejecutarConsulta(
				sprintf(
					'SELECT id_tema_de_pin, tema, fecha_registro
					FROM temas_de_pines WHERE id_tema_de_pin = %s',
					$conexion->antiInyeccion($id_tema_pin)
				)
			);

			$fila= $conexion->obtenerFila($resultado);
			echo json_encode($fila);
		}

		public function actualizarTemaPin($conexion){
			$sql = sprintf(
				"UPDATE temas_de_pines SET tema = '%s', fecha_registro = curdate()  WHERE id_tema_de_pin = %s",
				$conexion->antiInyeccion($this->tema),
				$conexion->antiInyeccion($this->id_tema_pin)
			);

			$resultado=$conexion->ejecutarConsulta($sql);
			echo 'Registro actualizado con éxito';
		}

		public function guardarTemaPin($conexion){
			$sql = sprintf(
				"INSERT INTO temas_de_pines (tema, fecha_registro) VALUES ('%s', curdate())",
				$conexion->antiInyeccion($this->tema)
			);

			$resultado = $conexion->ejecutarConsulta($sql);
			echo "Almacenado con éxito";
		}

		public static function eliminarTemaPin($conexion, $id_tema_pin){
			$sql = sprintf(
				"DELETE FROM temas_de_pines WHERE id_tema_de_pin = %s",
				$conexion->antiInyeccion($id_tema_pin)
			);

			$resultado = $conexion->ejecutarConsulta($sql);
			echo "Eliminado con éxito";
		}
	}
?>