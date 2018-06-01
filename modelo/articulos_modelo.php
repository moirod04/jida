<?php

	class Articulo_model{

		private $id;
		private $titulo;
		private $contenido;
		private $fecha;
		private $imagen;

		private $db;
		private $articulos;

		public function __construct(){

			require_once("Conectar.php");
			$this->db=Conectar::conexion();
			$this->articulos=array();



		}

		function get_id(){
			return $this->id;

		}

		function get_titulo(){
			return $this->titulo;

		}

		function get_contenido(){
			return $this->contenido;

		}

		function get_fecha(){
			return $this->fecha;

		}

		function get_imagen(){
			return $this->imagen;

		}

		function  set_id($id){

			$this->id=$id;
		}

		function  set_titulo($titulo){

			$this->titulo=$titulo;
		}

		function  set_contenido($contenido){

			$this->contenido=$contenido;
		}

		function  set_fecha($fecha){

			$this->fecha=$fecha;
		}

		function  set_imagen($imagen){

			$this->imagen=$imagen;
		}

		public function obtenerArticulos(){

			$consulta=$this->db->query("SELECT * FROM articulo");

			while($fila=$consulta->fetch(PDO::FETCH_ASSOC)){

				$this->articulos[]=$fila;



			}

			return $this->articulos;

		}

		public function insertarArticulo(Articulo_model $art){

			$sql="INSERT INTO articulo (titulo, fecha, contenido, imagen) VALUES ('" . $art->get_titulo() . "', '" . $art->get_fecha() . "' , '" . $art->get_contenido() . "' , '" . $art->get_imagen() . "' )";

			$this->db->exec($sql);

		}
		public function eliminarArticulo($id){

			$sql="DELETE FROM articulo WHERE id='$id'";

			$this->db->exec($sql);

		}

	}



?>