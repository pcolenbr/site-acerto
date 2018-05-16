		<footer class="px-4 px-md-0 py-3 py-md-5 text-center text-md-left">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-3">
						<a href="<?php echo get_home_url(); ?>"><img class="mb-4 img-fluid footer-logo" src="<?php echo get_template_directory_uri();?>/images/logo-acerto-verde.png"></a>
					</div>

					<div class="col-12 col-md-3 pr-md-5 mb-4 mb-md-0">
						<img class="img-fluid mb-2 mb-md-4" src="<?php echo get_template_directory_uri();?>/images/icone-email.png">
						<h4 class="text-color-verde">E-mail</h4>
						<p class="font-small mb-1">Alguma dúvida? Pode escrever, que a gente lê e responde!</p>

						<a class="font-weight-bold" href="mailto:meajuda@meuacerto.com.br">meajuda@meuacerto.com.br</a>
					</div>

					<div class="col-12 col-md-3 pr-md-5 mb-4 mb-md-0">
						<img class="img-fluid mb-2 mb-md-4" src="<?php echo get_template_directory_uri();?>/images/icone-telefone.png">
						<h4 class="text-color-verde">Telefone</h4>
						<p class="font-small mb-2">Pode ligar. Estamos aqui de segunda a sexta-feira, das 8h às 18h.</p>

						<a class="d-block mb-2 font-weight-bold font-normal" href="tel:313249-1776">31 3249-1776</a>

						<a class="btn btn-secondary btn-acerto btn-small" href="#" data-toggle="modal" data-target="#modalAgendarLigacao">AGENDE UMA LIGAÇÃO</a>
					</div>

					<div class="col-12 col-md-3 pr-md-5 mb-4 mb-md-0">
						<img class="img-fluid mb-2 mb-md-4" src="<?php echo get_template_directory_uri();?>/images/icone-chat.png">
						<h4 class="text-color-verde">Chat</h4>
						<p class="font-small mb-1">Precisa falar com a gente? Chama o chat. Estamos aqui de seunga a sexta-feira das 9h às 17h30.</p>

						<a class="d-block mt-3 font-weight-bold text-color-verde" href=""><i class="material-icons mr-1">help_outline</i>PORTAL DE AJUDA</a>
					</div>
				</div>

				<div class="offset-md-3">
					<hr class="hr-black my-4">	
				</div>

				<div class="row align-items-center">
					<div class="offset-md-3 col-md-3 pr-5">
						<h4 class="text-color-verde">Siga a Acerto</h4>
						<p class="font-normal">Acompanhe as nossas novidades e saiba como voltar a viver quite ;)</p>
					</div>

					<div class="col-md-6">
						<a href="https://www.facebook.com/meuacerto/"><img class="img-fluid mr-3 mb-4 mb-md-0" src="<?php echo get_template_directory_uri();?>/images/icone-facebook.png"></a>

						<a href="https://www.instagram.com/meuacerto/"><img class="img-fluid mr-3 mb-4 mb-md-0" src="<?php echo get_template_directory_uri();?>/images/icone-instagram.png"></a>

						<a href="https://br.pinterest.com/meuacerto/"><img class="img-fluid mr-3 mb-4 mb-md-0" src="<?php echo get_template_directory_uri();?>/images/icone-pinterest.png"></a>

						<a href="https://www.youtube.com/channel/UCvyLg-7AvxcL3Ikidrb33Xw"><img class="img-fluid mr-3 mb-4 mb-md-0" src="<?php echo get_template_directory_uri();?>/images/icone-youtube.png"></a>

						<a href="https://blog.meuacerto.com.br"><img class="img-fluid mb-4 mb-md-0" src="<?php echo get_template_directory_uri();?>/images/icone-blog.png"></a>
					</div>
				</div>

				<div class="offset-md-3">
					<hr class="hr-black my-4">
				</div>

				<div class="row align-items-center">
					<div class="offset-md-3 col-md-3 mb-5 mb-md-0">
						<h4 class="font-weight-light">Garantida pela</h4>
						<img class="img-fluid logo-cdl-footer mt-2" src="<?php echo get_template_directory_uri();?>/images/logo-cdl-bh.png">
					</div>

					<div class="col-md-6">
						<p class="mb-0 text-center copyright">© 2017-<?php echo date('Y'); ?> Meu Acerto. Todos os direitos reservados. · <a class="font-weight-normal" href="<?php echo get_permalink(get_page_by_title('Politica de Privacidade')->ID); ?>">Política de Privacidade.</a>
					</div>
				</div>
			</div>
		</footer>

		<div class="modal fade" id="modalAgendarLigacao" tabindex="-1" role="dialog">
		  	<div class="modal-dialog" role="document">
		    	<div class="modal-content">
		    		<div class="modal-header">
		        		<h5 class="modal-title">Agende Sua Ligação</h5>
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          			<span aria-hidden="true">&times;</span>
		        		</button>
		      		</div>
		      		<div class="modal-body">
		        		<?php echo do_shortcode('[contact-form-7 id="60" title="Agendar Ligação"]'); ?>
		      		</div>
		    	</div>
		  	</div>
		</div>

		<?php if(is_page('Homepage')) { ?>
			<div class="modal fade modal-video-quite" id="modalVideoQuite" tabindex="-1" role="dialog">
			  	<div class="modal-dialog" role="document">
			    	<div class="modal-content">
			    		<div class="modal-header">
			        		<h5 class="modal-title">Conheça o Quite</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">&times;</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
			        		<iframe width="100%" height="450" src="https://www.youtube.com/embed/dTVuu9aZZeU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			      		</div>
			    	</div>
			  	</div>
			</div>
		<?php } ?>

		<!-- W3TC-include-js -->
		<?php wp_footer();?>
	</body>
</html>
