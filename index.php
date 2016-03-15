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
				<nav class="navbar navbar-default navbar-fixed-top menu-content" role="navigation">
					<div class = "navbar-header">
				      <button type = "button" class = "navbar-toggle" 
				         data-toggle = "collapse" data-target = "#navbar-menu-lg">
				         <span class = "sr-only">Toggle navigation</span>
				         <span class = "icon-bar"></span>
				         <span class = "icon-bar"></span>
				         <span class = "icon-bar"></span>
				      </button>
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
			
			<div id="galeria">
				<?php include('modules/galeria.php'); ?>
			</div>
			
			<div id="ubicacion">
				<?php include('modules/ubicacion.php'); ?>
			</div>
			
			<div id="contacto">
				<?php include('modules/contacto.php'); ?>
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
<script>
	$(document).ready(function(){
		$('body').scrollspy({ target: '#navbar-menu-lg' });
		$('.help-block').hide();

		$('.luckymenu a').click(function(e){
			e.preventDefault();
			var idElement = $(this).attr('href');
			$('html, body').animate({
				scrollTop: $(idElement).offset().top-50
			}, 1000);
		});

		$('#navbar-menu-lg').on('activate.bs.scrollspy', function (e) {
		  var $hash, $node;
				$hash = $("a[href^='#']", e.target).attr("href").replace(/^#/, '');
			  	$node = $('#' + $hash);
				if ($node.length) {
					$node.attr('id', '');
				}
				document.location.hash = $hash;
				if ($node.length) {
					return $node.attr('id', $hash);
				}
		})

		

		$('#btnEnviarContacto').click(function(){
			if(!$(this).hasClass('botonEnviarDisabled')){
				$('.help-block').hide();
				var formData = {
					nombre: $('#nombre').val(),
					fechaCumpleanos: $('#cumple').val(),
					mail: $('#mail').val(),
					comentarios: $('#comentarios').val()
				};
				var error = false;
				
				if(formData.nombre == ""){
					error = true;
					$('#helpNombre').show();
				}
				if(formData.mail == "" || !validarEmail(formData.mail)){
					error = true;
					$('#helpMail').show();
				}
				if(formData.comentarios == ""){
					error = true;
					$('#helpComentarios').show();
				}

				if(!error){
					$('#btnEnviarContacto').addClass('botonEnviarDisabled');
					$('#btnEnviarContacto').html('Enviando...');
					$.post('contactSend.php',formData,function(data){
						$('#btnEnviarContacto').removeClass('botonEnviarDisabled');
						$('#btnEnviarContacto').html('Enviar');
						if(data.success){
							var mensaje = '<p>Muchas gracias, tu mensaje ha sido enviado con éxito.</p>';
								 mensaje += '<p>En breve nos pondremos en contacto contigo.</p>';
							$('.modal-title').html('Exito.')
							$('.modal-body').html(mensaje);
							$("#myModal").modal('show');
						}else{
							var mensaje = '<p>Ocurrió un error, inténtelo de nuevo más tarde.</p>';
							$('.modal-title').html('Error.')
							$('.modal-body').html(mensaje);
							$("#myModal").modal('show');
						}
					},'json');
				}
			}
			
		});
	});
</script>