<?php
// phpcs:ignore
/**
 * Title: Query of posts (List).
 * Slug: icecubo/query-basic-list
 * Categories: hidden
 * Inserter: false
 */
?>
<!-- wp:query {"queryId":0,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"list"}} -->
<div class="wp-block-query">
<!-- wp:post-template -->
<!-- wp:group -->
<div class="wp-block-group">
    <!-- wp:post-title {"isLink":true} /-->
    <!-- wp:pattern {"slug":"icecubo/post-byline-oval"} /-->
</div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"showMoreOnNewLine":true,"moreText":"Continue reading →"} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
<!-- wp:pattern {"slug":"icecubo/query-part-no-results"} /-->
</div>
<!-- /wp:query -->