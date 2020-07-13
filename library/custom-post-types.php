<?php
// Custom Post Types
/**
 * 
 *
 * @package SKY
 */
 
// Testimonial Custom Post Type
//add_action( 'init', 'create_testimonial_post_type' );
//function create_testimonial_post_type() {
//	register_post_type( 'testimonial',
//		array(
//				'labels' => array(
//				'name' => __( 'Testimonials' ),
//				'singular_name' => __( 'Testimonials' ),
//				'add_new_item' => __( 'Add New Testimonial' ),
//				'edit_item' => __( 'Edit Testimonial' ),
//				'new_item' => __( 'New Testimonial' ),
//				'view' => __( 'View Testimonials' ),
//				'view_item' => __( 'View Testimonial' ),
//				'search_items' => __( 'Search Testimonial' ),
//				'not_found' => __( 'No Testimonial' ),
//				'not_found_in_trash' => __( 'No Testimonials found in Trash' ),
//				'parent' => __( 'Parent Testimonialss' ),
//			),
//		'public' => true,
//		'menu_icon' => 'dashicons-format-status',
//		'exclude_from_search' => false,
//		'has_archive' => false,
//		'rewrite' => array('slug' => 'testimonial', 'with_front'	=>	true),
//		'exclude_from_search' => false,
//		'menu_position' => 25,
//		'hierarchical'	=>	false,
//		'supports' => array( 'title', 'editor', 'revisions', 'thumbnail', 'page-attributes'),
//		'can_export' => true,
//		)
//	);
//}
//add_action( 'init', 'create_testimonial_taxonomies' );
//function create_testimonial_taxonomies() {
//	register_taxonomy( 'testimonial_category','testimonial',array('hierarchical'=>true,'label'=>'Categories', 'rewrite' => array('slug' => 'category')) );
//}
////Shortcode to display testimonials
//add_shortcode('testimonial-feature', 'testimonial_feature');
//function testimonial_feature( $atts ) { 
//	global $post;
//	$atts = shortcode_atts( array(
//		'id' => false,
//	), $atts, 'testimonial-feature' );	
//	$output = '';
//	$id = $atts['id'];
//	if( $id ) {
//		$posts_in = array_map( 'intval', explode( ',', $id ) );
//	}
//		$testimonials = new WP_Query(array( 'post_type' => 'testimonial', 'post__in' => $posts_in )); while ( $testimonials->have_posts() ) : $testimonials->the_post(); 
//		$output .= '<div class="testimonial-content">' . get_the_content() . '</div>'; 
//		$output .= '<img src="' . get_template_directory_uri() . '/images/quote-bg.png" class="quote-tag">';
//		if ( has_post_thumbnail() )  
//			$image = get_the_post_thumbnail( get_the_ID(), 'full', array('class' => 'img-thumb') );
//			$output .= '<div class="row thumb-caption"><div class="small-4 medium-3 large-2">' . $image . '</div>';	
//			$output .= '<div class="small-7 medium-8 large-9"> &ndash;' . get_the_title() . '</div></div>';	
//	endwhile; wp_reset_postdata();
//	return $output;
//}
//
//// Slider Custom Post Type
//add_action( 'init', 'create_slider_post_type' );
//function create_slider_post_type() {
//	register_post_type( 'slider',
//		array(
//			'labels' => array(
//				'name' => __( 'Sliders' ),
//				'singular_name' => __( 'Sliders' ),
//				'add_new_item' => __( 'Add New Slider' ),
//				'edit_item' => __( 'Edit Slider' ),
//				'new_item' => __( 'New Slider' ),
//				'view' => __( 'View Sliders' ),
//				'view_item' => __( 'View Slider' ),
//				'search_items' => __( 'Search Slider' ),
//				'not_found' => __( 'No Slider' ),
//				'not_found_in_trash' => __( 'No Sliders found in Trash' ),
//				'parent' => __( 'Parent Sliders' ),
//			),
//		'public' => true,
//		'menu_icon' => 'dashicons-images-alt',
//		'exclude_from_search' => false,
//		'has_archive' => true,
//		'rewrite' => array('slug' => 'Slider', 'with_front'	=>	true),
//		'exclude_from_search' => false,
//		'menu_position' => 25,
//		'hierarchical'	=>	false,
//		'supports' => array( 'title', 'editor', 'revisions', 'thumbnail', 'page-attributes'),
//		'can_export' => true,
//		)
//	);
//}
//add_action( 'init', 'create_slider_taxonomies' );
//function create_slider_taxonomies() {
//	register_taxonomy( 'slider_category','slider',array('hierarchical'=>true,'label'=>'Categories', 'rewrite' => array('slug' => 'category')) );
//
//}
//
