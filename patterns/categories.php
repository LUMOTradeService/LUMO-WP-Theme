<?php
/**
 * Title: categories
 * Slug: lumo-wp-theme/categories
 * Inserter: no
 */
?>

<?php 
$blog_page_id = get_option( 'page_for_posts' );
$blog_url = $blog_page_id ? get_permalink( $blog_page_id ) : home_url( '/' );
?>

<?php
if ( lumopos_has_block( 'lumo-wp-plugin/category-with-all' ) ) {
?>
    <!-- wp:lumo-wp-plugin/category-with-all /-->
<?php
} else {
    if ( is_home() ) {
?>
    <!-- wp:group {"metadata":{"name":"Blog categories"},"style":{"spacing":{"blockGap":"var:preset|spacing|extra-extra-small"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"top"}} -->
    <div class="wp-block-group"><!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-secondary-small-selected","style":{"border":{"radius":{"topLeft":"var:preset|border-radius|full","topRight":"var:preset|border-radius|full","bottomLeft":"var:preset|border-radius|full","bottomRight":"var:preset|border-radius|full"}}}} -->
    <div class="wp-block-button is-style-button-secondary-small-selected"><a class="wp-block-button__link wp-element-button" href="#" style="border-top-left-radius:var(--wp--preset--border-radius--full);border-top-right-radius:var(--wp--preset--border-radius--full);border-bottom-left-radius:var(--wp--preset--border-radius--full);border-bottom-right-radius:var(--wp--preset--border-radius--full)"><?php esc_html_e('All', 'lumo-wp-theme');?></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons -->

    <!-- wp:categories {"showHierarchy":true,"showOnlyTopLevel":true} /--></div>
    <!-- /wp:group -->
<?php
    } else {
?>
    <!-- wp:group {"metadata":{"name":"Blog categories"},"style":{"spacing":{"blockGap":"var:preset|spacing|extra-extra-small"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"top"}} -->
    <div class="wp-block-group"><!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-secondary-small","style":{"border":{"radius":{"topLeft":"var:preset|border-radius|small","topRight":"var:preset|border-radius|small","bottomLeft":"var:preset|border-radius|small","bottomRight":"var:preset|border-radius|small"}}}} -->
    <div class="wp-block-button is-style-button-secondary-small"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $blog_url ); ?>" style="border-top-left-radius:var(--wp--preset--border-radius--small);border-top-right-radius:var(--wp--preset--border-radius--small);border-bottom-left-radius:var(--wp--preset--border-radius--small);border-bottom-right-radius:var(--wp--preset--border-radius--small)"><?php esc_html_e('All', 'lumo-wp-theme');?></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons -->

    <!-- wp:categories {"showHierarchy":true,"showOnlyTopLevel":true} /--></div>
    <!-- /wp:group -->
<?php
    }
}
?>