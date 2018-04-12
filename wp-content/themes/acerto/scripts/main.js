'use strict';

jQuery(document).ready(function($) {
	var URL_SISTEMA = 'https://portal.meuacerto.com.br';
	var URL_CADASTRAR = '/consumidor/autenticacao/cadastrar';

	new WOW().init();
	
	$('.home-carousel-credores').slick({
	  infinite: true,
	  slidesToShow: 6,
	  slidesToScroll: 1,
	  prevArrow: '<i class="material-icons home-carousel-credores-control home-carousel-credores-control--prev">navigate_before</i>',
	  nextArrow: '<i class="material-icons home-carousel-credores-control home-carousel-credores-control--next">navigate_next</i>',
	  responsive: [
	    {
	      breakpoint: 1200,
	      settings: {
	        slidesToShow: 4,
	      }
	    },
	    {
	      breakpoint: 992,
	      settings: {
	        slidesToShow: 3
	      }
	    },
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 2
	      }
	    }
	   ]
	});

	 $('[data-toggle="tooltip"]').tooltip();

	 $('.perguntas-frequentes-categoria-nav').click(function(e) {
	 	e.preventDefault();
	 	var seletor = $(this).attr('href');

	 	if(seletor === 'todos') {
	 		$('#perguntas-frequentes-container').children().filter(':hidden').fadeIn();
	 	} else {
	 		var elementId = '#container-' + seletor;

		 	if($(elementId).is(':hidden')) {
		 		$(elementId).fadeIn();
		 	}

		 	$('#perguntas-frequentes-container').children(':not(' + elementId + ')').filter(':visible').fadeOut();
	 	}
	 });

	 setTimeout(function() {
	 	$('.lb-like .lb-a').click(function(e) {
			$('.lb-share-tt').remove(); 		
	 	});
	 }, 4000);

	 $('.cpf').mask('000.000.000-00', {reverse: true});

	$('.form-consultar-cpf').submit(function(e) {
		e.preventDefault();

		var cpf = $(this).find('.cpf').cleanVal();
		window.location.href = URL_SISTEMA + URL_CADASTRAR + '?cpf=' + cpf;
	});
});
