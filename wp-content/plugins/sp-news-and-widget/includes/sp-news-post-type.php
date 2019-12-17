<?php

if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Initialization function
add_action('init', 'sp_cpt_news_init');

function sp_cpt_news_init() {
  // Create new News custom post type
    $news_labels = array(
                    'name'                 => _x('Noticias', 'sp-news-and-widget'),
                    'singular_name'        => _x('Noticias', 'sp-news-and-widget'),
                    'add_new'              => _x('Agregar Noticias', 'sp-news-and-widget'),
                    'add_new_item'         => __('Agregar Noticias', 'sp-news-and-widget'),
                    'edit_item'            => __('Editar Noticias Item', 'sp-news-and-widget'),
                    'new_item'             => __('Nueva Noticias Item', 'sp-news-and-widget'),
                    'view_item'            => __('Ver Noticias Item', 'sp-news-and-widget'),
                    'search_items'         => __('Buscar  Noticias Items','sp-news-and-widget'),
                    'not_found'            =>  __('No Noticias encontradas', 'sp-news-and-widget'),
                    'not_found_in_trash'   => __('No Noticias Items encontradas en el Trash', 'sp-news-and-widget'),
                    'parent_item_colon'    => '',
                    'menu_name'          => _x( 'Noticias', 'admin menu', 'sp-news-and-widget' )
  );
  $news_args = array(
                    'labels'              => $news_labels,
                    'public'              => true,
                    'publicly_queryable'  => true,
                    'exclude_from_search' => false,
                    'show_ui'             => true,
                    'show_in_menu'        => true, 
                    'query_var'           => true,
                    'rewrite'             => array( 
                    							'slug'       => 'news',
                    							'with_front' => false
                							),
                    'capability_type'     => 'post',
                    'has_archive'         => true,
                    'hierarchical'        => false,
                    'menu_position'       => 5,
                	'menu_icon'   		  => 'dashicons-feedback',
                    'supports'            => array('title','editor','thumbnail','excerpt','comments', 'author'),
					'show_in_rest'		  => true,
                    'taxonomies'          => array('post_tag')
  );
    
	register_post_type( WPNW_POST_TYPE, apply_filters( 'sp_news_registered_post_type_args', $news_args ) );
}

/* Register Taxonomy */
add_action( 'init', 'news_taxonomies');

function news_taxonomies() {
    $labels = array(
                'name'              => _x( 'Categoria', 'sp-news-and-widget' ),
                'singular_name'     => _x( 'Categoria', 'sp-news-and-widget' ),
                'search_items'      => __( 'Buscar Categoria', 'sp-news-and-widget' ),
                'all_items'         => __( 'Todas las Categorias', 'sp-news-and-widget' ),
                'parent_item'       => __( 'Parent Categoria', 'sp-news-and-widget' ),
                'parent_item_colon' => __( 'Parent Categoria:', 'sp-news-and-widget' ),
                'edit_item'         => __( 'Editar Categoria', 'sp-news-and-widget' ),
                'update_item'       => __( 'Update Categoria', 'sp-news-and-widget' ),
                'add_new_item'      => __( 'Agregar New Categoria', 'sp-news-and-widget' ),
                'new_item_name'     => __( 'Nueva Categoria Name', 'sp-news-and-widget' ),
                'menu_name'         => __( 'Categoria', 'sp-news-and-widget' ),
    );

    $args = array(
                'hierarchical'      => true,
                'labels'            => $labels,
                'show_ui'           => true,
                'show_admin_column' => true,
                'query_var'         => true,
				'show_in_rest'		=> true,
                'rewrite'           => array( 'slug' => WPNW_CAT ),
    );
    register_taxonomy( WPNW_CAT, array( WPNW_POST_TYPE ), $args );
}

function wpnaw_rewrite_flush() {
	sp_cpt_news_init();
    news_taxonomies();

    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'wpnaw_rewrite_flush' );