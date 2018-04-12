		<footer class="py-5 text-center text-md-left">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-3">
						<a href="<?php echo get_home_url(); ?>"><img class="mb-4 img-fluid footer-logo" src="<?php echo get_template_directory_uri();?>/images/logo-acerto-branca.png"></a>
					</div>

					<div class="col-12 col-md-3 d-none d-md-block">
						<?php
				            wp_nav_menu( array(
				              'menu' => 'Menu Footer',
				              'container'     => 'div',
				              'container_id'    => 'footer-navbar-container'
				            ));
				          ?>
					</div>

					<div class="col-12 col-md-3 mt-4 mt-md-0">
						<p class="font-weight-normal mb-2 d-none d-md-block">Entre em contato com a gente</p>
						<a class="mb-3 mb-md-2 d-block" href="tel:313249-1776"><i class="material-icons mr-1">phone</i>(31)3249-1776</a>
						<a class="mb-3 d-block" href="mailto:meajuda@meuacerto.com.br"><i class="material-icons mr-1">email</i>meajuda@meuacerto.com.br</a>
						<a class="btn btn-secondary d-block w-75 w-md-100 mx-auto mx-md-0" href="#" data-toggle="modal" data-target="#modalAgendarLigacao">Agendar Uma Ligação</a>
					</div>

					<div class="col-12 col-md-3 text-center text-md-right mt-5 mt-md-0">
						<a  class="d-inline-block mx-1" href="#"><img src="<?php echo get_template_directory_uri();?>/images/facebook-icon.png"></a>
						<a  class="d-inline-block mx-1" href="#"><img src="<?php echo get_template_directory_uri();?>/images/instagram-icon.png"></a>
						<a  class="d-inline-block mx-1" href="#"><img src="<?php echo get_template_directory_uri();?>/images/youtube-icon.png"></a>
						<a  class="d-inline-block mx-1" href="#"><img src="<?php echo get_template_directory_uri();?>/images/pinterest-icon.png"></a>
					</div>
				</div>

				<hr class="hr-white my-5">

				<p class="mb-0 text-center copyright">© 2017-<?php echo date('Y'); ?> Meu Acerto. Todos os direitos reservados. · <a class="font-weight-normal" href="<?php echo get_permalink(get_page_by_title('Politica de Privacidade')->ID); ?>">Política de Privacidade.</a></p>
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

		<?php wp_footer();?>
	</body>
</html>
