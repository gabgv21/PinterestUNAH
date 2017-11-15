<?php

	class Comentario{

		private $id_comentario;
		private $comentario;
		private $fecha_redaccion;
		private $id_usuario;
		private $id_pin;

		public function __construct($id_comentario,
					$comentario,
					$fecha_redaccion,
					$id_usuario,
					$id_pin){
			$this->id_comentario = $id_comentario;
			$this->comentario = $comentario;
			$this->fecha_redaccion = $fecha_redaccion;
			$this->id_usuario = $id_usuario;
			$this->id_pin = $id_pin;
		}
		public function getId_comentario(){
			return $this->id_comentario;
		}
		public function setId_comentario($id_comentario){
			$this->id_comentario = $id_comentario;
		}
		public function getComentario(){
			return $this->comentario;
		}
		public function setComentario($comentario){
			$this->comentario = $comentario;
		}
		public function getFecha_redaccion(){
			return $this->fecha_redaccion;
		}
		public function setFecha_redaccion($fecha_redaccion){
			$this->fecha_redaccion = $fecha_redaccion;
		}
		public function getId_usuario(){
			return $this->id_usuario;
		}
		public function setId_usuario($id_usuario){
			$this->id_usuario = $id_usuario;
		}
		public function getId_pin(){
			return $this->id_pin;
		}
		public function setId_pin($id_pin){
			$this->id_pin = $id_pin;
		}
		public function __toString(){
			return "Id_comentario: " . $this->id_comentario . 
				" Comentario: " . $this->comentario . 
				" Fecha_redaccion: " . $this->fecha_redaccion . 
				" Id_usuario: " . $this->id_usuario . 
				" Id_pin: " . $this->id_pin;
		}
	}
?>
