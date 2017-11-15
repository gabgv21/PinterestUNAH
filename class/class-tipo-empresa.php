<?php

	class TipoEmpresa{

		private $id_tipo_empresa;
		private $tipo_empresa;

		public function __construct($id_tipo_empresa,
					$tipo_empresa){
			$this->id_tipo_empresa = $id_tipo_empresa;
			$this->tipo_empresa = $tipo_empresa;
		}
		public function getid_tipo_empresa(){
			return $this->id_tipo_empresa;
		}
		public function setid_tipo_empresa($id_tipo_empresa){
			$this->id_tipo_empresa = $id_tipo_empresa;
		}
		public function gettipo_empresa(){
			return $this->tipo_empresa;
		}
		public function settipo_empresa($tipo_empresa){
			$this->tipo_empresa = $tipo_empresa;
		}
		public function __toString(){
			return "id_tipo_empresa: " . $this->id_tipo_empresa . 
				" tipo_empresa: " . $this->tipo_empresa;
		}

		public static function obtenerTiposEmpresas($conexion){
			$resultado = $conexion->ejecutarConsulta('SELECT id_tipo_empresa, tipo_empresa
				FROM tipos_empresas');

			echo '<table class="table table-striped table-hover" style="text-align: center;">';
			echo 	'<tr>';
			echo 		'<td>Código Tipo Empresa</td>';
			echo 		'<td>Tipo Empresa</td>';
			echo 		'<td>acciones</td>';
			while (($fila= $conexion->obtenerFila($resultado))) {
				echo 	'<tr>';
				echo		'<td style="aling: center; width: 10px;">'.$fila["id_tipo_empresa"].'</td>';
				echo		'<td style="aling: center; width: 10px;">'.$fila["tipo_empresa"].'</td>';
				echo 		'<td style="width: 20px;"><button onclick="eliminarTipoEmpresa('.$fila["id_tipo_empresa"].')" class="btn btn-danger btn-small"><span class="glyphicon glyphicon-trash " aria-hidden="true"></span></button>
							<button onclick="seleccionarTipoEmpresa('.$fila["id_tipo_empresa"].')" class="btn btn-success btn-small"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></td>';
				echo 	'</tr>';
			}
				echo 	'</tr>';
				echo '</table>';
		}

		public static function detalleTipoEmpresa($conexion, $id_tipo_empresa){
			$resultado = $conexion->ejecutarConsulta(
				sprintf(
					'SELECT id_tipo_empresa, tipo_empresa
					FROM tipos_empresas WHERE id_tipo_empresa = %s',
					$conexion->antiInyeccion($id_tipo_empresa)
				)
			);

			$fila= $conexion->obtenerFila($resultado);
			echo json_encode($fila);
		}

		public function actualizarTipoEmpresa($conexion){
			$sql = sprintf(
				"UPDATE tipos_empresas SET tipo_empresa = '%s' WHERE id_tipo_empresa = %s",
				$conexion->antiInyeccion($this->tipo_empresa),
				$conexion->antiInyeccion($this->id_tipo_empresa)
			);

			$resultado=$conexion->ejecutarConsulta($sql);
			echo 'Registro actualizado con éxito';
		}

		public function guardarTipoEmpresa($conexion){
			$sql = sprintf(
				"INSERT INTO tipos_empresas (tipo_empresa) VALUES ('%s')",
				$conexion->antiInyeccion($this->tipo_empresa)
			);

			$resultado = $conexion->ejecutarConsulta($sql);
			echo "Almacenado con éxito";
		}

		public static function eliminarTipoEmpresa($conexion, $id_tipo_empresa){
			$sql = sprintf(
				"DELETE FROM tipos_empresas WHERE id_tipo_empresa = %s",
				$conexion->antiInyeccion($id_tipo_empresa)
			);

			$resultado = $conexion->ejecutarConsulta($sql);
			echo "Eliminado con éxito";
		}
	}
?>