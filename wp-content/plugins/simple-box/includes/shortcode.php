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
		 $Content .='	<span><img class="imgbox_wp" src="'.  esc_attr( $atts['imagen']) .'">' .'</span>';
		 $Content .='</div>';
    }
	return $Content;
	
}
add_shortcode( 'column_box', 'column_box_shortcode' );
   
function general_box_shortcode( $atts, $content = null ) {
    extract(shortcode_atts(array(
    'imagen'  => '',
	'title'   => '',
	'contact1' => '',
	'position1' => '',
	'email1' => '',
	'contact2' => '',
	'position2' => '',
	'email2' => '',
	'contact3' => '',
	'position3' => '',
	'email3' => '',
	'address' => '',
	'phone' => '',
	'list' => '',
  ), $atts)); 
	
  // var_dump ($atts);
	
	if (esc_attr( $atts['list'])){
		$ContentList = '<ul>';	
		$list_incolumn = explode(";",esc_attr( $atts['list']));
		foreach ($list_incolumn as $list){		
		$ContentList .= '<li>' . $list . '</li>';
		}
		$ContentList .= '</ul>';
	}

		 $Content ='<div class="columns">';
		 $Content .='	<span><img width="800px" height="600px";  src="'.  esc_attr( $atts['imagen']) .'">' .'</span>';
		 $Content .='	 <div class="listing-wrapper-overcolumn">';
		 $Content .='          	<span class="listing-item">';
		 $Content .='                 <span class="listing-item-content-column col-left">';
		 $Content .='					  <h3 class="listing-item-title" style="text-align:right; padding-bottom: 20px;">'.  esc_attr( $atts['title']) . '</h3>';
		 $Content .='				  <p><strong>' . esc_attr( $atts['contact1']) .  '</strong></p>';
		 $Content .='				  <p>' . esc_attr( $atts['position1']) .  '</p>';
		 $Content .='				  <p>' . esc_attr( $atts['email1']) .  '</p><hr/>';
		 $Content .='				  <p><strong>' . esc_attr( $atts['contact2']) .  '</strong></p>';
		 $Content .='				  <p>' . esc_attr( $atts['position2']) .  '</p>';
		 $Content .='				  <p>' . esc_attr( $atts['email2']) .  '</p><hr/>';
		 $Content .='				  <p><strong>' . esc_attr( $atts['contact3']) .  '</strong></p>';
		 $Content .='				  <p>' . esc_attr( $atts['position2']) .  '</p>';
		 $Content .='				  <p>' . esc_attr( $atts['email3']) .  '</p><hr/>';
		 $Content .='				  <p>' . esc_attr( $atts['address']) .  '</p>';
		 $Content .='				  <p>' . esc_attr( $atts['phone']) .  '</p>';
		 $Content .=                 $ContentList;
		  
		 $Content .='                </span>';
		 $Content .='           </span>';
		 $Content .=      '</div>';
		 $Content .='</div>';
    
		 return $Content;
}
add_shortcode( 'general_box', 'general_box_shortcode' );
?>