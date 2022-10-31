<?php
/**
* Template Name: Rédaction article
*/
acf_form_head();

get_header();

?>
<div id="content">
	<?php
the_post_thumbnail();

	acf_form(array(
		'post_id'		=> 'new_post',
		'post_title'	=> false,
		'post_content'	=> false,
		'submit_value' => __("Envoyer", 'acf'),
		'updated_message' => '<script>swal({title: "Envoyé avec succès",text: "Merci pour votre article",icon: "success",button: "Fermer",});</script>',
		'fields' => array(
			'_post_title',
			'_post_content',
		),
		'new_post'		=> array(
			'post_type'		=> 'post',
			'post_status'	=> 'draft'
		),
	));
	
	?>
	
</div>

<?php get_footer(); ?>