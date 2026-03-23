<?php
/**
 * Title: home
 * Slug: lumo-wp-theme/home
 * Inserter: no
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:template-part {"slug":"header","area":"header"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|extra-large"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--large)"><!-- wp:columns {"metadata":{"categories":["Náhledový"],"patternName":"lumopos/header-content","name":"Header content"},"className":"is-style-columns-rounded"} -->
<div class="wp-block-columns is-style-columns-rounded"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|normal","padding":{"right":"var:preset|spacing|large","left":"var:preset|spacing|large"}}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|on-primary-container"}}}},"textColor":"on-primary-container"} -->
<h1 class="wp-block-heading has-on-primary-container-color has-text-color has-link-color"><?php esc_html_e('Blog', 'lumo-wp-theme');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"headline-large"} -->
<p class="has-headline-large-font-size"><?php esc_html_e('Say something about your blog.', 'lumo-wp-theme');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"aspectRatio":"3/2","scale":"cover"} -->
<figure class="wp-block-image"><img alt="" style="aspect-ratio:3/2;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:categories {"showOnlyTopLevel":true} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|normal"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|large","left":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('Latest post', 'lumo-wp-theme');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":22,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-medium-posts","name":"Latest"}} -->
<div class="wp-block-query"><!-- wp:query-no-results {"align":"center"} -->
<!-- wp:group {"className":"is-style-group-secondary","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-group-secondary" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:paragraph {"placeholder":"Přidejte text nebo bloky, které se zobrazí, když dotaz nevrátí žádné výsledky."} -->
<p><?php esc_html_e('No articles found.', 'lumo-wp-theme');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:query-no-results -->

<!-- wp:group {"className":"is-style-group-rounded","style":{"border":{"radius":{"topLeft":"var:preset|border-radius|extra-large","topRight":"var:preset|border-radius|extra-large","bottomLeft":"var:preset|border-radius|extra-large","bottomRight":"var:preset|border-radius|extra-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-group-rounded" style="border-top-left-radius:var(--wp--preset--border-radius--extra-large);border-top-right-radius:var(--wp--preset--border-radius--extra-large);border-bottom-left-radius:var(--wp--preset--border-radius--extra-large);border-bottom-right-radius:var(--wp--preset--border-radius--extra-large)"><!-- wp:post-template -->
<!-- wp:group {"className":"is-style-default","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"stretch"} -->
<div class="wp-block-column is-vertically-aligned-stretch"><!-- wp:post-featured-image {"aspectRatio":"3/2","width":"100%","height":"100%"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|normal"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"spacing":{"padding":{"right":"var:preset|spacing|large","left":"var:preset|spacing|large","top":"var:preset|spacing|large"}}}} /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"padding":{"right":"var:preset|spacing|large","left":"var:preset|spacing|large"}}}} /-->

<!-- wp:post-excerpt {"style":{"spacing":{"padding":{"right":"var:preset|spacing|large","left":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|normal"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|large","left":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('All posts', 'lumo-wp-theme');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":34,"query":{"perPage":8,"pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false,"parents":[],"format":[]},"metadata":{"categories":["Portfolio","Posts"],"patternName":"lumopos/articles","name":"All"}} -->
<div class="wp-block-query"><!-- wp:group {"className":"is-style-group-rounded","style":{"border":{"radius":{"topLeft":"var:preset|border-radius|extra-large","topRight":"var:preset|border-radius|extra-large","bottomLeft":"var:preset|border-radius|extra-large","bottomRight":"var:preset|border-radius|extra-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-group-rounded" style="border-top-left-radius:var(--wp--preset--border-radius--extra-large);border-top-right-radius:var(--wp--preset--border-radius--extra-large);border-bottom-left-radius:var(--wp--preset--border-radius--extra-large);border-bottom-right-radius:var(--wp--preset--border-radius--extra-large)"><!-- wp:post-template {"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"20rem"}} -->
<!-- wp:group {"tagName":"article","className":"is-style-default","style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"constrained"}} -->
<article class="wp-block-group is-style-default" style="min-height:100%"><!-- wp:group {"className":"is-style-default","style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-default" style="min-height:100%"><!-- wp:post-featured-image /-->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|large","left":"var:preset|spacing|large"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"spacing":{"padding":{"top":"var:preset|spacing|large"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":4,"isLink":true,"style":{"spacing":{"padding":{"right":"var:preset|spacing|large","left":"var:preset|spacing|large"}}}} /-->

<!-- wp:post-excerpt {"moreText":"","style":{"spacing":{"padding":{"right":"var:preset|spacing|large","left":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}}} /--></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|normal","right":"var:preset|spacing|normal"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--normal);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--normal)"><!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:template-part {"slug":"footer"} /--></div>
<!-- /wp:group -->