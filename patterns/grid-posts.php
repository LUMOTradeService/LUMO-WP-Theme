<?php
/**
 * Title: Grid posts
 * Slug: lumo-wp-theme/grid-posts
 * Categories: query
 * Block Types: core/query
 */
?>
<!-- wp:query {"query":{"perPage":12,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false,"parents":[],"format":[]},"metadata":{"categories":["posts"],"patternName":"lumo-wp-theme/grid-posts","name":"All"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"20rem"}} -->
<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="min-height:100%"><!-- wp:group {"className":"is-style-default","style":{"dimensions":{"minHeight":"100%"},"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-default" style="min-height:100%"><!-- wp:post-featured-image {"aspectRatio":"3/2"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large-increased","bottom":"var:preset|spacing|large-increased","left":"var:preset|spacing|large-increased","right":"var:preset|spacing|large-increased"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large-increased);padding-right:var(--wp--preset--spacing--large-increased);padding-bottom:var(--wp--preset--spacing--large-increased);padding-left:var(--wp--preset--spacing--large-increased)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|on-surface-variant"}}}},"textColor":"on-surface-variant"} -->
<p class="has-on-surface-variant-color has-text-color has-link-color">|</p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":4,"isLink":true,"fontSize":"title-large"} /-->

<!-- wp:post-excerpt {"moreText":""} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->