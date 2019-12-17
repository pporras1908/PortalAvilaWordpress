<?php
// Shortcode
function simple_box_shortcode( $atts, $content = null ) {
    extract(shortcode_atts(array(
    'url' => '',
    'alt'    => '',
	'imagen'    => '',
	'title'    => '',
	'alt'    => '',
    'descrip' => '',
  ), $atts)); 
  
  
     $Content ='<div class="listing-wrapper">';
	 $Content .='	<a href="'. esc_url( $atts['url'] ) .'">';
	 $Content .='	<span class="listing-item">';
     $Content .='         <span class="listing-item-heading">';
     $Content .='                 <img alt="' .  esc_attr( $atts['alt']) .'"';
     $Content .='					  class="listing-item-image imgbox" ';
	 $Content .='				  src="'.  esc_attr( $atts['imagen']) .'">';
     $Content .='         </span>';
	 $Content .='           <h2 class="listing-item-title">';
     $Content .=             esc_attr( $atts['title']);
     $Content .='           </h2>';
     $Content .='         <span class="listing-item-content">';
     $Content .='             <span >';
     $Content .='                 <span>' . esc_attr( $atts['descrip']); 
     $Content .='             </span></span>';
     $Content .='        </span>';
     $Content .='   </span>';
	 $Content .='	</a>';
	 $Content .='</div>	';

	return $Content;
	
}
add_shortcode( 'box', 'simple_box_shortcode' );
   
?>