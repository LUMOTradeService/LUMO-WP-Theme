<?php
/**
 * Plugin Name:       LUMO Blocks
 * Description:       LUMO blocks.
 * Version:           1.0.0
 * Requires at least: 6.8
 * Requires PHP:      7.4
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       icons
 *
 * @package CreateBlock
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function lumopos_register_block_styles() {
    register_block_style( 'core/paragraph', array(
		'name'         => 'icon',
		'label'        => __( 'Icon', 'lumopos' ),
		'inline_style' => '.wp-block-button.is-style-secondary .wp-element-button {
			font-family: var(--wp--preset--font-family--icons);
			speak: never;
    		font-style: normal;
    		font-weight: normal;
    		font-variant: normal;
    		font-size: 48px;
    		text-transform: none;
    		line-height: 1;
			background-color: var(--wp--preset--color--secondary);
		}'
    ) );
}
add_action( 'init', 'lumopos_register_block_styles');

/**
 * Registers the block(s) metadata from the `blocks-manifest.php` and registers the block type(s)
 * based on the registered block metadata. Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://make.wordpress.org/core/2025/03/13/more-efficient-block-type-registration-in-6-8/
 * @see https://make.wordpress.org/core/2024/10/17/new-block-type-registration-apis-to-improve-performance-in-wordpress-6-7/
 */
function create_block_icons_block_init() {
	wp_register_block_types_from_metadata_collection( __DIR__ . '/build', __DIR__ . '/build/blocks-manifest.php' );
}
add_action( 'init', 'create_block_icons_block_init' );
