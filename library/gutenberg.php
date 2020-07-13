<?php
if ( ! function_exists( 'sky_gutenberg_support' ) ) :
	function sky_gutenberg_support() {
    // Add foundation color palette to the editor
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => __( 'Primary Color', 'black' ),
            'slug' => 'primary',
            'color' => '#000',
        ),
        array(
            'name' => __( 'Secondary Color', 'blue' ),
            'slug' => 'secondary',
            'color' => '#071739',
        ),
        array(
            'name' => __( 'Success Color', 'mdblue' ),
            'slug' => 'success',
            'color' => '#3adb76',
        ),
        array(
            'name' => __( 'Warning color', 'ltblue' ),
            'slug' => 'warning',
            'color' => '#709fdc',
        ),
        array(
            'name' => __( 'Alert color', 'bbblue' ),
            'slug' => 'alert',
            'color' => '#b9d5fd',
        )
    ) );
	}
	add_action( 'after_setup_theme', 'sky_gutenberg_support' );
endif;
//Not activated - to activate uncomment from function.php

