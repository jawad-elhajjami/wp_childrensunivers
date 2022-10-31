<?php


/*
 * Version: 1.0
 * Author: EL HAJJAMI JAWAD
 * Component : Two images grid
 */


vc_map(
    array(
        'name' => 'Two images grid',
        'base' => 'two_images_grid',
        'icon' => 'icon-wpb-ui-empty_space',
        'description' => 'Two images grid',
        'category' => 'CHILDREN\'S KINGDOM | Components',
        'params' => array(
            array(
                'type' => 'attach_image',
                'heading' => esc_html__('Image 1', 'childrens_kingdom'),
                'param_name' => 'img1',
            ),
            array(
                'type' => 'attach_image',
                'heading' => esc_html__('Image 2', 'childrens_kingdom'),
                'param_name' => 'img2',
            ),
            
        )
    )
);


if(!function_exists('two_images_grid')){
    function two_images_grid_output($atts, $content = null){
        
        $img1 = wp_get_attachment_image_url($atts['img1'], 'full');
        $img2 = wp_get_attachment_image_url($atts['img2'], 'full');

        $return = "<div class='two_images_grid'>";
            $return .= "<img data-aos='zoom-in-right' data-aos-offset='500'
            data-aos-duration='500' src='$img1'>";
            $return .= "<img data-aos='zoom-in-left' data-aos-offset='500'
            data-aos-duration='500' src='$img2'>";
        $return .= "</div>";

        return $return;
    
    }
    add_shortcode('two_images_grid', 'two_images_grid_output');
}

?>