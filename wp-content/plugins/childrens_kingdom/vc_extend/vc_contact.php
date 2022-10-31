<?php


/*
 * Version: 1.0
 * Author: EL HAJJAMI JAWAD
 * Page : Contact
 */

vc_map(
    array(
        'name' => 'Contact page form container',
        'base' => 'contact_page_form_container',
        'icon' => 'icon-wpb-ui-empty_space',
        'category' => 'CHILDREN\'S KINGDOM | Contact',
        'params' => array(
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Section label','childrens_kingdom'),
                'param_name' => 'section_label'
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Section title','childrens_kingdom'),
                'param_name' => 'section_title'
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Form title','childrens_kingdom'),
                'param_name' => 'form_title'
            ),
            array(
                'type' => 'param_group',
                'heading' => esc_html__('Form field', 'childrens_kingdom'),
                'param_name' => 'contact_form_fields',
                'params' => array(
                    array(
                        'type' => 'textfield',
                        'heading' => esc_html__('Input type', 'childrens_kingdom'),
                        'param_name' => 'input_type'
                    ),
                    array(
                        'type' => 'textfield',
                        'heading' => esc_html__('Input name attribute', 'childrens_kingdom'),
                        'param_name' => 'input_name_attr'
                    ),
                    array(
                        'type' => 'textfield',
                        'heading' => esc_html__('Input placeholder', 'childrens_kingdom'),
                        'param_name' => 'input_placeholder'
                    ),
                    array(
                        'type' => 'textfield',
                        'heading' => esc_html__('Input label', 'childrens_kingdom'),
                        'param_name' => 'input_label'
                    ),
                )
            ),
            
        )
    )
);


vc_map(
    array(
        'name' => 'Contact info',
        'base' => 'contact_info',
        'icon' => 'icon-wpb-ui-empty_space',
        'category' => 'CHILDREN\'S KINGDOM | Contact',
        'params' => array(
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Phone number','childrens_kingdom'),
                'param_name' => 'phone_number'
            ),
            array(  
                'type' => 'textfield',
                'heading' => esc_html__('Email','childrens_kingdom'),
                'param_name' => 'email'
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Instagram account','childrens_kingdom'),
                'param_name' => 'instagram'
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Facebook page','childrens_kingdom'),
                'param_name' => 'fb_page'
            )
        )
    )
);

vc_map(
    array(
        'name' => 'Call to action section',
        'base' => 'call_to_action_section',
        'icon' => 'icon-wpb-ui-empty_space',
        'category' => 'CHILDREN\'S KINGDOM | Contact',
        'params' => array(
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Call to action title','childrens_kingdom'),
                'param_name' => 'call_to_action_title'
            ),
            array(
                'type' => 'vc_link',
                'heading' => esc_html__('Call to action link','childrens_kingdom'),
                'param_name' => 'cta_link'
            )
        )
    )
);


if(!function_exists('contact_page_form_container')){
    function contact_page_form_container_output($atts, $content = null){
        $form_fields = vc_param_group_parse_atts($atts['contact_form_fields']);
        $return = "<section name='contact_form_container' id='contact_form_container' class='flex jc-space-between p-10p ai-center'>";

            $return .= "<div class='section_info'>";
                $return .= "<p class='section_label_gradient_bg text-center m-0 text-white'>".$atts['section_label']."</p>";
                $return .= "<h1 class='text-white'>". $atts['section_title'] ."</h1>";
            $return .= "</div>";
            $return .= '<svg width="713" height="126" class="dotted_line_svg" viewBox="0 0 713 126" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M627 22C680 21 762.6 34.4 669 96C552 173 57 73 2 2" stroke="#33D1C1" stroke-width="3" stroke-linecap="round" stroke-dasharray="11 11"/>
            </svg>
                           
            ';
            $return .= "<form action='' method='post' id='contact_form'>";

                $return .= "<h2 class='m-0 mb-20'>".$atts['form_title']."</h2>";

                $return .= "<p id='msg'></p>";

                $return .= "<div class='form_fields'>";
                    foreach($form_fields as $field){
                        $return .= "<div class='form-row flex fd-column mb-20'>";
                            $return .= "<label for='".$field['input_name_attr']."'>";
                                $return .= $field['input_label'];
                            $return .= "</label>";
                            $return .= "<input type='".$field['input_type']."' id='".$field['input_name_attr']."' name='".$field['input_name_attr']."' placeholder='".$field['input_placeholder']."' class='bg-white'>";
                        $return .= "</div>";
                    }
                    $return .= "<button type='submit' name='send_contact_form' class='send_contact_form ck_button w-100'>ENOVYER".'<svg width="31" height="14" viewBox="0 0 31 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.875 6.125H0V7.875H21.875V6.125Z" fill="white"/>
                        <path d="M24.8076 10.2368C26.9404 8.31579 29.21 7.42105 30.5498 7C29.21 6.57895 26.9404 5.68421 24.8076 3.76316C23.3037 2.42105 22.374 1.02632 21.7998 0V7V14C22.374 12.9737 23.3037 11.5789 24.8076 10.2368Z" fill="white"/>
                        </svg>
                        '."</button>";
                $return .= "</div>";
            $return .= "</form>";

        $return .= "</section>";
        
        
        return $return;
    }
    add_shortcode('contact_page_form_container','contact_page_form_container_output');
}



