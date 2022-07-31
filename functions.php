<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bootslightning
 * @since 1.0.0
 */

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'BOOTSLIGHTNING_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Add theme support for block styles and editor style.
 *
 * @since 1.0.0
 *
 * @return void
 */
function bootslightning_setup() {
	add_theme_support( 'wp-block-styles' );
	add_editor_style( './assets/css/style-shared.min.css' );

	/*
	 * Load additional block styles.
	 * See details on how to add more styles in the readme.txt.
	 */
	$styled_blocks = [ 'button', 'file', 'latest-comments', 'latest-posts', 'quote', 'search' ];
	foreach ( $styled_blocks as $block_name ) {
		$args = array(
			'handle' => "bootslightning-$block_name",
			'src'    => get_theme_file_uri( "assets/css/blocks/$block_name.min.css" ),
			'path'   => get_theme_file_path( "assets/css/blocks/$block_name.min.css" ),
		);
		// Replace the "core" prefix if you are styling blocks from plugins.
		wp_enqueue_block_style( "core/$block_name", $args );
	}

}
add_action( 'after_setup_theme', 'bootslightning_setup' );

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function bootslightning_styles() {

	wp_enqueue_style(
		'bootslightning-bootstrap-css',
		get_theme_file_uri( 'assets/css/bootstrap/bootstrap.min.css' ),
		[],
		BOOTSLIGHTNING_VERSION
	);

	wp_enqueue_style(
		'bootslightning-theme-css',
		get_theme_file_uri( 'assets/css/style.min.css' ),
		[],
		BOOTSLIGHTNING_VERSION
	);

	wp_enqueue_style(
		'bootslightning-style',
		get_stylesheet_uri(),
		[],
		BOOTSLIGHTNING_VERSION
	);
	wp_enqueue_style(
		'bootslightning-shared-styles',
		get_theme_file_uri( 'assets/css/style-shared.min.css' ),
		[],
		BOOTSLIGHTNING_VERSION
	);

	wp_enqueue_script(
		'bootslightning-bootstrap-js',
		get_theme_file_uri( 'assets/js/bootstrap/bootstrap.bundle.min.js' ),
		[],
		BOOTSLIGHTNING_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'bootslightning_styles' );

// Filters.
require_once get_theme_file_path( 'inc/filters.php' );

// Block variation example.
require_once get_theme_file_path( 'inc/register-block-variations.php' );

// Block style examples.
require_once get_theme_file_path( 'inc/register-block-styles.php' );

// Block pattern and block category examples.
require_once get_theme_file_path( 'inc/register-block-patterns.php' );
