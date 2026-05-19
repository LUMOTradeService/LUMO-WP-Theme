<?php
/**
 * LUMO POS functions and definitions.
 *
 * @package LUMOPOS
 * @subpackage LUMO_POS
 * @since LUMO POS 1.0
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

function lumopos_post_type_support() {
    add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'lumopos_post_type_support');

function lumopos_theme_support() {
    remove_theme_support('core-block-patterns');

	add_theme_support('lumo-wp-plugin');
}
add_action('after_setup_theme', 'lumopos_theme_support');

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

function lumo_restaurant_search_filter($query)
{
	if ($query->is_search && !is_admin()) {
		$query->set('post_type', 'post');
	}

	return $query;
}
add_filter('pre_get_posts', 'lumo_restaurant_search_filter');

function lumopos_has_block( $block_name ) {
    return WP_Block_Type_Registry::get_instance()->is_registered( $block_name );
}

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
add_filter( 'default_wp_template_part_areas', 'lumopos_register_template_parts' );