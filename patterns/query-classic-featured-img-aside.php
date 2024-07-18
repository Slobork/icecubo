<?php
// phpcs:ignore
/**
 * Title: Featured image aside. Stretch terms to bottom.
 * Slug: icecubo/query-classic-featured-img-aside
 * Categories: icecubo-query
 * Block Types: core/query
 */
?>
<!-- wp:query {"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","type":"constrained","inherit":false,"perPage":10},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xx-large"}}},"className":"is-style-default mob-force-flexwrap","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"top"}} -->
<div class="wp-block-group is-style-default mob-force-flexwrap" style="margin-bottom:var(--wp--preset--spacing--xx-large)"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/4","width":"","height":"350px","style":{"layout":{"selfStretch":"fit","flexSize":null},"border":{"width":"4px"}}} /-->

<!-- wp:group {"style":{"dimensions":{"minHeight":"350px"}},"className":"mob-minheight-no","layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"space-between"}} -->
<div class="wp-block-group mob-minheight-no" style="min-height:350px"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0"}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":".25rem"}},"layout":{"type":"flex"},"fontSize":"extra-small"} -->
<div class="wp-block-group has-extra-small-font-size"><!-- wp:post-date {"backgroundColor":"white-ice","className":"is-style-icecubo-oval-post-byline"} /-->

<!-- wp:paragraph -->
<p>·</p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false,"backgroundColor":"white-ice","className":"is-style-icecubo-oval-post-byline"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":15} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"className":"post-footer","fontSize":"extra-small"} -->
<div class="wp-block-group post-footer has-extra-small-font-size"><!-- wp:group {"style":{"spacing":{"blockGap":".25rem"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"terms","fontSize":"small"} -->
<p class="terms has-small-font-size">Categories:</p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category","backgroundColor":"white-ice","className":"is-style-icecubo-oval-post-byline"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":".25rem","margin":{"top":".5rem"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:.5rem"><!-- wp:paragraph {"className":"terms","fontSize":"small"} -->
<p class="terms has-small-font-size">Tags:</p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"post_tag","backgroundColor":"white-ice","className":"is-style-icecubo-oval-post-byline"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:pattern {"slug":"icecubo/query-part-pagination-oval"} /-->
<!-- wp:pattern {"slug":"icecubo/query-part-no-results"} /-->
</div>
<!-- /wp:query -->