<?php
/**
 * Title: front-page
 * Slug: lumo-wp-theme/front-page
 * Inserter: no
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:template-part {"slug":"header","area":"header"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|extra-large"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--large)"><!-- wp:terms-query {"termQuery":{"perPage":0,"taxonomy":"category","order":"asc","orderBy":"name","include":[],"hideEmpty":true,"showNested":false,"inherit":false}} -->
<div class="wp-block-terms-query"><!-- wp:term-template {"layout":{"type":"default","columnCount":null,"minimumColumnWidth":"12rem"}} -->
<!-- wp:term-name {"isLink":true} /-->
<!-- /wp:term-template --></div>
<!-- /wp:terms-query -->

<!-- wp:categories {"showOnlyTopLevel":true} /-->

<!-- wp:query {"queryId":19,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:query-no-results -->
<!-- wp:group {"className":"is-style-group-secondary","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-group-secondary" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p><?php esc_html_e('No articles found.', 'lumo-wp-theme');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:query-no-results -->

<!-- wp:group {"className":"is-style-group-rounded","style":{"border":{"radius":{"topLeft":"var:preset|border-radius|extra-large","topRight":"var:preset|border-radius|extra-large","bottomLeft":"var:preset|border-radius|extra-large","bottomRight":"var:preset|border-radius|extra-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-group-rounded" style="border-top-left-radius:var(--wp--preset--border-radius--extra-large);border-top-right-radius:var(--wp--preset--border-radius--extra-large);border-bottom-left-radius:var(--wp--preset--border-radius--extra-large);border-bottom-right-radius:var(--wp--preset--border-radius--extra-large)"><!-- wp:post-template {"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->

<!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-excerpt /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:group -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->

<!-- wp:post-content /--></main>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:template-part {"slug":"footer"} /--></div>
<!-- /wp:group -->