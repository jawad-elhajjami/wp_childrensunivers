<?php
/**
* Template Name: Dashboard
*/
acf_form_head();

get_header();

echo do_shortcode( '[woocommerce_my_account]' );

get_footer(); 
?>