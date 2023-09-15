<?php
// phpcs:ignore
/**
 * Title: Query with featured image as a cover.
 * Slug: icecubo/query-cover-featured-img
 * Categories: hidden
 * Inserter: false
 */
?>
<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"is-style-default","layout":{"type":"default","columnCount":3}} -->
    <!-- wp:cover {"useFeaturedImage":true,"hasParallax":true,"dimRatio":50,"isDark":false,"layout":{"type":"constrained"}} -->
    <div class="wp-block-cover is-light has-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","flexWrap":"wrap","verticalAlignment":"space-between"}} -->
    <div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
    <div class="wp-block-group"><!-- wp:post-title {"isLink":true} /-->

    <!-- wp:group {"style":{"spacing":{"blockGap":".25rem"}},"layout":{"type":"flex"},"fontSize":"extra-small"} -->
    <div class="wp-block-group has-extra-small-font-size"><!-- wp:post-date {"className":"is-style-icecubo-oval-post-meta"} /-->

    <!-- wp:paragraph -->
    <p>·</p>
    <!-- /wp:paragraph -->

    <!-- wp:post-author {"showAvatar":false,"showBio":false,"className":"is-style-icecubo-oval-post-meta"} /--></div>
    <!-- /wp:group -->

    <!-- wp:post-excerpt {"showMoreOnNewLine":false} /--></div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"blockGap":".5rem"},"fontSize":"extra-small"},"className":"has-extra-small-font-size","layout":{"type":"flex","flexWrap":"wrap"}} -->
    <div class="wp-block-group has-extra-small-font-size"><!-- wp:post-terms {"term":"category","className":"is-style-icecubo-oval-post-meta"} /-->

    <!-- wp:post-terms {"term":"post_tag","className":"is-style-icecubo-oval-post-meta"} /--></div>
    <!-- /wp:group --></div>
    <!-- /wp:group --></div></div>
    <!-- /wp:cover -->
    <!-- /wp:post-template -->

    <!-- wp:query-pagination -->
    <!-- wp:query-pagination-previous /-->

    <!-- wp:query-pagination-numbers /-->

    <!-- wp:query-pagination-next /-->
    <!-- /wp:query-pagination -->

    <!-- wp:query-no-results -->
    <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
    <p></p>
    <!-- /wp:paragraph -->
    <!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->