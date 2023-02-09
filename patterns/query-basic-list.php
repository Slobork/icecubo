<?php
// phpcs:ignore
/**
 * Title: Query of posts (List).
 * Slug: icecubo/query-basic-list
 * Categories: hidden
 * Inserter: false
 */
?>
<!-- wp:query {"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","type":"constrained","inherit":true,"perPage":1},"displayLayout":{"type":"list"},"layout":{"type":"default"}} -->
<div class="wp-block-query">
<!-- wp:post-template -->
<!-- wp:group -->
<div class="wp-block-group">
    <!-- wp:post-title {"isLink":true} /-->
    <!-- wp:pattern {"slug":"icecubo/post-byline-basic"} /-->
</div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"showMoreOnNewLine":true,"moreText":"Continue reading →"} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
