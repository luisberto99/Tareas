<?php
	class comentarios
	{
		private $titulo;
		private $comentario;
		private $usuario;
		private $fechaComentario;
		function __construct($titulo,
							$comentario,
							$usuario,
							$fechaComentario){
			$this->titulo = $titulo;
			$this->comentario = $comentario;
			$this->usuario = $usuario;
			$this->fechaComentario = $fechaComentario;
		}

		public function setTitulo($titulo){
			$this->titulo = $titulo;
		}
		public function getTitulo(){
			return $this->titulo;
		}
		public function setComentario($comentario){
			$this->comentario = $comentario;
		}
		public function getComentario(){
			return $this->comentario;
		}
		public function setUsurario($usuario){
			$this->usuario = $usuario;
		}
		public function getUsuario(){
			return $this->usuario;
		}
		public function setFechaComentario($fechaComentario){
			$this->fechaComentario = $fechaComentario;
		}
		public function getFechaComentario(){
			return $this->fechaComentario;
		}
	}
?>