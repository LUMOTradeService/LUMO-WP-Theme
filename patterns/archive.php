<?php
/**
 * Title: archive
 * Slug: lumo-wp-theme/archive
 * Inserter: no
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:template-part {"slug":"header"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|extra-large"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--large)"><!-- wp:columns {"metadata":{"categories":["call-to-action"],"patternName":"lumo-wp-theme/header-content","name":"Header content"},"className":"is-style-columns-rounded","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|normal"}}}} -->
<div class="wp-block-columns is-style-columns-rounded"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|normal"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:query-title {"type":"archive","showPrefix":false} /-->

<!-- wp:term-description {"fontSize":"headline-large"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|extra-extra-small"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-secondary-small","style":{"border":{"radius":{"topLeft":"var:preset|border-radius|small","topRight":"var:preset|border-radius|small","bottomLeft":"var:preset|border-radius|small","bottomRight":"var:preset|border-radius|small"}}}} -->
<div class="wp-block-button is-style-button-secondary-small"><a class="wp-block-button__link wp-element-button" href="http://lumo-pos.local/" style="border-top-left-radius:var(--wp--preset--border-radius--small);border-top-right-radius:var(--wp--preset--border-radius--small);border-bottom-left-radius:var(--wp--preset--border-radius--small);border-bottom-right-radius:var(--wp--preset--border-radius--small)"><?php esc_html_e('All', 'lumo-wp-theme');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:categories {"showHierarchy":true,"showOnlyTopLevel":true} /--></div>
<!-- /wp:group -->

<!-- wp:terms-query {"termQuery":{"perPage":0,"taxonomy":"category","order":"asc","orderBy":"name","include":[],"hideEmpty":true,"showNested":false,"inherit":true}} -->
<div class="wp-block-terms-query"><!-- wp:term-template {"layout":{"type":"default","columnCount":null,"minimumColumnWidth":"20rem"}} -->
<!-- wp:term-name {"isLink":true} /-->
<!-- /wp:term-template --></div>
<!-- /wp:terms-query -->

<!-- wp:terms-query -->
<div class="wp-block-terms-query"><!-- wp:term-template {"layout":{"type":"default","columnCount":3}} -->
<!-- wp:term-name {"isLink":true} /-->

<!-- wp:query {"queryId":31,"query":{"perPage":12,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":true,"parents":[],"format":[]},"metadata":{"categories":["posts"],"patternName":"lumo-wp-theme/grid-posts","name":"All"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"20rem"}} -->
<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="min-height:100%"><!-- wp:group {"className":"is-style-default","style":{"dimensions":{"minHeight":"100%"},"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-default" style="min-height:100%"><!-- wp:post-featured-image {"aspectRatio":"3/2"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large-increased","bottom":"var:preset|spacing|large-increased","left":"var:preset|spacing|large-increased","right":"var:preset|spacing|large-increased"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large-increased);padding-right:var(--wp--preset--spacing--large-increased);padding-bottom:var(--wp--preset--spacing--large-increased);padding-left:var(--wp--preset--spacing--large-increased)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|on-surface-variant"}}}},"textColor":"on-surface-variant"} -->
<p class="has-on-surface-variant-color has-text-color has-link-color"><?php esc_html_e('|', 'lumo-wp-theme');?></p>
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
<!-- /wp:term-template --></div>
<!-- /wp:terms-query -->

<!-- wp:query {"queryId":11,"query":{"perPage":12,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":true,"parents":[],"format":[]},"metadata":{"categories":["posts"],"patternName":"lumo-wp-theme/grid-posts","name":"All"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"20rem"}} -->
<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="min-height:100%"><!-- wp:group {"className":"is-style-default","style":{"dimensions":{"minHeight":"100%"},"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-default" style="min-height:100%"><!-- wp:post-featured-image {"aspectRatio":"3/2"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large-increased","bottom":"var:preset|spacing|large-increased","left":"var:preset|spacing|large-increased","right":"var:preset|spacing|large-increased"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large-increased);padding-right:var(--wp--preset--spacing--large-increased);padding-bottom:var(--wp--preset--spacing--large-increased);padding-left:var(--wp--preset--spacing--large-increased)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|on-surface-variant"}}}},"textColor":"on-surface-variant"} -->
<p class="has-on-surface-variant-color has-text-color has-link-color"><?php esc_html_e('|', 'lumo-wp-theme');?></p>
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

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-content /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:template-part {"slug":"footer"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->