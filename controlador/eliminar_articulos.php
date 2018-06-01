<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <title></title>
</head>
<body>


<!-- Modal -->

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Articulo eliminado</h5>
        <button type="submit" class="close" data-dismiss="modal" aria-label="Close" onclick="location.href='../index.php'">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        El artículo seleccionado fue eliminado correctamente.
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
          $('#deleteModal').modal("show");
        
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


	$art2=new Articulo_model();

	$id=filter_input(INPUT_GET, "id");
	$art2->eliminarArticulo($id);
	//echo "el articulo se ha eliminado correctamente";
	//header('location:../index.php');
	}catch(Exception $e){

				die("Error");
				echo "ERROR EN LA LINEA: " . $e->getLine() . "  : " . $e->getMessage();
		
			}

?>
