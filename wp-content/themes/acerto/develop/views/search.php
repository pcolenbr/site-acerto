<?php get_header(); ?>

<section class="background-verde">
	<div class="container">
		<h1 class="text-color-white text-center mb-4">Qual é sua dúvida?</h1>
		<div class="width-md-50 mx-auto">
			<?php get_search_form(); ?>
		</div>
	</div>
</section>

<section class="background-cinza-claro">
	<div class="container">
		<h1>Resultados de pesquisa para: "<?php echo get_search_query(); ?>"</h1>
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

					<a class="d-block width-md-50 mt-4 btn btn-primary btn-lg nao-tenho-mais-duvidas" href="#">Dar uma olhada no portal de ajuda</a>

				<?php } else { ?>
					<?php
					    foreach($perguntas as $pergunta) {
					?>
						<a class="d-block link-pesquisa-perguntas-frequentes py-5" href="<?php echo get_permalink($pergunta->ID); ?>">
							<h2 class="font-large"><i class="material-icons text-color-amarelo" style="line-height: 1.9rem;">keyboard_arrow_right</i><?php echo $pergunta->post_title ?></h2>
							<p class="mb-0 pl-4"><?php echo $pergunta->post_excerpt; ?></p>
						</a>
					<?php } ?>
				<?php } ?>
			</div>
		</div>
	</div>	
</section>

<?php get_footer(); ?>