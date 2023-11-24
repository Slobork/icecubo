<?php
// phpcs:ignore
/**
 * Title: Two queries in columns - Featured image aside.
 * Slug: icecubo/query-division-columns-img-aside
 * Categories: icecubo-query-division-columns
 */
?>
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"className":"is-style-icecubo-underline-overline","fontSize":"large"} -->
<h2 class="wp-block-heading is-style-icecubo-underline-overline has-large-font-size">TRAVEL</h2>
<!-- /wp:heading -->

<!-- wp:query {"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":null,"parents":[]}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:post-featured-image {"isLink":true,"style":{"border":{"width":"4px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"medium"} /-->

<!-- wp:post-date {"style":{"spacing":{"margin":{"top":"var:preset|spacing|xx-small"}}},"fontSize":"small"} /-->

<!-- wp:post-excerpt {"excerptLength":10,"style":{"spacing":{"margin":{"top":"var:preset|spacing|xx-small"}}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:paragraph {"align":"right"} -->
<p class="has-text-align-right">→More on <a href="#">TRAVEL</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"className":"is-style-icecubo-underline-overline","fontSize":"large"} -->
<h2 class="wp-block-heading is-style-icecubo-underline-overline has-large-font-size">LIFESTYLE</h2>
<!-- /wp:heading -->

<!-- wp:query {"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":null,"parents":[]}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:post-featured-image {"isLink":true,"style":{"border":{"width":"4px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"medium"} /-->

<!-- wp:post-date {"style":{"spacing":{"margin":{"top":"var:preset|spacing|xx-small"}}},"fontSize":"small"} /-->

<!-- wp:post-excerpt {"excerptLength":10,"style":{"spacing":{"margin":{"top":"var:preset|spacing|xx-small"}}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:paragraph {"align":"right"} -->
<p class="has-text-align-right">→More on <a href="#">LIFESTYLE</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->