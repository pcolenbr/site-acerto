<?php get_header(); ?>

<section class="background-verde">
	<div class="container">
		<h1 class="text-color-white text-center mb-4">Qual é sua dúvida?</h1>
		<div class="width-md-50 mx-auto">
			<?php get_search_form(); ?>
		</div>
	</div>
</section>

<?php
$perguntas_ids = get_posts(array('post_type' => 'ajuda', 'fields' => 'ids'));

$categorias = get_terms( array(
    'taxonomy' => 'category',
    'hide_empty' => true,
    'object_ids' => $perguntas_ids
) );

?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<p  class="text-center d-md-none">Seleciona em qual categoria está sua dúvida, ou encontre sua resposta abaixo</p>
				<div class="perguntas-frequentes-nav-container background-verde px-4 py-4 mb-5 mb-md-0">
					<a class="perguntas-frequentes-categoria-nav text-color-white d-block mb-0 py-3" href="todos">Todos</a>
					<?php
					    foreach($categorias as $categoria) {
					    	$perguntas = get_posts(array('post_type' => 'ajuda','category' => $categoria->term_id));
					?>
						<a class="perguntas-frequentes-categoria-nav text-color-white d-block mb-0 py-3" href="<?php echo $categoria->slug ?>"><?php echo $categoria->name ?></a>
					<?php } ?>
				</div>
			</div>

			<div id="perguntas-frequentes-container" class="col-12 col-md-9 perguntas-frequentes-container">
				<?php
				    foreach($categorias as $categoria) {
				    	$perguntas = get_posts(array('post_type' => 'ajuda','category' => $categoria->term_id));
				?>
					<div class="perguntas-frequentes-categoria-container mb-4 px-3 py-2" id="container-<?php echo $categoria->slug ?>">
						<h3 class="mb-5 pb-2 w-75 perguntas-frequentes-categoria-titulo"><?php echo $categoria->name ?></h3>

						<div class="row">
							<?php
							    foreach($perguntas as $pergunta) {
							?>
								<div class="col-12 col-md-6">
									<a class="d-inline-block mb-3" href="<?php echo get_permalink($pergunta->ID); ?>"><i class="material-icons text-color-amarelo">keyboard_arrow_right</i><?php echo $pergunta->post_title; ?></a>
								</div>
							<?php } ?>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>