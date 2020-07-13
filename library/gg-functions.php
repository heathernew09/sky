<?php
/**
 * Additional GG functions 
 *
 * @package SKY
 * @since SKY 1.0.0
 */

/* Global variable for calling directory uri in case */
/* we need it in-line and can't use the function */
$GLOBALS['smpts_template_url'] = get_template_directory_uri();

/* Adds ACF Options Menu */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}
add_action('acf/init', 'my_acf_init');
function my_acf_init() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'testimonial',
			'title'				=> __('Testimonial'),
			'description'		=> __('A custom testimonial block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'testimonial', 'quote' ),
		));
	}
}

function my_acf_block_render_callback( $block ) {
	
	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/template-parts/block/content-testimonial.php") ) ) {
		include( get_theme_file_path("/template-parts/block/content-testimonial.php") );
	}
}
/* Move Yoast to bottom */
function yoasttobottom() { return 'low'; }
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');