<?php
// If uninstall is not called from WordPress, exit
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    exit();
}
 
delete_option( 'plugin_option_name' );
 
// For site options in Multisite
delete_site_option( $option_name );  
 
 
 
// Drop a custom db table
global $wpdb;
$wpdb->query( "DROP TABLE IF EXISTS {$wpdb->prefix}mytable" );
 
// Para borrar meta datos concretos por ejemplo de post_type=post
$args = array(
    'posts_per_page' => -1,
    'post_type' => 'post',
    'post_status' => 'any'
);
$posts = get_posts( $args );
 
foreach( $posts as $post ) {
    delete_post_meta( $post->ID, 'my_post_meta' );
}
 
// Para borrar los post de un post_type concreto incluyendo comentarios, meta datos y relaciones con otros post y taxonomias
$args = array(
    'posts_per_page' => -1,
    'post_type' => 'my_post_type',
    'post_status' => 'any'
);
$posts = get_posts( $args );
 
foreach( $posts as $post ) {
	wp_delete_post( $post->ID, true );
}