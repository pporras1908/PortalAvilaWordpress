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
	 $Content .='	<span class="listing-item "style="text-align : center !important;">';
     $Content .='         <span class="listing-item-heading">';
     $Content .='                 <img alt="' .  esc_attr( $atts['alt']) .'"';
     $Content .='					  class="listing-item-image imgbox" ';
	 $Content .='				  src="'.  esc_attr( $atts['imagen']) .'">';
     $Content .='         </span>';
	 $Content .='           <h2 class="listing-item-title" >';
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
/*
function media_box_shortcode( $atts, $content = null ) {
    extract(shortcode_atts(array(
    'url' => '',
    'alt'    => '',
	'imagen'    => '',
	'title'    => '',
	'list1'    => '',
	'list2'    => '',
	'paragraph1' => '',
	'paragraph2' => '',
	'paragraph3' => '',
	'paragraph4' => '',
	'paragraph5' => '',
  ), $atts)); 
  
		if (esc_attr( $atts['list1'])){
			$ContentList = '<ul>';	
			$list_incolumn = explode(";",esc_attr( $atts['list']));
			foreach ($list_incolumn as $list){		
				$ContentList .= '<li>' . $list . '</li>';
			}
				$ContentList .= '</ul>';
		}

		if (esc_attr( $atts['list2'])){
			$ContentList = '<ul>';	
			$list_incolumn = explode(";",esc_attr( $atts['list']));
			foreach ($list_incolumn as $list){		
				$ContentList .= '<li>' . $list . '</li>';
			}
			$ContentList .= '</ul>';
		}
  
     $Content ='<div class="listing-wrapper">';
	 $Content .='	<a href="'. esc_url( $atts['url'] ) .'">';
	 $Content .='	<span class="listing-item "style="text-align : center !important;">';
     $Content .='         <span class="listing-item-heading">';
     $Content .='                 <img alt="' .  esc_attr( $atts['alt']) .'"';
     $Content .='					  class="listing-item-image imgbox" ';
	 $Content .='				  src="'.  esc_attr( $atts['imagen']) .'">';
     $Content .='         </span>';
	 $Content .='           <h2 class="listing-item-title" >';
     $Content .=             esc_attr( $atts['title']);
     $Content .='           </h2>';
     $Content .='         <span class="listing-item-content">';
     $Content .='             <span >';
	 $Content .='                  <p>' . esc_attr( $atts['paragraph1']) .  '</p>';
	 $Content .='                  <p>' . esc_attr( $atts['paragraph2']) .  '</p>';
	 $Content .='                  <p>' . esc_attr( $atts['paragraph3']) .  '</p>';
	 $Content .='                  <p>' . esc_attr( $atts['paragraph4']) .  '</p>';
	 $Content .='                  <p>' . esc_attr( $atts['paragraph5']) .  '</p>';
	 $Content .='             </span>';
     $Content .='        </span>';
     $Content .='   </span>';
	 $Content .='	</a>';
	 $Content .='</div>	';

	return $Content;
	
}
add_shortcode( 'box', 'media_box_shortcode' );
*/
function column_box_shortcode( $atts, $content = null ) {
    extract(shortcode_atts(array(
    'imagen'  => '',
	'title'   => '',
	'align'   => '',
    'descrip' => '',
	'extend' => '',
	'extend_long' => '',
	'list' => '',
  ), $atts)); 
	
	
	if (esc_attr( $atts['list'])){
		$ContentList = '<ul>';	
		$list_incolumn = explode(";",esc_attr( $atts['list']));
		foreach ($list_incolumn as $list){		
		$ContentList .= '<li>' . $list . '</li>';
		}
		$ContentList .= '</ul>';
	}

     if (esc_attr( $atts['align'])=='LEFT') {
		 $Content ='<div class="columns">';
		 $Content .='	<span><img src="'.  esc_attr( $atts['imagen']) .'">' .'</span>';
		 $Content .='	 <div class="listing-wrapper-column">';
		 $Content .='          	<span class="listing-item">';
		 $Content .='                 <span class="listing-item-content-column col-left">';
		 $Content .='					  <h2 class="listing-item-title" style="text-align:right; padding-bottom: 20px;">'.  esc_attr( $atts['title']) . '</h2>';
		 $Content .='				  <p>' . esc_attr( $atts['descrip']) .  '</p>';
		 $Content .='				  <p>' . esc_attr( $atts['extend']) .  '</p>';
		 $Content .='				  <p>' . esc_attr( $atts['extend_long']) .  '</p>';
		 $Content .=                 $ContentList;
		 $Content .='                </span>';
		 $Content .='           </span>';
		 $Content .=      '</div>';
		 $Content .='</div>';
    }
	if (esc_attr( $atts['align'])=='RIGHT') {
		 $Content ='<div class="columns">';
		 $Content .='	 <div class="listing-wrapper-column">';
		 $Content .='          	<span class="listing-item">';
		 $Content .='                 <span class="listing-item-content-column col-right">';
		 $Content .='					  <h2 class="listing-item-title" style="text-align:left; padding-bottom: 20px;">'.  esc_attr( $atts['title']) . '</h2>';
		 $Content .='				  <p>' . esc_attr( $atts['descrip']) .  '</p>';
		 $Content .='				  <p>' . esc_attr( $atts['extend']) .  '</p>';
		 $Content .='				  <p>' . esc_attr( $atts['extend_long']) .  '</p>';
		 $Content .=                 $ContentList;
		 $Content .='                </span>';
		 $Content .='           </span>';
		 $Content .=      '</div>';
		 $Content .='	<span><img src="'.  esc_attr( $atts['imagen']) .'">' .'</span>';
		 $Content .='</div>';
    }
	return $Content;
	
}
add_shortcode( 'column_box', 'column_box_shortcode' );
   
?>