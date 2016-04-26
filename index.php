<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="author" content="Héctor García" />
		<meta name="description" content="Sitio web del Restaurante Lucky Grill" />
		<meta name="keywords" content="restaurante, restaurante bar, alitas, lucky grill, culiacán, cerveza, hamburguesas, kamilati" />
		<title>Lucky Grill</title>
		<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-theme.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css?v=1.0" />
		<link rel="Stylesheet" type="text/css" href="assets/colorbox/example3/colorbox.css" />
		<link rel="stylesheet" href="assets/font-awesome-4.5.0/css/font-awesome.min.css">
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	 <![endif]-->

		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico?v=1">
	</head>
	<body>
		<section>
			<header>
				<nav class="navbar navbar-default navbar-fixed-top menu-content" role="navigation">
					<div class = "navbar-header">
				      <button type = "button" class = "navbar-toggle" 
				         data-toggle = "collapse" data-target = "#navbar-menu-lg">
				         <span class = "sr-only">Toggle navigation</span>
				         <span class = "icon-bar"></span>
				         <span class = "icon-bar"></span>
				         <span class = "icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="#inicio"><img src="images/logo-top-nuevo.png" alt="" width="123.5" height="40"></a>
				   </div>
					<div class="collapse navbar-collapse luckymenu" id="navbar-menu-lg">
						<ul class="nav navbar-nav">
							<li>
								<a href="#inicio">INICIO</a>
							</li>
							<li>
								<a href="#menu">MENU</a>
							</li>
							<li>
								<a href="#galeria">GALERIA</a>
							</li>
							<li>
								<a href="#ubicacion">UBICACION</a>
							</li>
							<li>
								<a href="#contacto">CONTACTO</a>
							</li>
						</ul>
					</div>
				</nav>
			</header>
		</section>
		<div id="inicio">
			<?php include('modules/slider.php'); ?>
		</div>
		<section id="contenido">
			<div id="menu">
				<?php include('modules/menu.php'); ?>
			</div>
			
			<div id="galeria" class="">
				<?php include('modules/galeria.php'); ?>
			</div>
			
			<div id="ubicacion">
				<?php include('modules/ubicacion.php'); ?>
			</div>
			
			<div id="contacto">
				<?php include('modules/contacto.php'); ?>
			</div>

			<div id="pie" class="visible-xs">
				<?php include('modules/pieCelular.php'); ?>
			</div>
		</section>
		<footer class="visible-sm visible-md visible-lg">
			<nav class="navbar navbar-default navbar-fixed-bottom footer-content">
			  <div class="container">
					<div class="col-sm-2 elementoFooter horario text-center">
						Lunes - Domingo<br>a partir de la 01:00 pm
					</div>
					<div class="col-sm-2 elementoFooter direccion text-center">
						Ave. Cancun #1498<br>Local 14 Isla Musala
					</div>
					<div class="col-sm-3 text-center logoFooter">
						<img src="images/logo-top-nuevo.png" alt="" width="123.5" height="40" >
					</div>
					<div class="col-sm-2 elementoFooter telefono text-center">
						Restaurante & Bar<br><span><i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;Reserva al (667) 146.47.74</span>
					</div>
					<div class="col-sm-3 elementoFooter text-right iconos-redes">
						<a href="https://www.facebook.com/LuckyGrillWingsBar" target="_blank">
							<i class="fa fa-facebook-square"></i>
						</a>
						<a href="https://www.instagram.com/luckygrill/" target="_blank">
							<i class="fa fa-instagram"></i>
						</a>
						<a href="https://twitter.com/luckygrillcln" target="_blank">
							<i class="fa fa-twitter-square"></i>
						</a>
					</div>
			  </div>
			</nav>
		</footer>
	
		<script src="assets/foundation/js/vendor/jquery.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.js"></script>
		<script src="assets/colorbox/js/jquery.colorbox-min.js" type="text/javascript"></script>	
		<script src="js/main.js"></script>
	</body>
</html>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-32840860-17', 'auto');
  ga('send', 'pageview');
</script>