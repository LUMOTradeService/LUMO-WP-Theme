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

	add_theme_support('lumo-wp-plugin');
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

function lumopos_has_block( $block_name ) {
    return WP_Block_Type_Registry::get_instance()->is_registered( $block_name );
}

add_filter( 'default_wp_template_part_areas', 'lumopos_register_template_parts' );

function lumopos_register_template_parts( array $areas ) {
    $areas[] = array(
        'area'        => 'navigation',
        'label'       => __( 'Navigation', 'lumo-wp-theme' ),
        'description' => __( 'Area for additional navigation menus', 'lumo-wp-theme' ),
        'icon'        => 'layout', 
        'area_tag'    => 'nav',
    );

    $areas[] = array(
        'area'        => 'sidebar',
        'label'       => __( 'Sidebar', 'lumo-wp-theme' ),
        'description' => __( 'Area for sidebars', 'lumo-wp-theme' ),
        'icon'        => 'sidebar',
        'area_tag'    => 'aside',
    );
    return $areas;
}