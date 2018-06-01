<!DOCTYPE html>
<html lang="en">
<head>
	<title>Nuevo artículo</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../carrusel/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="container-contact100">
		<div class="contact100-map" id="google_map" data-map-x="10.4617642" data-map-y="-66.9052259" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>
		<div class="container-contact100-form-btn">
					<button class="contact100-form-btn2" type="submit" onclick="location.href='../index.php';">
						<span>
							Volver al blog
							<i class="fa fa-long-arrow-left m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
		<div class="wrap-contact100">
			<div class="contact100-form-title imagfor" style="background-image: url(images/bg-01.jpg);">
				<span class="contact100-form-title-1">
						Nuevo artículo
				</span>

				</div>

		<form class="contact100-form validate-form" action="../controlador/insertar_articulos.php" method="post" enctype="multipart/form-data" name="form1">
			<div class="wrap-input100 validate-input" data-validate="Name is required">
				<span class="label-input100">Titulo:</span>
					<input class="input100" type="text" name="titulo" id="titulo" placeholder="Título (No mayor a 120 letras)" required>
						<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 validate-input" data-validate = "Message is required">
				<span class="label-input100">Contenido:</span>
					<textarea class="input100" name="contenido" id="contenido" placeholder="Escriba el contenido del artículo" required></textarea>
						<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 validate-input" data-validate = "Message is required">
				<span class="label-input100">Imagen:</span>
		    		<input type="file" name="imagen" id="imagen" class="input100" required>
						<span class="focus-input100"></span>
			</div>

			<div class="container-contact100-form-btn">
				<button class="contact100-form-btn agg" type="submit">
					<span>
						Agregar artículo
						<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
					</span>
				</button>
			</div>
				
				
		</form>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-23581568-13');
	</script>

</body>
</html>
