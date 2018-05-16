<?php
/*
Template Name: Texto Esquerda
*/
?>

<?php get_header(); ?>

<?php
	$post = get_post(get_the_ID());
	$img_url = get_the_post_thumbnail_url(get_the_ID());
?>

<section class="default-hero-section" style="background-image: url('<?php echo $img_url?>');">
	<div class="container position-relative">
		<div class="default-hero-section--content-wrapper py-5 py-md-0 px-4 px-md-0">
			<div class="col-md-6 mb-5">
				<h2 class="text-color-white font-xxxlarge mb-4"><?php echo $post->post_title; ?></h2>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container px-4 px-md-0">
		<div class="template-texto-esquerda-container w-75 mb-4 pb-5">
			<?php echo apply_filters('the_content', $post->post_content); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>