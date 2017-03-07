<?php
	class aplicacion extends producto
	{
		private $categoria;
		private $desarrollador;
		private $version;
		private $fechaActualizacion;
		function __construct($nombreProducto,
							$descripcion,
							$fechaPublicacion,
							$calificacionPromedio,
							$comentarios,
							$urlProducto,
							$tamañoArchivo,
							$estatus,
							$icono,
							$categoria,
							$desarrollador,
							$version,
							$fechaActualizacion){
			parent:: __construct($nombreProducto,
							$descripcion,
							$fechaPublicacion,
							$calificacionPromedio,
							$comentarios,
							$urlProducto,
							$tamañoArchivo,
							$estatus,
							$icono);
			$this->categoria = $categoria;
			$this->desarrollador = $desarrollador;
			$this->version = $version;
			$this->fechaActualizacion = $fechaActualizacion;
		}

		public function setCategoria($categoria){
			$this->categoria = $categoria;
		}
		public function getCategoria(){
			return $this->categoria;
		}
		public function setDesarrollador($desarrollador){
			$this->desarrollador = $desarrollador;
		}
		public function getDesarrollador(){
			return $this->desarrollador;
		}
		public function setVersion($version){
			$this->version = $version;
		}
		public function getVersion(){
			return $this->version;
		}
		public function setFechaActualizacion($fechaActualizacion){
			$this->fechaActualizacion = $fechaActualizacion;
		}
		public function getFechaActualizacion(){
			return $this->fechaActualizacion;
		}
	}
?>