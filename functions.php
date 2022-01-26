<?php

if ( ! function_exists( 'bmb_sandbox_support' ) ) :
	function bmb_sandbox_support()  {

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}
	add_action( 'after_setup_theme', 'bmb_sandbox_support' );
endif;

/**
 * Enqueue scripts and styles.
 */
function bmb_sandbox_scripts() {
	// Enqueue theme stylesheet.
	wp_enqueue_style( 'bmb-sandbox-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
}

add_action( 'wp_enqueue_scripts', 'bmb_sandbox_scripts' );
