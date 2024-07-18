<?php
// phpcs:ignore
/**
 * Title: Posts with featured image as a cover.
 * Slug: icecubo/query-classic-featured-img-cover
 * Categories: icecubo-query
 * Block Types: core/query
 */
?>
<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"is-style-default","layout":{"type":"default","columnCount":3}} -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":60,"overlayColor":"darko","layout":{"type":"constrained"}} -->
<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-darko-background-color has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","flexWrap":"wrap","verticalAlignment":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":".25rem"}},"layout":{"type":"flex"},"fontSize":"extra-small"} -->
<div class="wp-block-group has-extra-small-font-size"><!-- wp:post-date {"backgroundColor":"white-ice","textColor":"darko-down","className":"is-style-icecubo-oval-post-byline"} /-->

<!-- wp:paragraph -->
<p>·</p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false,"backgroundColor":"white-ice","textColor":"darko-down","className":"is-style-icecubo-oval-post-byline"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"showMoreOnNewLine":false} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":".5rem"},"fontSize":"extra-small"},"className":"has-extra-small-font-size","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group has-extra-small-font-size"><!-- wp:post-terms {"term":"category","textColor":"darko-down","className":"is-style-icecubo-oval-post-byline"} /-->

<!-- wp:post-terms {"term":"post_tag","textColor":"darko-down","className":"is-style-icecubo-oval-post-byline"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template -->

<!-- wp:pattern {"slug":"icecubo/query-part-pagination-oval"} /-->
<!-- wp:pattern {"slug":"icecubo/query-part-no-results"} /-->
</div>
<!-- /wp:query -->