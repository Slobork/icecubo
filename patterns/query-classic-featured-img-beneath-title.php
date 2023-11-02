<?php
// phpcs:ignore
/**
 * Title: Query of posts (Title first).
 * Slug: icecubo/query-classic-featured-img-beneath-title
 * Categories: icecubo-query
 * Inserter: true
 */
?>
<!-- wp:query {"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","type":"constrained","inherit":true,"perPage":10},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xx-large"}}},"className":"is-style-default"} -->
<div class="wp-block-group is-style-default" style="margin-bottom:var(--wp--preset--spacing--xx-large)"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-featured-image {"isLink":true,"height":"350px","style":{"border":{"width":"5px"}}} /-->
<!-- wp:pattern {"slug":"icecubo/post-byline-oval"} /-->
<!-- wp:post-excerpt {"showMoreOnNewLine":false} /-->
<!-- wp:pattern {"slug":"icecubo/post-footer-oval"} /-->
</div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"layout":{"inherit":false}} -->
<div class="wp-block-group"><!-- wp:query-pagination {"className":"is-style-icecubo-oval-post-byline"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->