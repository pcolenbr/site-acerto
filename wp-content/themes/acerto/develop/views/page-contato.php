<?php get_header(); ?>

<?php
	$img_url = get_the_post_thumbnail_url(get_the_ID());
?>

<section class="default-hero-section contato-hero-section" style="background-image: url('<?php echo $img_url?>');">
	<div class="container position-relative">
		<div class="default-hero-section--content-wrapper py-5 py-md-0 px-4 px-md-0">
			<div class="col-md-6 mb-5">
				<h2 class="text-color-white font-xxxlarge mb-4">Entre em contato com a Acerto</h2>
			</div>
		</div>
	</div>
</section>

<?php
  $duvidas = get_post_meta($post->ID, 'contato-duvidas-mais-comuns',true);
?>
<section class="py-0 py-md-5 pb-xs-0">
	<div class="container px-4 px-md-0">
		<div class="row">
			<div class="col-12 col-md-6">
				<h3 class="w-75 font-xxlarge">Não conseguiu resolver sua dúvida?</h3>
				<p> Nos mande uma mensagem e vamos entrar em contato. Estamos trabalhando para ajudar você a ter uma vida financeira saudável.</p>

				<?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); ?>
			</div>

			<div class="col-12 col-md-5 offset-md-1 contato-coluna-direita background-cinza-claro py-4 px-4 text-center text-md-left">
				<div class="mb-3">
					<h4 class="width-md-75 mb-4 font-xlarge">É urgente? Liga pra gente!</h4>
					<a class="d-block mb-4 tel-contato" href="tel:313249-1776"><i class="material-icons mr-1">phone</i>(31) 3249-1776</a>
				</div>

				<hr>

				<div class="mb-5">
					<h4 class="width-md-75 mb-4 font-xlarge">As dúvidas mais comuns dos nossos usuários</h4>

					<?php
				    	foreach($duvidas as $duvida) {
					?>
					<h5 class="mb-3 font-weight-light"><a href="<?php echo $duvida['link-contato-duvidas-mais-comuns'] ?>"><i class="material-icons text-color-verde">keyboard_arrow_right</i><?php echo $duvida['titulo-contato-duvidas-mais-comuns'] ?></a></h5>

					<?php } ?>
				</div>

				<img class="img-fluid contato-coluna-direita-img" src="<?php echo get_template_directory_uri(); ?>/images/banner-bottom-contato.png">
			</div>
		</div>
	</div>
</section>

<img class="w-100 mt-5" src="<?php echo get_template_directory_uri(); ?>/images/perguntas-frequentes-bottom.png">

<?php get_footer(); ?>