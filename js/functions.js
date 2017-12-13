(function($) {
		$(document).on("scroll", function(){
		if
      ($(document).scrollTop() > 100){
		  $(".logo-inicio").addClass("shrink");
		   $(".contenedor-men").addClass("shrink-contenedor-me");
		}
		else
		{
			$(".logo-inicio").removeClass("shrink");
			$(".contenedor-men").removeClass("shrink-contenedor-me");
		}
	});
	function centrado(){
		$( ".contenido-centrado-JS" ).each(function() {
		 		var alto_contenido = $(this).height();
				var alto_contenedor = $(this).parent().height();
				if ( alto_contenedor>alto_contenido) {
					var diferencia = (alto_contenedor-alto_contenido)/2;
					$(this).css("padding-top", diferencia);
				}else{
					$(this).css("padding-top", "100px");
					$(this).css("padding-bottom", "100px");
				}

		}); 
		var alto_contenedor_slider = $(".servicios").height();
		var alto_slider = alto_contenedor_slider-400;
		$( ".swiper-container").css("height", alto_slider);
		$( ".estudio").css("padding-top", 200);


	}
	window.addEventListener('resize', function(event) {
	    centrado();
	});
	$(document).ready(function(){
		centrado();

	
 		
			 	var swiper = new Swiper('.swiper-container', {
			        centeredSlides: true,
				      autoplay: 4000,
				      autoHeight: true,
			    });

	


		var ajax_mail_url = cltvo_js_vars.template_url + '/ajax/ajax-mail.php'; //aca_js_vars is never defined

		if( $('#contact-form_JS').length > 0 ) {
			$("#contact-form_JS").validate({

				submitHandler:function(form){ // envia via post

					$('#contact_sub_JS').val('...enviando');

					var datos = $(form).serialize();
					$.post(ajax_mail_url,
						datos,
						function(data) {
							$('#contact_sub_JS').val(data);

							if (data == "¡Gracias!"){
								$("#contact-form_JS")[0].reset();
							}
						}
					);
				},
				errorPlacement: function(error, element) {
				    error.insertBefore(element);
				}
			});

			
			// .......................relgas de validacion....................
			$("#cont_mail_JS").rules( "add", {
				email: true
			});

			$("#cont_telefono_JS").rules( "add", {
				number: true,
				minlength:10,
				maxlength:10,
				messages:{ // mensajes personalizados 
					number: "Sólo ingresa números<span>&rarr;</span>",
					minlength:"El número debe incluir lada (10 dígitos) <span>&rarr;</span>",
					maxlength:"El número debe incluir lada (10 dígitos) <span>&rarr;</span>",
				}	
			});	
					
			jQuery.extend(jQuery.validator.messages, { // validacion mensajes generales
				required: 'Este campo es obligatorio <span>&rarr;</span>',
				email: 'El E-mail debe der valido válido <span>&rarr;</span>',
			});

		}

		
	
		$("[href='#']").click(function(e){
	      e.preventDefault();
	    });

	
		

		$(function(){
		  $.scrollIt();
		});

		
    //.........................validacion y envio ...................................


			
	});
})(jQuery);
