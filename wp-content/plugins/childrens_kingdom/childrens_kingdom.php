<?php
/*
 * Plugin Name:  CHILDREN'S KINGDOM
 * Description: CHILDREN'S KINGDOM theme 
 * Version: 1.0
 * Author: EL HAJJAMI JAWAD
 * Author URI: https://www.childrens-kingdom.com
 */


if (!defined('WPINC')) {
	die;
}

if(!class_exists("childrens_kingdom"))
{
    class childrens_kingdom
    {
        public function __construct($file)
        {
            $this->file = $file;
            add_action('init', array(&$this,'childrens_kingdom_init_configuration'));
        }

        public function childrens_kingdom_init_configuration()
        {
            if(function_exists('vc_disable_frontend')) {
				$this->childrens_kingdom_vc_extend();
			}
        }

        public function childrens_kingdom_vc_extend()
        {
            require_once(dirname(__file__) . '/vc_extend/components/newsletter_div.php');
            require_once(dirname(__file__) . '/vc_extend/components/follow_us_instagram.php');
            require_once(dirname(__file__) . '/vc_extend/components/grid.php');
            require_once(dirname(__file__) . '/vc_extend/components/hero_section.php');
            require_once(dirname(__file__) . '/vc_extend/components/product_info_section.php');
            require_once(dirname(__file__) . '/vc_extend/components/paragraph_section.php');
            require_once(dirname(__file__) . '/vc_extend/components/fullwidth_image.php');
            require_once(dirname(__file__) . '/vc_extend/components/img_with_margin.php');
            require_once(dirname(__file__) . '/vc_extend/components/two_images_grid.php');
            require_once(dirname(__file__) . '/vc_extend/components/multiple_images.php');
            require_once(dirname(__file__) . '/vc_extend/components/reviews_slider.php');
            require_once(dirname(__file__) . '/vc_extend/components/bgImage.php');
            require_once(dirname(__file__) . '/vc_extend/components/scrollDownAnimation.php');
            require_once(dirname(__file__) . '/vc_extend/components/newsletter_success_message.php');
            require_once(dirname(__file__) . '/vc_extend/vc_contact.php');
        }
        
    }
    $data = new CHILDRENS_KINGDOM(__FILE__);
}
