<?php
// phpcs:ignore
/**
 * Title: Query of posts (Title first).
 * Slug: icecubo/query-classic-featured-img-beneath-title
 * Categories: icecubo-query
 * Block Types: core/query
 */
?>
<!-- wp:query {"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","type":"constrained","inherit":false,"perPage":10},"layout":{"type":"default"}} -->
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

<!-- wp:pattern {"slug":"icecubo/query-part-pagination-oval"} /-->
<!-- wp:pattern {"slug":"icecubo/query-part-no-results"} /-->
</div>
<!-- /wp:query -->