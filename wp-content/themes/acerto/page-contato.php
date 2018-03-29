<?php get_header(); ?>

<?php
	$img_url = get_the_post_thumbnail_url(get_the_ID());
?>

<section class="hero-section-com-bg position-relative" style="background-image: url('<?php echo $img_url?>');">
	<div class="container">
		<div class="absolute-align-center-left w-50 text-color-white">
			<h1>Entre em contato com a Acerto</h1>
			<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed gravida, tellus sed hendrerit.</h5>
		</div>
	</div>
</section>

<section class="pb-0">
	<div class="contato-cta-ajuda-container background-cinza-claro w-50 text-center mx-auto py-5 px-5">
		<h5 class="mb-4">Precisando de ajuda? Já deu no nosso portal de ajuda?</h5>

		<a class="btn btn-lg btn-primary d-block w-50 mx-auto" href="#">Procurar no portal de ajuda</a>
	</div>
</section>

<?php
  $duvidas = get_post_meta($post->ID, 'contato-duvidas-mais-comuns',true);
?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6">
				<h5 class="w-75">Não conseguiu resolver sua dúvida?</h5>
				<p> Nos mande uma mensagem e vamos entrar em contato. Estamos trabalhando para ajudar você a ter uma vida financeira saudável.</p>

				<?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); ?>
			</div>

			<div class="col-12 col-md-5 offset-md-1 contato-coluna-direita background-cinza-claro py-4 px-4">
				<div class="mb-3">
					<h4 class="w-75 mb-4">É urgente? Liga pra gente!</h4>
					<a class="d-block mb-4 tel-contato" href="tel:313249-1776"><i class="material-icons mr-1">phone</i>(31) 3249-1776</a>
				</div>

				<hr>

				<div class="mb-5">
					<h4 class="w-75 mb-4">As dúvidas mais comuns dos nossos usuários</h4>

					<?php
				    	foreach($duvidas as $duvida) {
					?>
					<h5 class="mb-3"><a href="<?php echo $duvida['link-contato-duvidas-mais-comuns'] ?>"><i class="material-icons text-color-verde">keyboard_arrow_right</i><?php echo $duvida['titulo-contato-duvidas-mais-comuns'] ?></a></h5>

					<?php } ?>
				</div>

				<img class="img-fluid contato-coluna-direita-img" src="<?php echo get_template_directory_uri(); ?>/images/banner-bottom-contato.png">
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>