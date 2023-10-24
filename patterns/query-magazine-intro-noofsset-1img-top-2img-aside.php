<?php
// phpcs:ignore
/**
 * Title: No offset, two columns: 1st with image at the top, 2nd image aside.
 * Slug: icecubo/query-magazine-intro-noofsset-1img-top-2img-aside
 * Categories: icecubo-query-magazine-intro
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"top","width":"px"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:paragraph -->
<p>FEATURED</p>
<!-- /wp:paragraph -->

<!-- wp:query {"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"align":"wide","style":{"border":{"width":"5px"}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}},"fontSize":"xl"} /-->

<!-- wp:post-date {"fontSize":"small"} /-->

<!-- wp:post-excerpt {"excerptLength":15} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:paragraph {"className":"is-style-default"} -->
<p class="is-style-default">LATEST</p>
<!-- /wp:paragraph -->

<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:post-featured-image {"isLink":true,"style":{"border":{"width":"4px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"medium"} /-->

<!-- wp:post-date {"fontSize":"small"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->