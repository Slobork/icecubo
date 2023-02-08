<?php
// phpcs:ignore
/**
 * Title: Query of posts (Grid).
 * Slug: icecubo/query-basic-grid
 * Categories: hidden
 * Inserter: false
 */
?>
<!-- wp:query {"queryId":0,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
<div class="wp-block-query">
    <!-- wp:post-template -->
    <!-- wp:group {"layout":{"inherit":false}} -->
    <div class="wp-block-group">
    <!-- wp:post-title {"isLink":true} /-->
    <!-- wp:pattern {"slug":"icecubo/post-byline-basic"} /-->
    <!-- wp:post-excerpt {"showMoreOnNewLine":true, "moreText":"Continue reading →"} /-->
    </div>
    <!-- /wp:group -->
    <!-- /wp:post-template -->
</div>
<!-- /wp:query -->
