'use strict';

jQuery(document).ready(function($) {
	new WOW().init();
	
	$('.home-carousel-credores').slick({
	  infinite: true,
	  slidesToShow: 6,
	  slidesToScroll: 1,
	  prevArrow: '<i class="material-icons home-carousel-credores-control home-carousel-credores-control--prev">navigate_before</i>',
	  nextArrow: '<i class="material-icons home-carousel-credores-control home-carousel-credores-control--next">navigate_next</i>',
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
});
