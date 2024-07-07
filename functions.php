<?php
/**
 * vividmono functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package vividmono
 * @since vividmono 1.0
 */
declare( strict_types = 1 );

if ( ! function_exists( 'vividmono_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress functionalities.
	 *
	 * @since vividmono 1.0
	 *
	 * @return void
	 */
	function vividmono_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'vividmono' );
	}

endif;

add_action( 'after_setup_theme', 'vividmono_support' );

if ( ! function_exists( 'vividmono_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since vividmono 1.0
	 *
	 * @return void
	 */
	function vividmono_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'vividmono-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'vividmono-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'vividmono_styles' );
