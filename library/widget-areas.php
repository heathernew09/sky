<?php
/**
 * Register widget areas
 *
 * @package Sky
 * @since Sky 1.0.0
 */

if ( ! function_exists( 'sky_sidebar_widgets' ) ) :
function sky_sidebar_widgets() {
	register_sidebar(array(
	  'id' => 'sidebar-widgets',
	  'name' => __( 'Sidebar widgets', 'sky' ),
	  'description' => __( 'Drag widgets to this sidebar container.', 'sky' ),
	  'before_widget' => '<article id="%1$s" class="widget %2$s">',
	  'after_widget' => '</article>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));

	register_sidebar(array(
	  'id' => 'footer-widgets',
	  'name' => __( 'Footer widgets', 'sky' ),
	  'description' => __( 'Drag widgets to this footer container', 'sky' ),
	  'before_widget' => '<article id="%1$s" class="large-4 columns widget %2$s">',
	  'after_widget' => '</article>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));
}

add_action( 'widgets_init', 'sky_sidebar_widgets' );
endif;
