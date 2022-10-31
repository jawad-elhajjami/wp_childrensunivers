<?php


/*
 * Version: 1.0
 * Author: EL HAJJAMI JAWAD
 * Component : Newsletter success message
 */


vc_map(
    array(
        'name' => 'Newsletter Success Message',
        'base' => 'newsletter_success_message',
        'icon' => 'icon-wpb-ui-empty_space',
        'category' => 'CHILDREN\'S KINGDOM | Components',
        'params' => array(
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Message', 'childrens_kingdom'),
                'param_name' => 'msg',
            )
        )
    )
);


if(!function_exists('newsletter_success_message')){
    function newsletter_success_message_output($atts, $content = null){

        $return = "<div class='newsletter_success_message mb-100'>";

            $return .= '<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_m3ixidnq.json"  background="transparent"  speed="1"  style="width: 400px; height: 400px;" autoplay></lottie-player>';

            $return .= "<h1 class='worksans-font'>".$atts['msg']."</h1>";

            $return .= '<a href='.site_url().' class="ck_button w-400">Go back<svg width="31" height="14" viewBox="0 0 31 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M21.875 6.125H0V7.875H21.875V6.125Z" fill="white"/>
            <path d="M24.8076 10.2368C26.9404 8.31579 29.21 7.42105 30.5498 7C29.21 6.57895 26.9404 5.68421 24.8076 3.76316C23.3037 2.42105 22.374 1.02632 21.7998 0V7V14C22.374 12.9737 23.3037 11.5789 24.8076 10.2368Z" fill="white"/>
            </svg>            
            </a>';
            
        $return .= "</div>";
        
        
        return $return;
    }
    add_shortcode('newsletter_success_message', 'newsletter_success_message_output');
}

?>