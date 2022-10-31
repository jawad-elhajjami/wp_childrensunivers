
<?php

/*
 * Version: 1.0
 * Author: EL HAJJAMI JAWAD
 * Component : Newsletter/discount div
 */

 vc_map(
    array(
        'name' => 'Newsletter/Discount div',
        'base' => 'newsletter_component',
        'icon' => 'icon-wpb-ui-empty_space',
        'descritpion' => 'Newsletter/Discount div',   
        'category' => 'CHILDREN\'S KINGDOM | Components',
        'params' => array(
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Title', 'childrens_kingdom'),
                'param_name' => 'title',
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Description', 'childrens_kingdom'),
                'param_name' => 'desc',
            ),
        )
       )
 );

 if(!function_exists('newsletter_component')){
    function newsletter_component_output($atts, $content = null){
        
        $return = "<div class='newsletter_component_container'>";
            $return .= "<img class='yellow_circle_svg1' src='".site_url()."/wp-content/uploads/2022/09/yellow%20circle%201.svg'>";
            $return .= "<img class='yellow_circle_svg2' src='".site_url()."/wp-content/uploads/2022/09/yellow%20circle%202.svg'>";
            $return .= "<div class='white_bg_card w-60'>";
                $return .= "<h2 class='m-0 text-center'>".$atts['title']."</h2>";
                $return .= "<p class='text-center w-60 mb-40 opacity-70 m-auto'>".$atts['desc']."</p>";
                $return .= "<form action='' method='POST'>";
					$return .= "<div class='input m-auto'>";
						$return .= "<input type='email' name='newsletter_email' placeholder='Email...' class='w-400 ptb-15 text-dark-blue padding-2'>";
						$return .= "<button type='submit' class='arrow_btn'>";
							$return .= '<svg width="31" height="14" viewBox="0 0 31 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M21.875 6.125H0V7.875H21.875V6.125Z" fill="#23234A"/>
								<path d="M24.8076 10.2368C26.9404 8.31579 29.21 7.42105 30.5498 7C29.21 6.57895 26.9404 5.68421 24.8076 3.76316C23.3037 2.42105 22.374 1.02632 21.7998 0V7V14C22.374 12.9737 23.3037 11.5789 24.8076 10.2368Z" fill="#23234A"/>
							</svg>';
						$return .= "</button>";
					$return .= "</div>";
				$return .= "</form>";
            $return .= "</div>";
        $return .= "</div>";
        
        return $return;

    }
    add_shortcode('newsletter_component', 'newsletter_component_output');
 }

?>