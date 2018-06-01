<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <title></title>
</head>
<body>


<!-- Modal -->

<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Articulo insertado</h5>
        <button type="submit" class="close" data-dismiss="modal" aria-label="Close" onclick="location.href='../index.php'">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        El artículo fue creado exitosamente.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="location.href='../index.php'">Continuar</button>
      </div>
    </div>
  </div>
</div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
     <script>
      $(document).ready(function(){
          $('#createModal').modal("show");
        
      });
    </script>
</body>
</html>
	
<?php

	include_once("../modelo/articulos_modelo.php");

			try{

				$conexion=new PDO('mysql:host=localhost; dbname=id6025583_blog_jiida', 'id6025583_moudb', '12345');

				$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$conexion->exec('SET CHARACTER SET UTF8');

		if($_FILES['imagen']['error']){

		switch ($_FILES["imagen"]["error"]) {
			
			case 1:  //error de exceso de tamaño de archivo.ini 
				
				echo "El tamaño de la imagen excede el tamaño maximo del servidor";
				
				break;
			
			case 2:  //error del tamaño del archivo subido al formulario

				echo "El tamaño del archivo excede el limite";
				# code...
				break;

			case 3: //corrupcion de archivo
			
				echo "El envio del archivo fue interrumpido";

				break;

			case 4: //no se subio el fichero
			
				echo "No se ha enviado ningun archivo";

				break;	

		}

		}else{
			//echo "Entrada subida correctamente<br>";
			if((isset($_FILES["imagen"]["name"])) && ($_FILES
				["imagen"]["error"]==UPLOAD_ERR_OK)){

				$ruta_destino="../imagenes/";

			move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta_destino . $_FILES["imagen"]["name"]);
			//echo "El archivo" . $_FILES["imagen"]["name"] . "  Se ha copiado al directorio de imagenes";
			}else{

				echo "El archivo no se ha podido enviar al directorio";
			}
		}


	//obteniendo la informacion del formulario

	$art=new Articulo_model();

	$art->set_titulo(htmlentities(addslashes($_POST["titulo"]) , ENT_QUOTES));

	$art->set_fecha(date("Y-m-d H:i:s"));

	$art->set_contenido(htmlentities(addslashes($_POST["contenido"]) , ENT_QUOTES));

	$art->set_imagen($_FILES["imagen"]["name"]);

	$art->insertarArticulo($art);

	//echo "informacion introducida con exito";

	//header('location:../index.php');

	}catch(Exception $e){
				die("Error");
				echo "ERROR EN LA LINEA: " . $e->getLine() . "  : " . $e->getMessage();
		
			}

?>
	
