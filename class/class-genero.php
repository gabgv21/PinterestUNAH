<?php

	class Genero{

		private $id_genero;
		private $genero;

		public function __construct($id_genero,
					$genero){
			$this->id_genero = $id_genero;
			$this->genero = $genero;
		}
		public function getId_genero(){
			return $this->id_genero;
		}
		public function setId_genero($id_genero){
			$this->id_genero = $id_genero;
		}
		public function getGenero(){
			return $this->genero;
		}
		public function setGenero($genero){
			$this->genero = $genero;
		}
		public function __toString(){
			return "id_genero: " . $this->id_genero . 
				" Genero: " . $this->genero;
		}

		public static function obtenerGeneros($conexion){
			$resultado = $conexion->ejecutarConsulta('SELECT id_genero, genero
				FROM generos');

			echo '<table class="table table-striped table-hover" style="text-align: center;">';
			echo 	'<tr>';
			echo 		'<td>Código Género</td>';
			echo 		'<td>Genero</td>';
			echo 		'<td>acciones</td>';
			while (($fila= $conexion->obtenerFila($resultado))) {
				echo 	'<tr>';
				echo		'<td style="aling: center; width: 10px;">'.$fila["id_genero"].'</td>';
				echo		'<td style="aling: center; width: 10px;">'.$fila["genero"].'</td>';
				echo 		'<td style="width: 20px;"><button onclick="eliminarGenero('.$fila["id_genero"].')" class="btn btn-danger btn-small"><span class="glyphicon glyphicon-trash " aria-hidden="true"></span></button>
							<button onclick="seleccionarGenero('.$fila["id_genero"].')" class="btn btn-success btn-small"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></td>';
				echo 	'</tr>';
			}
				echo 	'</tr>';
				echo '</table>';
		}

		public static function detalleGenero($conexion, $id_genero){
			$resultado = $conexion->ejecutarConsulta(
				sprintf(
					'SELECT id_genero, genero
					FROM generos WHERE id_genero = %s',
					$conexion->antiInyeccion($id_genero)
				)
			);

			$fila= $conexion->obtenerFila($resultado);
			echo json_encode($fila);
		}

		public function actualizarGenero($conexion){
			$sql = sprintf(
				"UPDATE generos SET genero = '%s' WHERE id_genero = %s",
				$conexion->antiInyeccion($this->genero),
				$conexion->antiInyeccion($this->id_genero)
			);

			$resultado=$conexion->ejecutarConsulta($sql);
			echo 'Registro actualizado con éxito';
		}

		public function guardarGenero($conexion){
			$sql = sprintf(
				"INSERT INTO generos (genero) VALUES ('%s')",
				$conexion->antiInyeccion($this->genero)
			);

			$resultado = $conexion->ejecutarConsulta($sql);
			echo "Almacenado con éxito";
		}

		public static function eliminarGenero($conexion, $id_genero){
			$sql = sprintf(
				"DELETE FROM generos WHERE id_genero = %s",
				$conexion->antiInyeccion($id_genero)
			);

			$resultado = $conexion->ejecutarConsulta($sql);
			echo "Eliminado con éxito";
		}
	}
?>