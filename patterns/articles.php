<?php
/**
 * Title: Articles
 * Slug: lumopos/articles
 * Categories: Portfolio, Posts
 */
?>

<!-- wp:query {"queryId":34,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Grid"}} -->
<div class="wp-block-query">
    <!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|normal"}},"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"600px"}} -->
<!-- wp:group {"tagName":"article","className":"is-style-group-container","style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"constrained"}} -->
<article class="wp-block-group is-style-group-container" style="min-height:100%">
    <!-- wp:group {"className":"is-style-default","style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"default"}} -->
<a class="wp-block-group is-style-default" href="<?php the_permalink(); ?>" style="min-height:100%">
    <!-- wp:post-featured-image {"isLink":true} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|normal"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
    <!-- wp:post-title {"level":4,"isLink":true} /-->

<!-- wp:post-excerpt /-->
</div>
<!-- /wp:group -->
</a>
<!-- /wp:group -->
</article>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->