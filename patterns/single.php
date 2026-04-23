<?php
/**
 * Title: single
 * Slug: lumo-wp-theme/single
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|extra-extra-large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:template-part {"slug":"header"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|extra-large"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--large)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|extra-large","left":"var:preset|spacing|extra-large"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"66%"} -->
<div class="wp-block-column" style="flex-basis:66%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|extra-large","padding":{"left":"var:preset|spacing|large-increased"}},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--large-increased)"><!-- wp:post-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|on-primary-container"}}}},"textColor":"on-primary-container","fontSize":"display-large"} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date {"datetime":"2026-03-23T11:07:47.160Z"} /-->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|on-surface-variant"}}}},"textColor":"on-surface-variant","fontSize":"label-large"} -->
<p class="has-on-surface-variant-color has-text-color has-link-color has-label-large-font-size"><?php esc_html_e('|', 'lumo-wp-theme');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|extra-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-time-to-read /-->

<!-- wp:post-time-to-read {"displayMode":"words"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"fontSize":"body-large"} /-->

<!-- wp:post-featured-image {"aspectRatio":"16/9"} /-->

<!-- wp:post-content /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"34%"} -->
<div class="wp-block-column" style="flex-basis:34%"><!-- wp:group {"style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--large)"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|on-surface-variant"}}}},"textColor":"on-surface-variant","fontSize":"title-medium"} -->
<h2 class="wp-block-heading has-on-surface-variant-color has-text-color has-link-color has-title-medium-font-size"><?php esc_html_e('Recent articles', 'lumo-wp-theme');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":4,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":null,"parents":[],"format":[]},"metadata":{"name":"List posts","categories":["posts"],"patternName":"lumo-wp-theme/list-posts"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"is-style-template-small","style":{"spacing":{"blockGap":"var:preset|spacing|extra-extra-small"},"border":{"radius":{"topLeft":"var:preset|border-radius|extra-large","topRight":"var:preset|border-radius|extra-large","bottomLeft":"var:preset|border-radius|extra-large","bottomRight":"var:preset|border-radius|extra-large"}}}} -->
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
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:template-part {"slug":"footer"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->