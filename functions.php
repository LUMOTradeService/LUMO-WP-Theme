<?php
/**
 * LUMO POS functions and definitions.
 *
 * @package LUMOPOS
 * @subpackage LUMO_POS
 * @since LUMO POS 1.0
 */

add_action( 'init', 'lumopos_add_support', 111);
function lumopos_add_support() {
    add_post_type_support( 'page', 'excerpt' );
    
    register_block_type( __DIR__ . '/blocks/icon' );

	add_editor_style('/resources/fonts/energy/energy.css');
}

require get_parent_theme_file_path('inc/block-styles.php');