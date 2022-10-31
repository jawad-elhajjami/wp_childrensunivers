<?php


/*
 * Version: 1.0
 * Author: EL HAJJAMI JAWAD
 * Component : Full width image
 */


vc_map(
    array(
        'name' => 'Full width image',
        'base' => 'full_width_image',
        'icon' => 'icon-wpb-ui-empty_space',
        'description' => 'Full width image',
        'category' => 'CHILDREN\'S KINGDOM | Components',
        'params' => array(
            array(
                'type' => 'attach_image',
                'heading' => esc_html__('Image', 'childrens_kingdom'),
                'param_name' => 'img',
            ),
        )
    )
);


if(!function_exists('full_width_image')){
    function full_width_image_output($atts, $content = null){
        
        $img = wp_get_attachment_image_url($atts['img'], 'full');

        $return = "<img src='$img' class='full_width_image'>";

        return $return;
    
    }
    add_shortcode('full_width_image', 'full_width_image_output');
}

?>