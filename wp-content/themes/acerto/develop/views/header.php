<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WVH65DK');</script>
    <!-- End Google Tag Manager -->

    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <meta name="title" content="<?php wp_title(); ?>s">
    <meta name="description" content="<?php echo get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/favicon.ico">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <?php wp_head(); ?>
    <!-- W3TC-include-css -->
  </head>

  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WVH65DK"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <nav class="main-navbar" role="navigation">

      <div class="collapse d-lg-none" id="menu-responsivo">
        <?php
          wp_nav_menu( array(
            'menu' => 'Menu Principal',
            'theme_location'  => 'primary',
            'depth'       => 2, // 1 = with dropdowns, 0 = no dropdowns.
            'container'     => 'div',
            'container_class' => 'main-navbar-responsive-container text-center mb-1',
            'menu_class'    => 'navbar-nav ml-auto'
          ));
        ?>

        <div class="text-center mb-4">
          <a class="btn-primary btn-acerto d-block botao-consulte-seu-cpf-responsive" href="https://portal.meuacerto.com.br/consumidor/autenticacao/cadastrar">CONSULTE SEU CPF</a>
        </div>
      </div>

      <div class="d-inline-block mr-3">
        <a class="navbar-brand d-none d-lg-inline-block mr-2 ml-2" href="<?php echo get_home_url(); ?>"><img class="logo-main-navbar" src="<?php echo get_template_directory_uri(); ?>/images/logo-acerto-branca.png"></a>
        <a class="navbar-brand d-inline-block d-lg-none mr-2 ml-2" href="<?php echo get_home_url(); ?>"><img class="logo-main-navbar" src="<?php echo get_template_directory_uri(); ?>/images/logo-acerto-verde.png"></a>

        <a href="<?php echo get_home_url(); ?>"><img class="logo-cdl-main-navbar ml-2" src="<?php echo get_template_directory_uri(); ?>/images/logo-cdl-bh.png"></a>
      </div>


      <?php
        wp_nav_menu( array(
          'menu' => 'Menu Principal',
          'theme_location'  => 'primary',
          'depth'       => 2, // 1 = with dropdowns, 0 = no dropdowns.
          'container'     => 'div',
          'container_class' => 'main-navbar-container d-none d-md-inline-block float-right pt-1',
          'menu_class'    => 'navbar-nav ml-auto'
        ));
      ?>

      <a class="menu-responsive-icon mr-1 d-lg-none float-right" href="#" data-toggle="collapse" data-target="#menu-responsivo"><i class="material-icons">menu</i></a>
    </nav>

    <a class="botao-consulte-seu-cpf-container positon-relative d-none d-lg-block" href="https://portal.meuacerto.com.br/consumidor/autenticacao/cadastrar">
      <div class="botao-consulte-seu-cpf botao-consulte-seu-cpf-hover font-weight-normal">É GRATUITO</div>

      <div class="botao-consulte-seu-cpf botao-consulte-seu-cpf-front text-color-amarelo font-weight-normal">CONSULTE SEU CPF</div>
    </a>

    