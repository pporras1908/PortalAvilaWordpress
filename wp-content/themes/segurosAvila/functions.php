<?php

/**
 * Crear nuestros menus gestionables desde el
 * administrador de Wordpress.
 */

function menus_themes_SA() {
  register_nav_menus(
    array(
      'navegation' => __( 'Menu Navegacion'),
    )
  );
}
add_action( 'init', 'menus_themes_SA' );


/**
 * Crear una zonan de widgets que podremos gestionar
 * fácilmente desde administrador de Wordpress.
 */

function widgets_themes_SA(){
 register_sidebar(
   array(
       'name'          => __( 'Sidebar' ),
       'id'            => 'sidebar',
       'before_widget' => '<div class="widget">',
       'after_widget'  => '</div>',
       'before_title'  => '<h3>',
       'after_title'   => '</h3>',
   )
 );
}
add_action('init','widgets_themes_SA');



/**
 * Filtrar resultados de búsqueda para que solo muestre
 * posts en el listado
 */

function buscar_solo_posts($query) {
 if($query->is_search) {
   $query->set('post_type','post');
 }
 return $query;
}
add_filter('pre_get_posts','buscar_solo_posts');

/**
 * configuracion de logo
 * 
 */
add_theme_support( 'custom-logo', array(
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );

/**
 * configuracion de header principal
 * 
 */
$defaults = array(
	'width'                  => 640,
	'height'                 => 640,
	'flex-height'            => true,
	'flex-width'             => true,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
	'default-text-color'     => '',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
	'video' => true
	
);
add_theme_support( 'custom-header', $defaults );


function segurosAvila_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
	wp_enqueue_style( 'segurosAvila-style', get_stylesheet_uri(), $dependencies ); 
}

function segurosAvila_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '', true );
}

add_action( 'wp_enqueue_scripts', 'segurosAvila_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'segurosAvila_enqueue_scripts' );

function segurosAvila_wp_setup() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'segurosAvila_wp_setup' );



function login_logo_url() {
  return home_url();
}
add_filter( 'login_headerurl', 'login_logo_url' );

function login_logo_url_title() {
  return 'pfcevolution Software';
}
add_filter( 'login_headertitle', 'login_logo_url_title' );

// Logo Personalizado login
function my_login_logo() { ?>
  <style type="text/css">
    #login h1 a, .login h1 a {
      background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png);
      height: 184px;
      width: 284px;
      background-size: cover;
      background-repeat: no-repeat;
    }
  </style>
<?php }//end my_login_logo()
add_action( 'login_enqueue_scripts', 'my_login_logo' );

add_action('wp_footer', 'my_custom_footer_code');
function my_custom_footer_code(){
?>
<style type="text/css">
    .footer-logo{
      background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logopfc.jpg);
      height: 184px;
      width: 284px;
      background-repeat: no-repeat;
          }
  </style>
<?php
};

function wp_sa_scripts_basic()
{
  // Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/js/custom-script.js' );

	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wp_sa_scripts_basic' );