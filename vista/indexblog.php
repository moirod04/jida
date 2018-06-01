<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../hoja.css">

</head>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">BLOXPORTS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
       </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="vista/agregar_articulo.php">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Agregar un nuevo artículo</button>
        </form>
      </div>
  </nav>

  </header>
<body class="bod">

    <!-- LAS IMAGENES DEL CARRUSEL DEBEN SER 1366 X 768-->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="./carrusel/finalchampions.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
        <h5>FINAL DE LA UEFA CHAMPIONS LEAGUE 2018</h5>
    	  </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./carrusel/ciclismo.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
        <h5>GIRO DE ITALIA</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./carrusel/formula1.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
        <h5>GRAN PREMIO DE MONACO</h5>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<?php

foreach ($matriz as $articulos): ?>
    <form action="controlador/eliminar_articulos.php?id=<?php echo($articulos['id'])?>"" method="post" enctype="multipart/form-data" name="form1">
      <div class="jumbotron jumbotron-fluid arts" style="background-color:#4b545d; ">
        	<div class="container article">
      	    <h1 class="title1"><?php echo $articulos["titulo"] ?></h1>
      	    <p class="lead foo2">Fecha de publicación: <?php echo $articulos["fecha"] ?></p>
      	    <p class="lead foo2" ><?php echo $articulos["contenido"] ?></p>
            <div class="container col-10 offset-1">
      	    <img src='./imagenes/<?php echo $articulos["imagen"] ?>' class="img-fluid img-thumbnail rounded imgart" alt="Responsive image">
            </div>
      	    <br>
            <!-- Button trigger modal -->
      		<button type='submit' name='btn-eliminar' id='btn-eliminar' value='Borrar articulo' class="btn btn-secondary bton" data-toggle="modal" data-target="#exampleModal">Eliminar artículo</button>
      	</div>
      </div>
    </form>
<?php
endforeach;
?>

<div class=" footer2">
		<div class="clearfix col-sm-12 col-md-12 col-lg-12 col-xg-12 margen1">
		<div class="foo">Copyright ©2018 MOU RODRIGUEZ 2018 -All Rights Reserved </div>
		<div class="foo">Web Design by <a href="#"> MOISES RODRIGUEZ</a></div>
		</div>
</div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function(){
        $('.bton').click(function(){
          $('#deleteModal').modal("show");
        });
      });
    </script>
    
</body>
</html>