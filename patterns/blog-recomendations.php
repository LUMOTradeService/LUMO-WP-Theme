<?php
/**
 * Title: Blog recomendations
 * Slug: lumo-wp-theme/blog-recomendations
 * Categories: Posts
 */
?>

<!-- wp:group {"metadata":{"categories":["Posts"],"patternName":"lumo-wp-theme/blog-recomendations","name":"Blog recomendations"},"className":"is-style-group-rounded","style":{"border":{"radius":{"topLeft":"var:preset|border-radius|extra-large","topRight":"var:preset|border-radius|extra-large","bottomLeft":"var:preset|border-radius|extra-large","bottomRight":"var:preset|border-radius|extra-large"}}},"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"20rem"}} -->
<div class="wp-block-group is-style-group-rounded" style="border-top-left-radius:var(--wp--preset--border-radius--extra-large);border-top-right-radius:var(--wp--preset--border-radius--extra-large);border-bottom-left-radius:var(--wp--preset--border-radius--extra-large);border-bottom-right-radius:var(--wp--preset--border-radius--extra-large)"><!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|extra-large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"headline-large"} -->
<h2 class="wp-block-heading has-headline-large-font-size" style="font-style:normal;font-weight:400">Our blog</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"is-style-default","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default"><!-- wp:paragraph -->
<p>Some information about our blog.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Check it out.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Go to blog</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"layout":{"columnSpan":3}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":67,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false,"parents":[],"format":[]},"metadata":{"categories":["posts"],"patternName":"lumo-wp-theme/grid-posts","name":"All"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"20rem"}} -->
<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="min-height:100%"><!-- wp:group {"className":"is-style-default","style":{"dimensions":{"minHeight":"100%"},"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-default" style="min-height:100%"><!-- wp:post-featured-image {"aspectRatio":"3/2"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large-increased","bottom":"var:preset|spacing|large-increased","left":"var:preset|spacing|large-increased","right":"var:preset|spacing|large-increased"},"blockGap":"var:preset|spacing|extra-large"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large-increased);padding-right:var(--wp--preset--spacing--large-increased);padding-bottom:var(--wp--preset--spacing--large-increased);padding-left:var(--wp--preset--spacing--large-increased)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|on-surface-variant"}}}},"textColor":"on-surface-variant"} -->
<p class="has-on-surface-variant-color has-text-color has-link-color">|</p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":4,"isLink":true,"fontSize":"title-large","fontFamily":"comfortaa"} /-->

<!-- wp:post-excerpt {"moreText":""} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->