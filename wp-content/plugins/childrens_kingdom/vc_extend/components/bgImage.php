<?php


/*
 * Version: 1.0
 * Author: EL HAJJAMI JAWAD
 * Component : Div with Background image and content on the center
 */


vc_map(
    array(
        'name' => 'Call to action',
        'base' => 'cta_div',
        'icon' => 'icon-wpb-ui-empty_space',
        'category' => 'CHILDREN\'S KINGDOM | Components',
        'params' => array(
            array(
                'type' => 'textfield',
                'heading' => esc_html__('title', 'childrens_kingdom'),
                'param_name' => 'title',
            ),
            array(
                'type' => 'textarea',
                'heading' => esc_html__('description', 'childrens_kingdom'),
                'param_name' => 'desc'
            ),
            array(
                'type' => 'vc_link',
                'heading' => esc_html__('CTA', 'childrens_kingdom'),
                'param_name' => 'cta_link'
            ),
            array(
                'type' => 'attach_image',
                'heading' => esc_html__('Background', 'childrens_kingdom'),
                'param_name' => 'background'
            )
        )
    )
);

if(!function_exists('cta_div')){
    function cta_div_output($atts, $content = null){
        
        $link = vc_build_link($atts['cta_link']);
        $url = $link['url'];
        $link_title = $link['title'];
        $img = wp_get_attachment_image_url($atts['background'], 'full');

        $return = "<section id='cta_div' data-aos='flip-down' data-aos-offset='500'
        data-aos-duration='500' class='m-auto mt-100' style='background:url($img)'>";
           
            $return .= "<div class='cta_content mb-100 p-10p'>";
                
                $return .= "<div class='underlined_text'>";
                    $return .= "<h1 class='w-75 m-auto'>".$atts['title']."</h1>";
                    $return .= '
                    <svg width="100" height="9" viewBox="0 0 100 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.00154 5.83435C19.8916 4.35584 62.161 1.96506 96.1181 4.23001" stroke="url(#paint0_linear_2_2158)" stroke-width="6" stroke-linecap="round"/>
                    <defs>
                    <linearGradient id="paint0_linear_2_2158" x1="0.335949" y1="4.67584" x2="96.1823" y2="4.05057" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FF4A4A"/>
                    <stop offset="1" stop-color="#FFC231"/>
                    </linearGradient>
                    </defs>
                    </svg>
                    ';
                $return .= "</div>";
                $return .= "<p class='mb-40 w-60'>".$atts['desc']."</p>";
                $return .= '<a href='.$url.' class="ck_button w-400"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.75 4.5H13.5C13.5 3.30653 13.0259 2.16193 12.182 1.31802C11.3381 0.474106 10.1935 0 9 0C7.80653 0 6.66193 0.474106 5.81802 1.31802C4.97411 2.16193 4.5 3.30653 4.5 4.5H2.25C1.65326 4.5 1.08097 4.73705 0.65901 5.15901C0.237053 5.58097 0 6.15326 0 6.75L0 14.25C0.00119089 15.2442 0.396661 16.1973 1.09966 16.9003C1.80267 17.6033 2.7558 17.9988 3.75 18H14.25C15.2442 17.9988 16.1973 17.6033 16.9003 16.9003C17.6033 16.1973 17.9988 15.2442 18 14.25V6.75C18 6.15326 17.7629 5.58097 17.341 5.15901C16.919 4.73705 16.3467 4.5 15.75 4.5ZM9 1.5C9.79565 1.5 10.5587 1.81607 11.1213 2.37868C11.6839 2.94129 12 3.70435 12 4.5H6C6 3.70435 6.31607 2.94129 6.87868 2.37868C7.44129 1.81607 8.20435 1.5 9 1.5ZM16.5 14.25C16.5 14.8467 16.2629 15.419 15.841 15.841C15.419 16.2629 14.8467 16.5 14.25 16.5H3.75C3.15326 16.5 2.58097 16.2629 2.15901 15.841C1.73705 15.419 1.5 14.8467 1.5 14.25V6.75C1.5 6.55109 1.57902 6.36032 1.71967 6.21967C1.86032 6.07902 2.05109 6 2.25 6H4.5V7.5C4.5 7.69891 4.57902 7.88968 4.71967 8.03033C4.86032 8.17098 5.05109 8.25 5.25 8.25C5.44891 8.25 5.63968 8.17098 5.78033 8.03033C5.92098 7.88968 6 7.69891 6 7.5V6H12V7.5C12 7.69891 12.079 7.88968 12.2197 8.03033C12.3603 8.17098 12.5511 8.25 12.75 8.25C12.9489 8.25 13.1397 8.17098 13.2803 8.03033C13.421 7.88968 13.5 7.69891 13.5 7.5V6H15.75C15.9489 6 16.1397 6.07902 16.2803 6.21967C16.421 6.36032 16.5 6.55109 16.5 6.75V14.25Z" fill="white"/>
                </svg>
                '.$link_title.'</a>';

            $return .= "</div>";


        $return .= "</section>";


        return $return;
    }
    add_shortcode('cta_div', 'cta_div_output');
}