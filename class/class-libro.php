<?php
	class libro extends producto
	{
		private $autor;
		private $numPaginas;
		private $editorial;
		function __construct($nombreProducto,
							$descripcion,
							$fechaPublicacion,
							$calificacionPromedio,
							$comentarios,
							$urlProducto,
							$tamañoArchivo,
							$estatus,
							$icono,
							$autor,
							$numPaginas,
							$editorial){
			parent:: __construct($nombreProducto,
							$descripcion,
							$fechaPublicacion,
							$calificacionPromedio,
							$comentarios,
							$urlProducto,
							$tamañoArchivo,
							$estatus,
							$icono);
			$this->autor = $autor;
			$this->numPaginas = $numPaginas;
			$this->editorial = $editorial;
		}

		public function setAutor($autor){
			$this->autor = $autor;
		}
		public function getAutor(){
			return $this->autor;
		}
		public function setNumPaginas($numPaginas){
			$this->numPaginas = $numPaginas;
		}
		public function getNumPaginas(){
			return $this->numPaginas;
		}
		public function setEditorial($editorial){
			$this->editorial = $editorial;
		}
		public function getEditorial(){
			return $this->editorial;
		}
	}
?>