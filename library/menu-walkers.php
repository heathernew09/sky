<?php
/**
 * Customize the output of menus for Foundation top bar
 *
 * @package SKY
 * @since SKY 1.0.0
 */

 // Big thanks to Brett Mason (https://github.com/brettsmason) for the awesome walker

 if ( ! class_exists( 'SKY_Top_Barleft_Walker' ) ) :
 class SKY_Top_Barleft_Walker extends Walker_Nav_Menu {

 	function start_lvl( &$output, $depth = 0, $args = array() ) {
 			$indent = str_repeat("\t", $depth);
      $output .= "\n$indent<ul class=\"dropdown menu vertical align-left\" data-toggle>\n";
 	}
 }
 endif;
 if ( ! class_exists( 'SKY_Top_Barright_Walker' ) ) :
 class SKY_Top_Barright_Walker extends Walker_Nav_Menu {

 	function start_lvl( &$output, $depth = 0, $args = array() ) {
 			$indent = str_repeat("\t", $depth);
      $output .= "\n$indent<ul class=\"dropdown menu vertical align-right\" data-toggle>\n";
 	}
 }

endif;
if ( ! class_exists( 'SKY_Top_Barcenter_Walker' ) ) :
 class SKY_Top_Barcenter_Walker extends Walker_Nav_Menu {

 	function start_lvl( &$output, $depth = 0, $args = array() ) {
 			$indent = str_repeat("\t", $depth);
      $output .= "\n$indent<ul class=\"dropdown menu vertical align-center\" data-toggle>\n";
 	}
 }

endif;
 if ( ! class_exists( 'SKY_Mobile_Walker' ) ) :
 class SKY_Mobile_Walker extends Walker_Nav_Menu {
 	function start_lvl( &$output, $depth = 0, $args = array() ) {
 			$indent = str_repeat("\t", $depth);
 			$output .= "\n$indent<ul class=\"vertical nested menu\">\n";
 	}
 }
endif;
if ( ! class_exists( 'SKY_Footleft_Walker' ) ) :
 class SKY_Footleft_Walker extends Walker_Nav_Menu {
 	function start_lvl( &$output, $depth = 0, $args = array() ) {
 			$indent = str_repeat("\t", $depth);
 			$output .= "\n$indent<ul class=\"vertical nested menu align-left\">\n";
 	}
 }
endif;
if ( ! class_exists( 'SKY_Footright_Walker' ) ) :
 class SKY_Footright_Walker extends Walker_Nav_Menu {
 	function start_lvl( &$output, $depth = 0, $args = array() ) {
 			$indent = str_repeat("\t", $depth);
 			$output .= "\n$indent<ul class=\"vertical nested menu align-right\">\n";
 	}
 }
endif;
if ( ! class_exists( 'SKY_Footcenter_Walker' ) ) :
 class SKY_Footcenter_Walker extends Walker_Nav_Menu {
 	function start_lvl( &$output, $depth = 0, $args = array() ) {
 			$indent = str_repeat("\t", $depth);
 			$output .= "\n$indent<ul class=\"vertical nested menu align-center\">\n";
 	}
 }
endif;
