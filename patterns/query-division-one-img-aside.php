<?php
// phpcs:ignore
/**
 * Title: Posts wrapped in a group - Featured image aside.
 * Slug: icecubo/query-division-one-img-aside
 * Categories: icecubo-query-division-one
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|xxx-large"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--xxx-large)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)"><!-- wp:heading {"className":"is-style-default","fontSize":"large"} -->
<h2 class="wp-block-heading is-style-default has-large-font-size">TECHNOLOGY</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:columns {"verticalAlignment":"top"} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:25%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"auto","height":"70px","style":{"border":{"width":"4px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"75%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:75%"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"medium"} /-->

<!-- wp:post-date {"style":{"spacing":{"margin":{"top":"var:preset|spacing|xx-small"}}},"fontSize":"small"} /-->

<!-- wp:post-excerpt {"excerptLength":10,"style":{"spacing":{"margin":{"top":"var:preset|spacing|xx-small"}}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:paragraph {"align":"right"} -->
<p class="has-text-align-right">→ Follow more from <a href="#">TECHNOLOGY</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->