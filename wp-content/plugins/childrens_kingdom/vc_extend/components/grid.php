<?php


/*
 * Version: 1.0
 * Author: EL HAJJAMI JAWAD
 * Component : Follow us on instagram div
 */


 vc_map(
    array(
        'name' => 'Animated Grid Component',
        'base' => 'animated_grid',
        'icon' => 'icon-wpb-ui-empty_space',
        'description' => 'Animated Grid Component',
        'category' => 'CHILDREN\'S KINGDOM | Components',
        'params' => array(
            array(
                'type' => 'param_group',
                'heading' => esc_html__('Grid box', 'childrens_kingdom'),
                'param_name' => 'grid_boxes',
                'params' => array(
                    
                    array(
                        'type' => 'colorpicker',
                        'heading' => esc_html__('Background Color', 'childrens_kingdom'),
                        'param_name' => 'bgColor'
                    ),

                    array(
                        'type' => 'attach_images',
                        'heading' => esc_html__('Illustrations', 'childrens_kingdom'),
                        'param_name' => 'illustrations'
                    ),

                )
            ),
        )
    )
);

if(!function_exists('animated_grid')){
    function animated_grid_output($atts, $content = null){
       $return = "";
       $gridBoxes = vc_param_group_parse_atts($atts['grid_boxes']);
        $return .= "<div class='grid-container' data-component='slideshow'>";
        foreach($gridBoxes as $grid_box){
            $bgColor = $grid_box['bgColor'];
            $illustrations = $grid_box['illustrations'];
            $illustrations_ids = explode(',', $illustrations);
            $return .= "<div class='grid-box' role='list' style='background-color:".$bgColor.";'>";
            foreach($illustrations_ids as $image_id){
                $img = wp_get_attachment_image_url($image_id, 'full');
                $return .= "<div class='slide'>";
                    $return .= "<img class='img-container' src='$img'>";
                $return .= "</div>";
            }
            $return .= "</div>";
        }
        $return .= "</div>";

        return $return;

    }
    add_shortcode('animated_grid', 'animated_grid_output');
}
?>