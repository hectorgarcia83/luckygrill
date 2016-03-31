var carousel;
$(document).ready(function(){
	
	$("div#makeMeScrollable").smoothDivScroll({
		autoScrollingMode: "",
		manualContinuousScrolling: true
	});
	
	$(".gal1").colorbox({
		rel:'gal1',
		maxWidth:'95%', 
		maxHeight:'95%'
	});

	$('body').scrollspy({ target: '#navbar-menu-lg' });
	$('.help-block').hide();

	$('.luckymenu a, .navbar-brand').click(function(e){
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
				fechaCumpleanos: $('#dia').val()+" / "+$('#mes').val()+" / "+$('#anio').val(),
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

/*function initMap() {
	var myLatLng = {lat: 24.8241443, lng: -107.369999};
	var map = new google.maps.Map(document.getElementById('map_canvas'), {
		center: myLatLng,
		zoom: 16,
		scrollwheel: false
	});

	google.maps.event.addDomListener(window, "resize", function() {
		var center = map.getCenter();
		google.maps.event.trigger(map, "resize");
		map.setCenter(center); 
	});

	var marker = new google.maps.Marker({
		position: myLatLng,
		map: map,
		title: 'Lucky Grill'
	});
	marker.setMap(map);
}*/

function validarEmail( email ) {
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if ( !expr.test(email) ){
    	return false;
    }
    return true;
}