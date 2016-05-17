var carousel;
$(document).ready(function(){

	$(".prev").click(function(event){
		event.preventDefault();
		console.log('prev');
		var leftPos = $('.container-gal').scrollLeft();
		console.log(leftPos);    
		$("div.container-gal").animate({
			scrollLeft: leftPos - 500
		}, 500);
	});

	$(".next").click(function(event){
		event.preventDefault();
		console.log('next');
		var leftPos = $('.container-gal').scrollLeft();
		console.log(leftPos);    
		$("div.container-gal").animate({
			scrollLeft: leftPos + 500
		}, 500);
	});
	
	$(".gal1").colorbox({
		rel:'gal1',
		maxWidth:'95%', 
		maxHeight:'95%',
		current: 'Imagen {current} de {total}'
	});

	
	$('#galeria-cel').click(function(){
		$('#img-1').trigger("click");
	})

	$('body').scrollspy({ target: '#navbar-menu-lg' });
	$('.help-block').hide();

	$('.mimenu a, .navbar-brand').click(function(e){
		e.preventDefault();
		$('#navbar-menu-lg').collapse('hide');
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


function validarEmail( email ) {
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if ( !expr.test(email) ){
    	return false;
    }
    return true;
}