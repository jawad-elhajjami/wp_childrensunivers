<?php


/*
 * Version: 1.0
 * Author: EL HAJJAMI JAWAD
 * Component : Multiple images animation
 */


vc_map(
    array(
        'name' => 'Multiple images component',
        'base' => 'multiple_images',
        'icon' => 'icon-wpb-ui-empty_space',
        'category' => 'CHILDREN\'S KINGDOM | Components',
        'params' => array(
            array(
                'type' => 'attach_images',
                'heading' => esc_html__('Image', 'childrens_kingdom'),
                'param_name' => 'multi_images',
            ),
        )
    )
);

if(!function_exists('multiple_images')){
    function multiple_images_output($atts, $content = null){
        $images = $atts['multi_images'];
        $images_ids = explode(',', $images);

        $return = "<div class='container-general'>";
            $return .= "<div class='gallery-wrap wrap-effect-2'>";
            foreach($images_ids as $image_id){
                $img = wp_get_attachment_image_url($image_id, 'full');
                $return .= "<div class='item' style='background:url($img);background-size:cover;'></div>";
            }
            $return .= "</div>";
        $return .= "</div>";
        
        return $return;
    }
    add_shortcode('multiple_images','multiple_images_output');
}


?>