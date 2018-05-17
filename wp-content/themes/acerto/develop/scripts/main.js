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

		 	$('#perguntas-frequentes-container').children(':not(' + elementId + ')').filter(':visible').fadeOut(function() {
		 		if($(elementId).is(':hidden')) {
			 		$(elementId).fadeIn();
			 	}
		 	});
	 	}
	 });

	 setTimeout(function() {
	 	$('.lb-like .lb-a').click(function(e) {
			$('.lb-share-tt').remove(); 		
	 	});
	 }, 4000);

	 $('.cpf').mask('000.000.000-00', {reverse: true});

	 $('.telefone').mask('(00) 0000-00009', {reverse: false});

	$('.form-consultar-cpf').submit(function(e) {
		e.preventDefault();

		var cpf = $(this).find('.cpf').cleanVal();
		window.location.href = URL_SISTEMA + URL_CADASTRAR + '?cpf=' + cpf;
	});

	$('#modalVideoQuite').on('hide.bs.modal', function (e) {
  		$('#videoQuite')[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
	})
});
