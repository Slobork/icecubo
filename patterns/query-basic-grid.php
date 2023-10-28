<?php
// phpcs:ignore
/**
 * Title: Query of posts (Grid).
 * Slug: icecubo/query-basic-grid
 * Categories: hidden
 * Inserter: false
 */
?>
<!-- wp:query {"queryId":0,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":3}} -->
<div class="wp-block-query">
    <!-- wp:post-template -->
    <!-- wp:group {"layout":{"inherit":false}} -->
    <div class="wp-block-group">
    <!-- wp:post-title {"isLink":true} /-->
    <!-- wp:pattern {"slug":"icecubo/post-byline-oval"} /-->
    <!-- wp:post-excerpt {"showMoreOnNewLine":false} /-->
    </div>
    <!-- /wp:group -->
    <!-- /wp:post-template --> 

    <!-- wp:group {"layout":{"inherit":false}} -->
    <div class="wp-block-group">

    <!-- wp:query-pagination {"className":"is-style-icecubo-oval-post-byline"} -->
    <!-- wp:query-pagination-previous /-->

    <!-- wp:query-pagination-numbers /-->

    <!-- wp:query-pagination-next /-->
    <!-- /wp:query-pagination -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:query -->
