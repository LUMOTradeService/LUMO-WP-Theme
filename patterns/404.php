<?php
/**
 * Title: 404
 * Slug: lumopos/404
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"},"padding":{"right":"var:preset|spacing|normal","left":"var:preset|spacing|normal"},"blockGap":"var:preset|spacing|extra-large"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--normal);padding-left:var(--wp--preset--spacing--normal)"><!-- wp:columns {"className":"overflow: hidden;","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|normal"}}}} -->
<div class="wp-block-columns overflow: hidden;"><!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"display-large"} -->
<h2 class="wp-block-heading has-primary-color has-text-color has-link-color has-display-large-font-size"><?php esc_html_e('404', 'lumopos');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"display-small"} -->
<p class="has-display-small-font-size"><?php esc_html_e('Stránka nenalezena', 'lumopos');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:post-featured-image {"aspectRatio":"auto","width":"","height":"100%"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:template-part {"slug":"footer"} /--></div>
<!-- /wp:group -->