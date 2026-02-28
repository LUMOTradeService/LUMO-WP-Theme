<?php
/**
 * LUMO POS functions and definitions.
 *
 * @package LUMOPOS
 * @subpackage LUMO_POS
 * @since LUMO POS 1.0
 */

add_action( 'init', 'lumopos_register_block_styles', 999 );
function lumopos_register_block_styles() {
	unregister_block_style( 'core/button', 'outline' );

    register_block_style( 'core/button', array(
		'name'         => 'secondary',
		'label'        => __( 'Secondary', 'lumopos' ),
		'inline_style' => '.wp-block-button.is-style-secondary .wp-element-button {
			background-color: var(--wp--preset--color--secondary)
		}'
    ) );
    register_block_style( 'core/button', array(
		'name'         => 'tertiary',
		'label'        => __( 'Tertiary', 'lumopos' ),
		'inline_style' => '.wp-block-button.is-style-tertiary .wp-element-button {
			background-color: var(--wp--preset--color--tertiary)
		}'
    ) );
}