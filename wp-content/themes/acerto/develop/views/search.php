<?php get_header(); ?>

<section class="perguntas-frequentes-hero-section default-hero-section">
	<div class="container position-relative">
		<div class="default-hero-section--content-wrapper py-5 py-md-0 px-4 px-md-0">
			<div class="col-md-6 mb-5">
				<h2 class="text-color-white font-xxlarge mb-4">Dúvidas sobre negociação, boletos, pagamentos, segurança e muito mais.</h2>
				
			</div>

			<?php get_search_form(); ?>
		</div>
	</div>
</section>

<section class="pb-0">
	<div class="container">
		<h1 class="font-xxlarge">Resultados de pesquisa para: "<?php echo get_search_query(); ?>"</h1>
	</div>
</section>

<?php
	$perguntas = get_posts(array('post_type' => 'ajuda', 's' => get_search_query()));
?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php if(empty($perguntas)) { ?>

					<p>Infelizmente não foram encontradas respostas para <strong><?php echo get_search_query(); ?></strong>.</p>

					<p>O que você acha de mudar a sua pesquisa ou então dar mais uma olhada no nosso portal?</p>

					<a class="d-block width-md-50 mt-4 btn btn-primary btn-acerto btn-lg nao-tenho-mais-duvidas" href="<?php echo get_permalink(get_page_by_title('Perguntas Frequentes')->ID); ?>">Dar mais uma olhada no portal de ajuda</a>

				<?php } else { ?>
					<?php
					    foreach($perguntas as $pergunta) {
					?>
						<a class="d-block link-pesquisa-perguntas-frequentes py-5" href="<?php echo get_permalink($pergunta->ID); ?>">
							<h2 class="font-xlarge"><i class="material-icons text-color-verde" style="line-height: 1.9rem;">keyboard_arrow_right</i><?php echo $pergunta->post_title ?></h2>
							<p class="mb-0 pl-4"><?php echo $pergunta->post_excerpt; ?></p>
						</a>
					<?php } ?>
				<?php } ?>
			</div>
		</div>
	</div>	
</section>

<img class="w-100" src="<?php echo get_template_directory_uri(); ?>/images/perguntas-frequentes-bottom.png">

<?php get_footer(); ?>