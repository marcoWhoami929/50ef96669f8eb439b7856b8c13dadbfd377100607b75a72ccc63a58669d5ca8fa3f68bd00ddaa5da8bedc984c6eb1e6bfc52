<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>COMERCIALIZADORA | LA LUNA</title>
	<link rel="icon" href="views/images/logo-negro.png">
	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="views/css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="views/css/animate.css">

	<link rel="stylesheet" href="views/css/owl.carousel.min.css">
	<link rel="stylesheet" href="views/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="views/css/magnific-popup.css">

	<link rel="stylesheet" href="views/css/aos.css">

	<link rel="stylesheet" href="views/css/ionicons.min.css">

	<link rel="stylesheet" href="views/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="views/css/jquery.timepicker.css">


	<link rel="stylesheet" href="views/css/flaticon.css">
	<link rel="stylesheet" href="views/css/icomoon.css">
	<link rel="stylesheet" href="views/css/style.css">


</head>

<body class="goto-here">
	<?php

	echo '<div class="wrapper">';

	include "moduls/header.php";

	if (isset($_GET["ruta"])) {

		$carpeta = "views/moduls/";
		$class = $carpeta . $_GET["ruta"] . '.php';

		if (!file_exists($class)) {

			include "moduls/404.php";
		} else {
			if ($_GET["ruta"] === 'inicio') {
				include "moduls/slide.php";
			}
			include $class;
		}
	} else {

		include "moduls/slide.php";
		include "moduls/inicio.php";
	}

	echo '</div>';
	include "moduls/footer.php";

	?>

	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
		</svg></div>

	<script src="views/js/jquery.min.js"></script>
	<script src="views/js/jquery-migrate-3.0.1.min.js"></script>
	<script src="views/js/popper.min.js"></script>
	<script src="views/js/bootstrap.min.js"></script>
	<script src="views/js/jquery.easing.1.3.js"></script>
	<script src="views/js/jquery.waypoints.min.js"></script>
	<script src="views/js/jquery.stellar.min.js"></script>
	<script src="views/js/owl.carousel.min.js"></script>
	<script src="views/js/jquery.magnific-popup.min.js"></script>
	<script src="views/js/aos.js"></script>
	<script src="views/js/jquery.animateNumber.min.js"></script>
	<script src="views/js/bootstrap-datepicker.js"></script>
	<script src="views/js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_dlGznsov-uJDQUmmsHIR_vsA103iiLc&sensor=false"></script>
	<script src="views/js/google-map.js"></script>
	<script src="views/js/main.js"></script>
</body>

</html>