		<footer class="py-5">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-3">
						<a href="#"><img class="mb-4 img-fluid w-50" src="<?php echo get_template_directory_uri();?>/images/logo-acerto-branca.png"></a>
					</div>

					<div class="col-12 col-md-3">
						<?php
				            wp_nav_menu( array(
				              'menu' => 'Menu Footer',
				              'container'     => 'div',
				              'container_id'    => 'footer-navbar-container'
				            ));
				          ?>
					</div>

					<div class="col-12 col-md-3">
						<p class="font-weight-normal mb-2">Entre em contato com a gente</p>
						<a class="mb-2 d-block" href="tel:313249-1776"><i class="material-icons mr-1">phone</i>(31)3249-1776</a>
						<a class="mb-3 d-block" href="mailto:meajuda@meuacerto.com.br"><i class="material-icons mr-1">email</i>meajuda@meuacerto.com.br</a>
						<a class="btn btn-secondary d-block" href="#">Agendar Uma Ligação</a>
					</div>

					<div class="col-12 col-md-3 text-right">
						<a  class="d-inline-block mx-1" href="#"><img src="<?php echo get_template_directory_uri();?>/images/facebook-icon.png"></a>
						<a  class="d-inline-block mx-1" href="#"><img src="<?php echo get_template_directory_uri();?>/images/instagram-icon.png"></a>
						<a  class="d-inline-block mx-1" href="#"><img src="<?php echo get_template_directory_uri();?>/images/youtube-icon.png"></a>
						<a  class="d-inline-block mx-1" href="#"><img src="<?php echo get_template_directory_uri();?>/images/pinterest-icon.png"></a>
					</div>
				</div>

				<hr class="hr-white my-5">

				<p class="mb-0 text-center copyright">© 2017-<?php echo date('Y'); ?> Meu Acerto. Todos os direitos reservados. · <a class="font-weight-normal" href="#">Política de Privacidade.</a></p>
			</div>
		</footer>

		<?php wp_footer();?>
	</body>
</html>
