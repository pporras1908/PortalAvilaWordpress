<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
  
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <?php wp_head(); ?>
  </head>
  
  <body>
    <header>
      <h1><?php bloginfo('name'); ?></h1>
	  <h2><?php bloginfo('description'); ?></h2>
	  <?php 
	   $custom_logo_id = get_theme_mod( 'custom_logo' );
	   $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    ?><a href="http://localhost/portalavila/" >
    <img class="logo" src="<?php echo $image[0]; ?>" alt=""></a>
    </header>
	
	 <nav>
      <ul class="main-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'navegation' ) ); ?>
      </ul>
    </nav>