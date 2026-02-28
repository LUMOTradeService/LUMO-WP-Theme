<?php
/**
 * Title: front-page
 * Slug: lumopos/front-page
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|extra-large","padding":{"right":"var:preset|spacing|normal","left":"var:preset|spacing|normal"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--normal);padding-left:var(--wp--preset--spacing--normal)"><!-- wp:columns {"className":"overflow: hidden;","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|normal"}}}} -->
<div class="wp-block-columns overflow: hidden;"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|normal"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:post-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|on-primary-container"}}}},"textColor":"on-primary-container","fontSize":"display-large"} /-->

<!-- wp:post-excerpt {"fontSize":"display-small"} /-->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Kontaktujte nás', 'lumopos');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:post-featured-image {"aspectRatio":"auto","width":"","height":"100%"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:post-content /--></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->