if(!function_exists('contact_info')){
    function contact_info_output($atts, $content = null){
        
        $return = "<section name='childrens_kingdom_contact_informations' id='contact_info'>";
            $return .= "<div class='contact_info_container'>";
                if(isset($atts['email'])){
                    $return .= '<p><svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.9866 1.87781C17.9866 1.85725 18.0008 1.83723 17.9998 1.81689L12.5068 7.10968L17.9933 12.2334C17.9965 12.1968 17.9866 12.1599 17.9866 12.1225V1.87781Z" fill="#FF4A4A"/>
                    <path d="M11.6688 7.92407L9.42636 10.0815C9.31289 10.1907 9.16634 10.2455 9.01971 10.2455C8.87613 10.2455 8.73254 10.1931 8.61985 10.088L6.38356 8.00415L0.861328 13.327C0.995603 13.3752 1.13973 13.4127 1.29066 13.4127H16.7488C16.973 13.4127 17.1832 13.3444 17.3659 13.2426L11.6688 7.92407Z" fill="#FF4A4A"/>
                    <path d="M9.01309 8.85128L17.3961 0.77595C17.2063 0.663103 16.9854 0.587402 16.7486 0.587402H1.29046C0.982103 0.587402 0.699556 0.707131 0.479492 0.889736L9.01309 8.85128Z" fill="#FF4A4A"/>
                    <path d="M0 2.07446V12.1223C0 12.2377 0.0265108 12.3489 0.0552896 12.4551L5.50902 7.20333L0 2.07446Z" fill="#FF4A4A"/>
                    </svg>'.$atts['email'].
                    '</p>';
                }
                if(isset($atts['instagram'])){
                    $return .= '<p>'.'<svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.4758 4.38503C6.78745 4.38503 4.61902 6.4455 4.61902 9C4.61902 11.5545 6.78745 13.615 9.4758 13.615C12.1641 13.615 14.3326 11.5545 14.3326 9C14.3326 6.4455 12.1641 4.38503 9.4758 4.38503ZM9.4758 12.0003C7.73852 12.0003 6.31825 10.6548 6.31825 9C6.31825 7.3452 7.73429 5.99967 9.4758 5.99967C11.2173 5.99967 12.6333 7.3452 12.6333 9C12.6333 10.6548 11.2131 12.0003 9.4758 12.0003ZM15.6641 4.19625C15.6641 4.79471 15.1568 5.27268 14.5312 5.27268C13.9014 5.27268 13.3984 4.79069 13.3984 4.19625C13.3984 3.60181 13.9057 3.11983 14.5312 3.11983C15.1568 3.11983 15.6641 3.60181 15.6641 4.19625ZM18.8808 5.28874C18.8089 3.84681 18.4623 2.56956 17.3506 1.51724C16.2432 0.464911 14.899 0.135557 13.3815 0.0632601C11.8175 -0.0210867 7.12983 -0.0210867 5.56586 0.0632601C4.0526 0.131541 2.70843 0.460895 1.59674 1.51322C0.485044 2.56555 0.14266 3.8428 0.0665747 5.28473C-0.0221916 6.77084 -0.0221916 11.2251 0.0665747 12.7113C0.138433 14.1532 0.485044 15.4304 1.59674 16.4828C2.70843 17.5351 4.04838 17.8644 5.56586 17.9367C7.12983 18.0211 11.8175 18.0211 13.3815 17.9367C14.899 17.8685 16.2432 17.5391 17.3506 16.4828C18.4581 15.4304 18.8047 14.1532 18.8808 12.7113C18.9696 11.2251 18.9696 6.77485 18.8808 5.28874ZM16.8603 14.3058C16.5306 15.093 15.8923 15.6995 15.0596 16.0168C13.8127 16.4868 10.8538 16.3783 9.4758 16.3783C8.09781 16.3783 5.13471 16.4828 3.89198 16.0168C3.06349 15.7036 2.42522 15.0971 2.09129 14.3058C1.59674 13.1209 1.71086 10.3094 1.71086 9C1.71086 7.69062 1.60096 4.87504 2.09129 3.69419C2.42099 2.90695 3.05927 2.30046 3.89198 1.98315C5.13893 1.51322 8.09781 1.62167 9.4758 1.62167C10.8538 1.62167 13.8169 1.51724 15.0596 1.98315C15.8881 2.29644 16.5264 2.90293 16.8603 3.69419C17.3549 4.87906 17.2407 7.69062 17.2407 9C17.2407 10.3094 17.3549 13.125 16.8603 14.3058Z" fill="#FF4A4A"/>
                    </svg>
                    '.$atts['instagram'].'</p>';
                }
                if(isset($atts['phone_number'])){
                    $return .= "<p>" . '<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.7162 10.5022C13.7366 10.5022 12.7747 10.349 11.8633 10.0478C11.4167 9.89542 10.8676 10.0352 10.595 10.3151L8.796 11.6732C6.70963 10.5595 5.42446 9.27475 4.32596 7.20404L5.64408 5.45188C5.98654 5.10988 6.10938 4.61029 5.96221 4.14154C5.65971 3.22529 5.50604 2.26392 5.50604 1.28392C5.50608 0.575958 4.93013 0 4.22221 0H1.28387C0.575958 0 0 0.575958 0 1.28387C0 9.39846 6.60158 16 14.7162 16C15.4241 16 16 15.424 16 14.7161V11.786C16 11.0781 15.424 10.5022 14.7162 10.5022Z" fill="#FF4A4A"/>
                    </svg>
                    ' . $atts['phone_number'] . "</p>";
                }
                if(isset($atts['fb_page'])){
                    $return .= "<p>" . '<svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.10362 10.125L9.6088 6.86742H6.45016V4.75348C6.45016 3.86227 6.8914 2.99355 8.30606 2.99355H9.74203V0.220078C9.74203 0.220078 8.43892 0 7.19302 0C4.59178 0 2.89149 1.56023 2.89149 4.38469V6.86742H0V10.125H2.89149V18H6.45016V10.125H9.10362Z" fill="#FF4A4A"/>
                    </svg>
                    ' . $atts['fb_page'] . "</p>";
                }
                
            $return .= "</div>";
            $return .= '<svg class="lego_svg" width="125" height="100" viewBox="0 0 125 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M72.6487 14.2899L72.8428 15.0143L73.5673 14.8202L84.8992 11.7839L94.3947 47.2218L13.3255 68.9442L3.82993 33.5063L15.1618 30.4699L15.8863 30.2758L15.6921 29.5514L12.9749 19.4104L30.777 14.6404L33.4942 24.7813L33.6883 25.5058L34.4128 25.3117L54.3163 19.9785L55.0408 19.7844L54.8466 19.06L52.1294 8.91902L69.9315 4.14897L72.6487 14.2899Z" stroke="#33D1C1" stroke-width="1.5"/>
                <path d="M115.396 79.6987L115.099 80.3873L115.788 80.6844L120.83 82.8588L113.862 99.0144L76.0171 82.6927L82.9847 66.5372L88.0266 68.7116L88.7152 69.0086L89.0122 68.3199L90.9426 63.8441L98.7155 67.1964L96.7852 71.6722L96.4882 72.3609L97.1769 72.6579L106.637 76.738L107.326 77.0351L107.623 76.3464L109.553 71.8705L117.326 75.2228L115.396 79.6987Z" stroke="#FFC231" stroke-width="1.5"/>
                </svg>
            ';
        $return .= "</section>";
        
        return $return;
    }
    add_shortcode('contact_info','contact_info_output');
}


