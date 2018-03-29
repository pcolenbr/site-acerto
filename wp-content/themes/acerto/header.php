<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <meta name="title" content="<?php wp_title(); ?>s">
    <meta name="description" content="<?php echo get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <?php wp_head(); ?>
  </head>

  <body>
    <header class="navbar-header sticky-top">
      <nav class="navbar navbar-expand-md navbar-light main-navbar" role="navigation">
        <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar">
            <span class="navbar-toggler-icon"></span>
          </button>

          <a class="navbar-brand" href="#"><img class="logo-main-navbar" src="<?php echo get_template_directory_uri(); ?>/images/logo-meu-acerto.png"></a>

          <?php
            wp_nav_menu( array(
              'menu' => 'Menu Principal',
              'theme_location'  => 'primary',
              'depth'       => 1, // 1 = with dropdowns, 0 = no dropdowns.
              'container'     => 'div',
              'container_class' => 'collapse navbar-collapse',
              'container_id'    => 'main-navbar-container',
              'menu_class'    => 'navbar-nav ml-auto',
              'fallback_cb'   => 'WP_Bootstrap_Navwalker::fallback',
              'walker'      => new WP_Bootstrap_Navwalker()
            ));
          ?>

          <a class="btn btn-secondary ml-3 btn-md px-4" href="#" role="button">Entrar</a>
        </div>
      </nav>
    </header>