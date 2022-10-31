<?php


/*
 * Version: 1.0
 * Author: EL HAJJAMI JAWAD
 * Component : Prodcut features section
 */


vc_map(
    array(
        'name' => 'Paragraph component',
        'base' => 'paragraph_component',
        'icon' => 'icon-wpb-ui-empty_space',
        'description' => 'Paragraph component',
        'category' => 'CHILDREN\'S KINGDOM | Components',
        'params' => array(
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Top title', 'childrens_kingdom'),
                'param_name' => 'top_title',
            ),
            array(
                'type' => 'textarea',
                'heading' => esc_html__('Paragraph', 'childrens_kingdom'),
                'param_name' => 'paragraph',
            ),
            
        )
    )
);


if(!function_exists('paragraph_component')){
    function paragraph_component_output($atts, $content = null){

        $return = "<section data-aos='fade-up-left' data-aos-offset='500'
        data-aos-duration='500' id='paragraph_section'>";

            $return .= "<h3>".$atts['top_title']."</h3>";
            $return .= "<p class='opacity-70'>".$atts['paragraph']."</p>";


        $return .= "</section>";


        return $return;
    }
    add_shortcode('paragraph_component', 'paragraph_component_output');
}


?>