<?php get_header(); ?>
<!-- Contenido de p�gina de inicio -->
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