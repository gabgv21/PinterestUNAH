<?php

	class Tablero{

		private $id_tablero;
		private $nombre_tablero;
		private $fecha_creacion;
		private $id_usuario_creador;
		private $id_tipo_tablero;

		public function __construct($id_tablero,
					$nombre_tablero,
					$fecha_creacion,
					$id_usuario_creador,
					$id_tipo_tablero){
			$this->id_tablero = $id_tablero;
			$this->nombre_tablero = $nombre_tablero;
			$this->fecha_creacion = $fecha_creacion;
			$this->id_usuario_creador = $id_usuario_creador;
			$this->id_tipo_tablero = $id_tipo_tablero;
		}
		public function getId_tablero(){
			return $this->id_tablero;
		}
		public function setId_tablero($id_tablero){
			$this->id_tablero = $id_tablero;
		}
		public function getNombre_tablero(){
			return $this->nombre_tablero;
		}
		public function setNombre_tablero($nombre_tablero){
			$this->nombre_tablero = $nombre_tablero;
		}
		public function getFecha_creacion(){
			return $this->fecha_creacion;
		}
		public function setFecha_creacion($fecha_creacion){
			$this->fecha_creacion = $fecha_creacion;
		}
		public function getId_usuario_creador(){
			return $this->id_usuario_creador;
		}
		public function setId_usuario_creador($id_usuario_creador){
			$this->id_usuario_creador = $id_usuario_creador;
		}
		public function getId_tipo_tablero(){
			return $this->id_tipo_tablero;
		}
		public function setId_tipo_tablero($id_tipo_tablero){
			$this->id_tipo_tablero = $id_tipo_tablero;
		}
		public function __toString(){
			return "Id_tablero: " . $this->id_tablero . 
				" Nombre_tablero: " . $this->nombre_tablero . 
				" Fecha_creacion: " . $this->fecha_creacion . 
				" Id_usuario_creador: " . $this->id_usuario_creador . 
				" Id_tipo_tablero: " . $this->id_tipo_tablero;
		}
	}
?>