if(!function_exists('call_to_action_section')){
    function call_to_action_section_ouput($atts, $content = null){

        $link = vc_build_link($atts['cta_link']);

        $return = "<section name='take_a_look_at_our_store' id='cta_section'>";
            $return .= "<div class='container'>";
                if(isset($atts['call_to_action_title'])){
                    $return .= "<h1 class='text-white w-50'>".$atts['call_to_action_title']. '<svg width="205" style="display:block;" height="14" viewBox="0 0 205 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.00035 10.8137C39.0257 7.12018 129.165 0.939658 201.52 5.76576" stroke="url(#paint0_linear_2_2728)" stroke-width="6" stroke-linecap="round"/>
                    <defs>
                    <linearGradient id="paint0_linear_2_2728" x1="-2.66581" y1="8.14068" x2="201.66" y2="8.14068" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FF4A4A"/>
                    <stop offset="1" stop-color="#FFC231"/>
                    </linearGradient>
                    </defs>
                    </svg>
                    ' ."</h1>";
                }
                if(isset($atts['cta_link'])){
                    $return .= "<a href='".$link['url']."' class='ck_button'>".$link['title'].'<svg width="31" height="14" viewBox="0 0 31 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21.875 6.125H0V7.875H21.875V6.125Z" fill="white"/>
                    <path d="M24.8076 10.2368C26.9404 8.31579 29.21 7.42105 30.5498 7C29.21 6.57895 26.9404 5.68421 24.8076 3.76316C23.3037 2.42105 22.374 1.02632 21.7998 0V7V14C22.374 12.9737 23.3037 11.5789 24.8076 10.2368Z" fill="white"/>
                    </svg>
                    '."</a>";
                    
                }

            $return .= "</div>";
        $return .= "</section>";
        

        return $return;
    
    }
    add_shortcode('call_to_action_section','call_to_action_section_ouput');
}



?>