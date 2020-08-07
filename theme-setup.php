<?php

require_once 'vendor/autoload.php';

/**
 * Config Handlebars.
 */
use FractalHandlebars\Renderer;

$view_engine = new Renderer(
	get_template_directory_uri() . '/frontend/src/components',
	get_template_directory_uri() . '/frontend/assets',
	get_template_directory_uri() . '/frontend/src/components-map.json'
);

/**
 * Config theme.
 */
add_action(
	'after_setup_theme',
	function() {
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'html5' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'responsive-embeds' );
	}
);

/**
 * Enqueue CSS & JS. Remove jquery from the frontend only.
 */
add_action(
	'wp_enqueue_scripts',
	function() {
		wp_enqueue_style(
			'main-css',
			get_template_directory_uri() . '/frontend/dist/bundle.css',
			false,
			'1.0'
		);

		wp_enqueue_script(
			'script',
			get_template_directory_uri() . '/frontend/dist/bundle.js',
			false,
			1.0,
			true
		);

		if ( ! is_admin() ) {
			wp_deregister_script( 'jquery' );
		}
	}
);

/**
 * Remove unnecessary things in <head>.
 */
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
remove_action( 'wp_head', 'wp_generator' );

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
