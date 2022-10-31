<?php


/*
 * Version: 1.0
 * Author: EL HAJJAMI JAWAD
 * Component : Full width image
 */


vc_map(
    array(
        'name' => 'Image with margin',
        'base' => 'img_with_margin',
        'icon' => 'icon-wpb-ui-empty_space',
        'description' => 'Image with margin',
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


if(!function_exists('img_with_margin')){
    function img_with_margin_output($atts, $content = null){
        
        $img = wp_get_attachment_image_url($atts['img'], 'full');

        $return = "<img data-aos='zoom-out-down' data-aos-offset='500'
        data-aos-duration='500' src='$img' class='img_with_margin'>";

        return $return;
    
    }
    add_shortcode('img_with_margin', 'img_with_margin_output');
}

?>