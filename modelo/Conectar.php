
	
<?php

	class Conectar{

		public static function conexion(){

		try{

			$conexion=new PDO('mysql:host=localhost; dbname=id6025583_blog_jiida', 'id6025583_moudb', '12345');

			$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$conexion->exec('SET CHARACTER SET UTF8');


		}catch(Exception $e){

			die("Error");
			echo "ERROR EN LA LINEA: " . $e->getLine() . "  : " . $e->getMessage();
	
			}

			return $conexion;

		}

	}




?>
	
