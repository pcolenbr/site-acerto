<?php get_header(); ?>

<?php $post = get_post(get_the_ID()) ?>

<section class="single-ajuda-section">
	<div class="container">
		<div class="single-ajuda-container mx-auto">
			<h1 class="text-center mb-5"><?php echo $post->post_title; ?></h1>

			<div class="mb-4 pb-5">
				<?php echo apply_filters('the_content', $post->post_content); ?>
			</div>

			<div class="single-ajuda-rating px-5 py-5 background-cinza-claro text-center mb-5">
				<p class="font-weight-bold">Esse artigo resolveu sua dúvida?</p>

				<?php echo do_shortcode('[likebtn theme="custom" btn_size="32" lang="pt" show_dislike_label="1" tooltip_enabled="0" i18n_like="Sim! Ajudou muito." i18n_dislike="Não. Ainda preciso de ajuda" counter_show="0" share_enabled="0"]'); ?>

			</div>

			<div>
				<a class="d-block mx-auto width-md-75 btn btn-primary btn-lg mb-3 nao-tenho-mais-duvidas" href="#">NÃO TENHO MAIS DÚVIDAS, E QUERO NEGOCIAR</a>

				<p class="mx-auto width-md-75 font-xsmall text-center text-md-left">Ainda tenho dúvida. <a class="font-weight-bold" href="#">Quero enviar uma mensagem.</a></p>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>