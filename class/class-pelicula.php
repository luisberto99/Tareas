<?php
	class pelicula extends producto{
		private $duracion;
		private $categoria;
		private $clasificacion;
		function __construct($nombreProducto,
							$descripcion,
							$fechaPublicacion,
							$calificacionPromedio,
							$comentarios,
							$urlProducto,
							$tamañoArchivo,
							$estatus,
							$icono,
							$duracion,
							$categoria,
							$clasificacion){
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
			$this->duracion = $duracion;
			$this->clasificacion = $clasificacion;
		}

		public function setDuracion($duracion){
			$this->duracion = $duracion;
		}
		public function getDuracion(){
			return $this->duracion;
		}
		public function setCategoria($categoria){
			$this->categoria = $categoria;
		}
		public function getCategoria(){
			return $this->categoria;
		}
		public function setClasificacion($clasificacion){
			$this->clasificacion = $clasificacion;
		}
		public function getClasificacion(){
			return $this->clasificacion;
		}
	}
?>