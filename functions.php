<?php
/**
 * LUMO POS functions and definitions.
 *
 * @package LUMOPOS
 * @subpackage LUMO_POS
 * @since LUMO POS 1.0
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

add_action( 'init', 'lumopos_add_support');
function lumopos_add_support() {
    add_post_type_support( 'page', 'excerpt' );
}

add_action('after_setup_theme', function() {
    remove_theme_support('core-block-patterns');
});

function lumopos_block_editor_assets()
{
	wp_enqueue_script(
		'lumopos-unregister-styles',
		get_template_directory_uri() . '/assets/js/unregister-styles.js',
		array(
			'wp-blocks',
			'wp-dom-ready',
			'wp-edit-post'
		), 
		filemtime( get_template_directory() . '/assets/js/unregister-styles.js' ), 
		true
	);
}
add_action('enqueue_block_editor_assets', 'lumopos_block_editor_assets');

require get_parent_theme_file_path('blocks/blocks.php');