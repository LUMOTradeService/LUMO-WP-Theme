<?php
/**
 * Title: List posts
 * Slug: lumo-wp-theme/list-posts
 * Categories: query
 * Block Types: core/query
 */
?>
<!-- wp:query {"queryId":4,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]},"metadata":{"name":"List posts"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|extra-extra-small"},"border":{"radius":{"topLeft":"var:preset|border-radius|extra-large","topRight":"var:preset|border-radius|extra-large","bottomLeft":"var:preset|border-radius|extra-large","bottomRight":"var:preset|border-radius|extra-large"}}}} -->
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"aspectRatio":"1","height":"64px","style":{"border":{"radius":{"topLeft":"var:preset|border-radius|small","topRight":"var:preset|border-radius|small","bottomLeft":"var:preset|border-radius|small","bottomRight":"var:preset|border-radius|small"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|normal","bottom":"var:preset|spacing|normal","right":"var:preset|spacing|large","left":"var:preset|spacing|small"},"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--normal);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--normal);padding-left:var(--wp--preset--spacing--small)"><!-- wp:group {"style":{"dimensions":{"minHeight":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="min-height:0px"><!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"fontSize":"label-small"} /-->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|on-surface-variant"}}},"typography":{"lineHeight":"1.5"}},"textColor":"on-surface-variant","fontSize":"label-small"} -->
<p class="has-on-surface-variant-color has-text-color has-link-color has-label-small-font-size" style="line-height:1.5"><?php esc_html_e('|', 'lumo-wp-theme');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"fontSize":"label-small"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":5,"isLink":true,"fontSize":"body-large","fontFamily":"comfortaa"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->