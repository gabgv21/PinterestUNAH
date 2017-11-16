<?php

	class Pin{

		private $id_pin;
		private $url_pin;
		private $fecha_publicacion;
		private $id_usuario;
		private $id_tema_de_pin;

		public function __construct($id_pin,
					$url_pin,
					$fecha_publicacion,
					$id_usuario,
					$id_tema_de_pin){
			$this->id_pin = $id_pin;
			$this->url_pin = $url_pin;
			$this->fecha_publicacion = $fecha_publicacion;
			$this->id_usuario = $id_usuario;
			$this->id_tema_de_pin = $id_tema_de_pin;
		}
		public function getId_pin(){
			return $this->id_pin;
		}
		public function setId_pin($id_pin){
			$this->id_pin = $id_pin;
		}
		public function getUrl_pin(){
			return $this->url_pin;
		}
		public function setUrl_pin($url_pin){
			$this->url_pin = $url_pin;
		}
		public function getFecha_publicacion(){
			return $this->fecha_publicacion;
		}
		public function setFecha_publicacion($fecha_publicacion){
			$this->fecha_publicacion = $fecha_publicacion;
		}
		public function getId_usuario(){
			return $this->id_usuario;
		}
		public function setId_usuario($id_usuario){
			$this->id_usuario = $id_usuario;
		}
		public function getId_tema_de_pin(){
			return $this->id_tema_de_pin;
		}
		public function setId_tema_de_pin($id_tema_de_pin){
			$this->id_tema_de_pin = $id_tema_de_pin;
		}
		public function __toString(){
			return "Id_pin: " . $this->id_pin . 
				" Url_pin: " . $this->url_pin . 
				" Fecha_publicacion: " . $this->fecha_publicacion . 
				" Id_usuario: " . $this->id_usuario . 
				" Id_tema_de_pin: " . $this->id_tema_de_pin;
		}


	public static function obtenerPin($conexion){
			$resultado = $conexion->ejecutarConsulta('SELECT ID_pin, url_pin, fecha_publicacion, ID_usuario, ID_tema_de_pin FROM pines');
			echo '<div class="container">
  				<div class="row">';
			while(($fila=$conexion->obtenerFila($resultado))){
    						echo '<div class="col-lg-3 col-sm-6 col-md-4 col-xs-12">';
    						echo "<img src =".$fila['url_pin']." class='img-responsive'> <br>";
    					for ($i=1; $i <= 4; $i++) { 
    						
    						
    						echo "</div>";	

    	}
    	echo "</div></div>";
			
		}
		}
	}
/*NI LA PUTA IDEA DE COMO PONER ESA SHIT EN COLUMNAS DE 5
echo "<div class='col-lg-6'>";
    		echo "<img src=".$fila['url_pin']." class='img-responsive>";
			echo "</div>";
		}
		echo "</div>";
		*/
    	?>