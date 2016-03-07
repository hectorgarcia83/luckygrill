<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Lucky Grill</title>
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-theme.css" />
		<link rel="stylesheet" href="assets/bootstrap/css/jquery.carousel.fullscreen.css" />
		<link rel="stylesheet" href="css/style.css" />
		<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	</head>
	<body>
		<section>
			<header>
				<nav class="navbar navbar-default navbar-fixed-top menu-content">
					<div class="container">
						<ul class="nav navbar-nav luckymenu">
							<li>
								<a href="/index.html">INICIO</a>
							</li>
							<li>
								<a href="minimal/index.html">MENU</a>
							</li>
							<li>
								<a href="bold/index.html">GALERIA</a>
							</li>
							<li>
								<a href="docs/index.html">UBICACION</a>
							</li>
							<li>
								<a href="docs/index.html">CONTACTO</a>
							</li>
						</ul>
					</div>
				</nav>
			</header>
		</section>
		<section id="contenido">
			<div id="slider">
				<div id="map_canvas"></div>
				<?php //include('modules/slider.php'); ?>
				<?php //include('modules/ubicacion.php'); ?>
			</div>
		</section>
		<footer>
			<nav class="navbar navbar-default navbar-fixed-bottom footer-content">
			  <div class="container">
			    <img src="images/logo-bottom.png" alt="">
			  </div>
			</nav>
		</footer>
		<script src="assets/foundation/js/vendor/jquery.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.js"></script>
		<script src="assets/bootstrap/js/jquery.carousel.fullscreen.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnImMHG_x_onIeh4GreC0BfVn9DOPiKQU&callback=initMap"async defer></script>
		<script src="js/main.js"></script>
	</body>
</html>