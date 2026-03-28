<?php
/**
 * Title: Featured posts
 * Slug: lumo-wp-theme/featured-posts
 * Categories: query
 * Block Types: core/query
 */
?>

<!-- wp:query {"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false,"perPage":100},"metadata":{"name":"Featured","categories":["posts"],"patternName":"lumo-wp-theme/featured-posts"}} -->
<div class="wp-block-query">

<!-- wp:post-template -->
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"is-style-default","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"stretch"} -->
<div class="wp-block-column is-vertically-aligned-stretch"><!-- wp:post-featured-image {"aspectRatio":"3/2","width":"100%","height":"100%"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|normal"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|large-increased","left":"var:preset|spacing|large-increased","top":"var:preset|spacing|large-increased","bottom":"var:preset|spacing|large-increased"},"blockGap":"var:preset|spacing|extra-large"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large-increased);padding-right:var(--wp--preset--spacing--large-increased);padding-bottom:var(--wp--preset--spacing--large-increased);padding-left:var(--wp--preset--spacing--large-increased)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|on-surface-variant"}}}},"textColor":"on-surface-variant"} -->
<p class="has-on-surface-variant-color has-text-color has-link-color">|</p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":3,"isLink":true,"fontSize":"headline-large"} /-->

<!-- wp:post-excerpt /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
 <!-- wp:query-no-results {"align":"center"} -->
<!-- wp:group {"className":"is-style-group-secondary","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-group-secondary" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:paragraph {"placeholder":"Přidejte text nebo bloky, které se zobrazí, když dotaz nevrátí žádné výsledky."} -->
<p>No articles found.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:query-no-results -->
<!-- /wp:query -->