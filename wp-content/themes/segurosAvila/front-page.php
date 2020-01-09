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
      <?php 
	   $custom_logo_id = get_theme_mod( 'custom_logo' );
	   $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	   
	  ?>
	  <div >
	   <div class="row">
		<div class="col-md-6">
			 <a href="<?php echo esc_url( home_url( '/' ) ); ?>" ><img class="logo" src="<?php echo $image[0]; ?>" alt=""></a>
			 <!-- Navigation -->
			<nav >
			  <ul class="main-nav ">
				<?php wp_nav_menu( array( 'theme_location' => 'navegation' ) ); ?>
			  </ul>
			</nav>
		</div>
		<div class="col-md-6">
		<?php if (has_custom_header())  { 
				the_custom_header_markup();
		} else { ?>
				<img class="header-home" src="<?php header_image(); ?>"
				height="<?php echo get_custom_header()->height; ?>" 
				width="<?php echo get_custom_header()->width; ?>" alt="" />
	<?php } ?>
		
		</div>
	</div>
	 <h1><?php bloginfo('name'); ?></h1>
	  <h2><?php bloginfo('description'); ?></h2>
	</header>
	

	
	<!-- Contenido de pagina de inicio -->

	<?php if ( have_posts() ) : the_post(); ?>
	  <section>
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	  </section>
	<?php endif; ?>
<!-- Archivo de barra lateral por defecto -->

<?php get_sidebar(); ?>

<!-- Archivo de pi� global de Wordpress -->
<?php get_footer(); ?>