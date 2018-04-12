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
          <div>
            <a class="navbar-brand d-inline-block mr-2" href="<?php echo get_home_url(); ?>"><img class="logo-main-navbar" src="<?php echo get_template_directory_uri(); ?>/images/logo-meu-acerto.png"></a>
            <span class="separador-vertical-verde"></span>
            <a href="<?php echo get_home_url(); ?>"><img class="logo-main-navbar ml-2" src="<?php echo get_template_directory_uri(); ?>/images/logo-cdl-transparente.png"></a>
          </div>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar-container">
            <span class="navbar-toggler-icon"></span>
          </button>

          <?php
            wp_nav_menu( array(
              'menu' => 'Menu Principal',
              'theme_location'  => 'primary',
              'depth'       => 2, // 1 = with dropdowns, 0 = no dropdowns.
              'container'     => 'div',
              'container_class' => 'collapse navbar-collapse',
              'container_id'    => 'main-navbar-container',
              'menu_class'    => 'navbar-nav ml-auto',
              'fallback_cb'   => 'WP_Bootstrap_Navwalker::fallback',
              'walker'      => new WP_Bootstrap_Navwalker()
            ));
          ?>
        </div>
      </nav>
    </header>