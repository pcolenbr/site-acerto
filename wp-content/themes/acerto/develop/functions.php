<?php
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

add_action ( 'after_setup_theme', 'acerto_setup' );
function acerto_setup() {
  register_nav_menu ( 'primary', __ ( 'Menu principal', 'acerto' ) );
}

function load_utilities() {
  load_styles();
  load_scripts();
}
add_action ('wp_enqueue_scripts', 'load_utilities');

function load_scripts(){
  wp_enqueue_script('jquery');

  wp_enqueue_script('dt-bootstrap-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js');
  wp_enqueue_script('dt-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');
  wp_enqueue_script('dt-jquery-mask', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js');

  wp_enqueue_script('dt-slick-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js');
  wp_enqueue_script('dt-wow', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js');


  wp_enqueue_script('dt-main', get_template_directory_uri() . '/scripts/main.js', array('dt-bootstrap', 'dt-bootstrap-popper'), '1.0.0', true);
}

function load_styles() {
  wp_enqueue_style( 'bootstrap-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
  wp_enqueue_style( 'slick-carousel-style', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');

  wp_enqueue_style( 'main-style', get_template_directory_uri() . '/styles/main.css');
  wp_enqueue_style( 'footer-style', get_template_directory_uri() . '/styles/footer.css');
  wp_enqueue_style( 'navbar-style', get_template_directory_uri() . '/styles/navbar.css');
  wp_enqueue_style( 'index-style', get_template_directory_uri() . '/styles/index.css');
  wp_enqueue_style( 'perguntas-frequentes-style', get_template_directory_uri() . '/styles/perguntas-frequentes.css');
  wp_enqueue_style( 'contato-style', get_template_directory_uri() . '/styles/contato.css');
}

add_action ( 'login_enqueue_scripts', 'login' );
function login() {
  $html = '';

  $html .= '<style type="text/css">';
  $html .= '    body.login div#login h1 a {';
  $html .= '        background-image: url("' . get_stylesheet_directory_uri () . '/images/logo-meu-acerto.png");';
  $html .= '        background-position: center;';
  $html .= '        background-size: cover;';
  $html .= '        width: 60%;';
  $html .= '        height: 100px;';
  $html .= '    }';
  $html .= '</style>';
  $html .= '<link rel="shortcut icon" href="' . get_stylesheet_directory_uri () . '/images/favicon.ico" />';

  echo $html;
}

add_theme_support( 'post-thumbnails' ); 

?>
