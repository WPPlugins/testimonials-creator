<?php
	
	
				
	$html.='<div class="tmls_item" style="border-color:'.$border_color.';" data-bgimg="'.$bg_img.'" data-imageradius="'.$image_radius.'" data-logoimage="'.$logo_img.'">
	
    
    
    <div class="tmls_text" style="'.$text_font_family.' '.$text_font_color.' font-size:'.$text_font_size.';">'.$testimonial_text.'</div>';
	
    if($usedimages == 'avatars_and_logos') {
        $html.='<div class="tmls_image '.$image_radius.'" style="'.$bg_img.'"></div>';
    }
    
                    
	$html.='<div class="tmls_name" style="'.$name_font_family.' '.$name_font_color.' font-size:'.$neme_font_size.'; font-weight:'.$neme_font_weight.';">'.get_post_meta($post[$i]->ID, 'name', true).'</div>
            <div class="tmls_position" style="'.$position_font_family.' '.$position_font_color.' font-size:'.$position_font_size.';">'.$position.$company.'</div>';
					
    include('rating.php');
				
	$html.='</div>';
?>