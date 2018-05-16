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

<?php
$perguntas_ids = get_posts(array('post_type' => 'ajuda', 'fields' => 'ids', 'numberposts' => 100));

$categorias = get_terms( array(
    'taxonomy' => 'category',
    'orderby' => 'name',
    'hide_empty' => true,
    'object_ids' => $perguntas_ids
) );

?>
<section class="pb-0">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-md-3 d-none d-md-block">
				<div class="perguntas-frequentes-nav-container px-4 py-4 mb-5 mb-md-0">
					<h5 class="font-xlarge mb-4">Escolha o assunto da sua dúvida</h5>
					<p  class="text-center d-md-none">Seleciona em qual categoria está sua dúvida, ou encontre sua resposta abaixo</p>

					<a class="perguntas-frequentes-categoria-nav font-large d-block mb-0 py-3" href="todos">Todos</a>
					<?php
					    foreach($categorias as $categoria) {
					    	$perguntas = get_posts(array('post_type' => 'ajuda','category' => $categoria->term_id, 'orderby' => 'name', 'numberposts' => 100));
					?>
						<a class="perguntas-frequentes-categoria-nav font-large d-block mb-0 py-3" href="<?php echo $categoria->slug ?>"><?php echo $categoria->name ?></a>
					<?php } ?>
				</div>
			</div>

			<div id="perguntas-frequentes-container" class="col-12 col-md-9 pl-md-5 perguntas-frequentes-container">
				<?php
				    foreach($categorias as $categoria) {
				    	$perguntas = get_posts(array('post_type' => 'ajuda','category' => $categoria->term_id));
				?>
					<div class="perguntas-frequentes-categoria-container mb-4 px-3 py-2" id="container-<?php echo $categoria->slug ?>">
						<h2 class="mb-5 pb-2 perguntas-frequentes-categoria-titulo font-xxlarge"><?php echo $categoria->name ?></h2>

						<div class="row">
							<?php
							    foreach($perguntas as $pergunta) {
							?>
								<div class="col-12 col-md-6">
									<a class="d-inline-block mb-3 perguntas-frequentes-link" href="<?php echo get_permalink($pergunta->ID); ?>"><i class="material-icons text-color-verde">keyboard_arrow_right</i><?php echo $pergunta->post_title; ?></a>
								</div>
							<?php } ?>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>

<img class="w-100" src="<?php echo get_template_directory_uri(); ?>/images/perguntas-frequentes-bottom.png">

<?php get_footer(); ?>