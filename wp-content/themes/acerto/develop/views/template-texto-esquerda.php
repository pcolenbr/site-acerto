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

<section class="hero-section-com-bg position-relative" style="background-image: url('<?php echo $img_url?>');">
	<div class="container">
		<h1 class="absolute-align-center-left w-75 text-color-white"><?php echo $post->post_title; ?></h1>
	</div>
</section>

<section>
	<div class="container">
		<div class="template-texto-esquerda-container w-75 mb-4 pb-5">
			<?php echo apply_filters('the_content', $post->post_content); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>