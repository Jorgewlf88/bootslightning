<?php
/**
 * Block styles.
 *
 * @package bootslightning
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function bootslightning_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/template-part',
		array(
			'name'  => 'bootslightning-sticky',
			'label' => __( 'Sticky header', 'bootslightning' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'bootslightning-flat-button',
			'label' => __( 'Flat button', 'bootslightning' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'bootslightning-button-shadow',
			'label' => __( 'Button with shadow', 'bootslightning' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/navigation',
		array(
			'name'  => 'bootslightning-navigation-button',
			'label' => __( 'Regular Button', 'bootslightning' ),
		)
	);

	register_block_style(
		'core/navigation',
		array(
			'name'         => 'bootslightning-navigation-primary',
			'label'        => __( 'Bootslightning Menu', 'bootslightning' ),
			'inline_style' => '.wp-block-navigation__responsive-container-open { color: var(--wp--preset--color--foreground); }',
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/navigation',
		array(
			'name'  => 'bootslightning-navigation-button-shadow',
			'label' => __( 'Button with shadow', 'bootslightning' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'bootslightning-list-underline',
			'label' => __( 'Underlined list items', 'bootslightning' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'bootslightning-box-shadow',
			'label' => __( 'Box shadow', 'bootslightning' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'bootslightning-box-shadow',
			'label' => __( 'Box shadow', 'bootslightning' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'bootslightning-box-shadow',
			'label' => __( 'Box shadow', 'bootslightning' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/site-title',
		array(
			'name'  => 'bootslightning-text-shadow',
			'label' => __( 'Text shadow', 'bootslightning' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-title',
		array(
			'name'  => 'bootslightning-text-shadow',
			'label' => __( 'Text shadow', 'bootslightning' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/heading',
		array(
			'name'  => 'bootslightning-text-shadow',
			'label' => __( 'Text shadow', 'bootslightning' ),
		)
	);
}
add_action( 'init', 'bootslightning_register_block_styles' );

/**
 * This is an example of how to unregister a core block style.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 * @see https://github.com/WordPress/gutenberg/pull/37580
 *
 * @since 1.0.0
 *
 * @return void
 */
function bootslightning_unregister_block_style() {
	wp_enqueue_script(
		'bootslightning-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		BOOTSLIGHTNING_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'bootslightning_unregister_block_style' );
