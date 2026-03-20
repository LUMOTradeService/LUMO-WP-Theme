<?php
/**
 * Title: Blog recomendations
 * Slug: lumo-wp-theme/blog-recomendations
 * Categories: Posts
 */
?>
<!-- wp:group {"className":"is-style-group-rounded","style":{"border":{"radius":{"topLeft":"var:preset|border-radius|extra-large","topRight":"var:preset|border-radius|extra-large","bottomLeft":"var:preset|border-radius|extra-large","bottomRight":"var:preset|border-radius|extra-large"}}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
<div class="wp-block-group is-style-group-rounded" style="border-top-left-radius:var(--wp--preset--border-radius--extra-large);border-top-right-radius:var(--wp--preset--border-radius--extra-large);border-bottom-left-radius:var(--wp--preset--border-radius--extra-large);border-bottom-right-radius:var(--wp--preset--border-radius--extra-large)"><!-- wp:columns {"className":"fill-height"} -->
<div class="wp-block-columns fill-height"><!-- wp:column {"verticalAlignment":"stretch"} -->
<div class="wp-block-column is-vertically-aligned-stretch"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|extra-large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"headline-large"} -->
<h2 class="wp-block-heading has-headline-large-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e('Our blog', 'lumo-wp-theme');?></h2>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e('Some information about our blog.', 'lumo-wp-theme');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Check it out.', 'lumo-wp-theme');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Go to blog', 'lumo-wp-theme');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch"} -->
<div class="wp-block-column is-vertically-aligned-stretch"><!-- wp:query {"queryId":0,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]},"className":"fill-height"} -->
<div class="wp-block-query fill-height"><!-- wp:post-template {"className":"fill-height","layout":{"type":"default","columnCount":1}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"aspectRatio":"3/2","scale":"fill","style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->

<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"title-large"} /-->

<!-- wp:post-excerpt /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"100%"} -->
<div style="height:100%" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:query {"queryId":2,"query":{"perPage":2,"pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"aspectRatio":"3/2"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->

<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"title-large"} /-->

<!-- wp:post-excerpt /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"100%","style":{"layout":[]}} -->
<div style="height:100%" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->