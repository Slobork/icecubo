<?php
// phpcs:ignore
/**
 * Title: Query of posts (Title - byline - featured img - excerpt - terms).
 * Slug: icecubo/query-blog
 * Categories: hidden
 * Inserter: false
 */
?>
<!-- wp:query {"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","type":"constrained","inherit":true,"perPage":1},"displayLayout":{"type":"list"},"layout":{"type":"default"}} -->
<div class="wp-block-query">
    <!-- wp:post-template -->
    <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"1.5rem"}}}} -->
    <div class="wp-block-group" style="padding-bottom:1.5rem;">
        <!-- wp:post-title {"isLink":true} /-->
        <!-- wp:post-featured-image {"isLink":true} /-->
        <!-- wp:pattern {"slug":"icecubo/post-byline-basic"} /-->
        <!-- wp:post-excerpt {"showMoreOnNewLine":false} /-->

        <!-- wp:group {"layout":{"type":"flex"}, "style":{"spacing":{"blockGap":".5rem"},"fontSize":"extra-small"}} -->
        <div class="wp-block-group has-extra-small-font-size">
            <!-- wp:post-terms {"term":"category"} /-->
            <!-- wp:post-terms {"term": "post_tag"} /-->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
    <!-- /wp:post-template -->

    <!-- wp:group {"layout":{"inherit":false}} -->
    <div class="wp-block-group">
        <!-- wp:query-pagination -->
        <!-- wp:query-pagination-previous /-->

        <!-- wp:query-pagination-numbers /-->

        <!-- wp:query-pagination-next /-->
        <!-- /wp:query-pagination -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:query -->
