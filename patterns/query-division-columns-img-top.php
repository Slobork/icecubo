<?php
// phpcs:ignore
/**
 * Title: Two queries in columns - Featured image at top.
 * Slug: icecubo/query-division-columns-img-top
 * Categories: icecubo-query-division-columns
 */
?>
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"className":"is-style-icecubo-aside-lines","fontSize":"large"} -->
<h2 class="wp-block-heading is-style-icecubo-aside-lines has-large-font-size">BUSINESS</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":0,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"height":"200px","style":{"border":{"width":"4px"},"spacing":{"margin":{"bottom":"var:preset|spacing|xxx-small"}}}} /-->

<!-- wp:post-date {"fontSize":"small"} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|xx-small","bottom":"0"}}},"fontSize":"medium"} /-->

<!-- wp:post-excerpt {"excerptLength":10,"style":{"spacing":{"margin":{"top":"var:preset|spacing|xxx-small","bottom":"var:preset|spacing|large"}}}} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:paragraph {"align":"right"} -->
<p class="has-text-align-right">→More on <a href="#">BUSINESS</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"className":"is-style-icecubo-aside-lines","fontSize":"large"} -->
<h2 class="wp-block-heading is-style-icecubo-aside-lines has-large-font-size">CULTURE</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":0,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"height":"200px","style":{"border":{"width":"4px"},"spacing":{"margin":{"bottom":"var:preset|spacing|xxx-small"}}}} /-->

<!-- wp:post-date {"fontSize":"small"} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|xx-small","bottom":"0"}}},"fontSize":"medium"} /-->

<!-- wp:post-excerpt {"excerptLength":10,"style":{"spacing":{"margin":{"top":"var:preset|spacing|xxx-small","bottom":"var:preset|spacing|large"}}}} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:paragraph {"align":"right"} -->
<p class="has-text-align-right">→More on <a href="#">CULTURE</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->