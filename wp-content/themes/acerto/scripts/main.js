'use strict';

jQuery(document).ready(function($) {
	var URL_SISTEMA = 'https://portal.meuacerto.com.br';
	var URL_CADASTRAR = '/consumidor/autenticacao/cadastrar';

	new WOW().init();

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
