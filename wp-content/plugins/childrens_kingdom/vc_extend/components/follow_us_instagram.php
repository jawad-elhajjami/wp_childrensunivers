
<?php

/*
 * Version: 1.0
 * Author: EL HAJJAMI JAWAD
 * Component : Follow us on instagram div
 */

 vc_map(
    array(
        'name' => 'Follow us on instagram div',
        'base' => 'marquee_component',
        'icon' => 'icon-wpb-ui-empty_space',
        'descritpion' => 'Follow us on instagram div',   
        'category' => 'CHILDREN\'S KINGDOM | Components',
        'params' => array(
            array(
                'type' => 'vc_link',
                'heading' => esc_html__('Instagram link', 'childrens_kingdom'),
                'param_name' => 'instagram_link',
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Marquee text', 'childrens_kingdom'),
                'param_name' => 'marquee_text'
            )
        )
       )
 );

 if(!function_exists('marquee_component')){
    function marquee_component_output($atts, $content = null){
        $url = vc_build_link($atts['instagram_link']);
        $url = $url['url'];
        $return = "<marquee behavior='scroll' onmouseover='this.stop();' onmouseout='this.start();' scrollamount='20'>";

            $return .= "<div class='marquee_component'>";

            $return .= "<div>";
                $return .= "<h2 class='m-0'><a class='text-dark-blue' href='$url'>".$atts['marquee_text']."</a></h2>";
            $return .= "</div>";
            $return .= "<div class='red_circle'></div>";
            $return .= "<div>";
                $return .= "<h2 class='m-0'><a class='text-dark-blue' href='$url'>".$atts['marquee_text']."</a></h2>";
            $return .= "</div>";
            $return .= "<div class='red_circle'></div>";
            $return .= "<div>";
                $return .= "<h2 class='m-0'><a class='text-dark-blue' href='$url'>".$atts['marquee_text']."</a></h2>";
            $return .= "</div>";
            $return .= "<div class='red_circle'></div>";
            $return .= "<div>";
                $return .= "<h2 class='m-0'><a class='text-dark-blue' href='$url'>".$atts['marquee_text']."</a></h2>";
            $return .= "</div>";
            $return .= "<div class='red_circle'></div>";
            $return .= "<div>";
                $return .= "<h2 class='m-0'><a class='text-dark-blue' href='$url'>".$atts['marquee_text']."</a></h2>";
            $return .= "</div>";
            $return .= "<div class='red_circle'></div>";
            $return .= "<div>";
                $return .= "<h2 class='m-0'><a class='text-dark-blue' href='$url'>".$atts['marquee_text']."</a></h2>";
            $return .= "</div>";
                        
            $return .= "</div>";
        $return .= "</marquee>";
        
        return $return;

    }
    add_shortcode('marquee_component', 'marquee_component_output');
 }




?>