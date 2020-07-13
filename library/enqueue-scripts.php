<?php
/**
 * Enqueue scripts/css
 *
 * @package SKY
 * @since SKY 1.0.0
 */

if (! function_exists('skyScripts')) :
	function skyScripts() {

	// STYLES
	// Foundation flexbox stylesheet - CDN VERSION
	//wp_enqueue_style( 'main-stylesheet', 'https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.0/css/foundation-flex.min.css' );
	// Foundation Motion UI - needed for JS plugins - CDN VERSION
	wp_enqueue_style( 'motion-ui-stylesheet', 'https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.2/motion-ui.css' );
	// Main stylesheet
	wp_enqueue_style( 'style', get_stylesheet_uri() );
    // Padding Support stylesheet
	//wp_enqueue_style( 'style-pad', get_template_directory_uri() . '/assets/css/flexible-padding.css');
    // Motion stuffs
	//wp_enqueue_style( 'style-motion', get_template_directory_uri() . '/assets/css/movement.css');

	// SCRIPTS
	// Fontawesome
	wp_enqueue_script( 'Fontawesome', 'https://use.fontawesome.com/2a91c877b5.js', array(), '4.7.0', false );

	// Kill WordPress version of jquery
	wp_deregister_script( 'jquery' );
	// Google hosted jQuery in header - because damn plugins
	wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js', array(), '2.2.4', false );
	// Foundation JS
	wp_enqueue_script( 'foundation-full', 'https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.3/js/foundation.min.js', array('jquery'), '6.5.3', true );
	// Gallery JS
	wp_enqueue_script( 'gallery-js','https://unpkg.com/flipping@1.1.0/dist/flipping.web.js', '1.1.0', true );
    // Custom JS
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/javascript/main.js', array('jquery'), '1.0.0', true );
    
    //wp_enqueue_script( 'foundation-interchange', 'https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.3/js/plugins/foundation.interchange.min.js', array('jquery'), '6.5.3', true );
        
    //wp_enqueue_script( 'foundation-util', 'https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.3/js/plugins/foundation.util.mediaQuery.min.js', array('jquery'), '6.5.3', true );
        
	// WP STUFF
	// Add the comment-reply library on pages where it is necessary
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
	add_action( 'wp_enqueue_scripts', 'skyScripts' );
endif;