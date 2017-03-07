<?php
	class producto{
		
		private $nombreProducto;
		private $descripcion;
		private $fechaPublicacion;
		private $calificacionPromedio;
		private $comentarios;
		private $urlProducto;
		private $tamañoArchivo;
		private $estatus;
		private $icono;

		function __construct($nombreProducto,
							$descripcion,
							$fechaPublicacion,
							$calificacionPromedio,
							$comentarios,
							$urlProducto,
							$tamañoArchivo,
							$estatus,
							$icono){
			$this->nombreProducto = $nombreProducto;
			$this->descripcion = $descripcion;
			$this->fechaPublicacion = $fechaPublicacion;
			$this->calificacionPromedio = $calificacionPromedio;
			$this->comentarios = $comentarios;
			$this->urlProducto = $urlProducto;
			$this->tamañoArchivo = $tamañoArchivo;
			$this->estatus = $estatus;
			$this->icono = $icono;
		}

		public function setNombreProducto($nombreProducto){
			$this->nombreProducto = $nombreProducto;
		}
		public function getNombreProducto(){
			return $this->nombreProducto;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setFechaPublicacion($fechaPublicacion){
			$this->fechaPublicacion = $fechaPublicacion;
		}
		public function getFechaPublicacion(){
			return $this->fechaPublicacion;
		}
		public function setCalificacionPromedio($calificacionPromedio){
			$this->calificacionPromedio = $calificacionPromedio;
		}
		public function getCalificacionPromedio(){
			return $this->calificacionPromedio;
		}
		public function setComentarios($comentarios){
			$this->comentarios = $comentarios;
		}
		public function getComentarios(){
			return $this->comentarios;
		}
		public function setUrlProducto($urlProducto){
			$this->urlProducto = $urlProducto;
		}
		public function getUrlProducto(){
			return $this->urlProducto;
		}
		public function setTamañoArchivo($tamañoArchivo){
			$this->tamañoArchivo = $tamañoArchivo;
		}
		public function getTamañoArchivo(){
			return $this->tamañoArchivo;
		}
		public function setEstatus($estatus){
			$this->estatus = $estatus;
		}
		public function getEstatus(){
			return $this->estatus;
		}
		public function setIcono($icono){
			$this->icono = $icono;
		}
		public function getIcono(){
			return $this->icono;
		}


	}
?>