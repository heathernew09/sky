<?php
/**
 * Author: Greteman Group
 * URL: http://www.gretemangroup.com
 *
 * SKY functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @package SKY
 * @since SKY 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/menu-walkers.php' );
/** NEW Add menu walkers for top-bar and off-canvas */
//require_once( 'library/class-sky-top-bar-walker.php' );
//require_once( 'library/class-sky-mobile-walker.php' );

// Replace 'older/newer' post links with numbered navigation
require_once( 'library/page-navi.php');

/** Return entry meta information for posts */
//require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
//require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
//require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

// Register custom post types
require_once( 'library/custom-post-types.php' );

/** Additional GG functions */
require_once( 'library/gg-functions.php' );

/** Theme specific functions */
require_once( 'library/theme-specific-functions.php' );

/** Gutenberg editor support */
require_once( 'library/gutenberg.php' );