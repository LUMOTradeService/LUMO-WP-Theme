<?php
/**
 * LUMO POS functions and definitions.
 *
 * @package LUMOPOS
 * @subpackage LUMO_POS
 * @since LUMO POS 1.0
 */

add_action( 'init', 'lumopos_register_block_styles');
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


function lumopos_block_editor_assets()
{
	wp_register_script(
		'lumopos-unregister-styles',
		get_theme_file_uri('assets/js/unregister-styles.js'),
		array(
			'wp-blocks',
			'wp-dom-ready',
			'wp-edit-post'
		)
	);
}

add_action('enqueue_block_editor_assets', 'lumopos_block_editor_assets');