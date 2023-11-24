<?php
// phpcs:ignore
/**
 * Title: Offset split posts: 1st cover post. 2nd grid of cover posts.
 * Slug: icecubo/query-magazine-intro-split-1cover-2grid-cover
 * Categories: icecubo-query-magazine-intro
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"1px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":0,"query":{"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","type":"constrained","inherit":false,"perPage":"1"},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"is-style-default","layout":{"type":"default","columnCount":3}} -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":60,"overlayColor":"darko","layout":{"type":"constrained"}} -->
<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-darko-background-color has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","flexWrap":"wrap","verticalAlignment":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":".25rem","margin":{"top":"var:preset|spacing|xxx-small"}}},"layout":{"type":"flex"},"fontSize":"extra-small"} -->
<div class="wp-block-group has-extra-small-font-size" style="margin-top:var(--wp--preset--spacing--xxx-small)"><!-- wp:post-date {"className":"is-style-default"} /-->

<!-- wp:paragraph -->
<p>·</p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false,"showBio":false,"className":"is-style-default"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":35} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":".5rem"},"fontSize":"extra-small"},"className":"has-extra-small-font-size","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group has-extra-small-font-size"><!-- wp:post-terms {"term":"category","className":"is-style-icecubo-oval-post-byline"} /-->

<!-- wp:post-terms {"term":"post_tag","className":"is-style-icecubo-oval-post-byline"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:query {"queryId":0,"query":{"perPage":"4","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"1px"}},"className":"is-style-default","layout":{"type":"grid","columnCount":2}} -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":60,"overlayColor":"darko","minHeight":500,"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-darko-background-color has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","flexWrap":"wrap","verticalAlignment":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"className":"is-style-default","fontSize":"xl"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":".25rem","margin":{"top":"var:preset|spacing|xxx-small"}}},"layout":{"type":"flex"},"fontSize":"extra-small"} -->
<div class="wp-block-group has-extra-small-font-size" style="margin-top:var(--wp--preset--spacing--xxx-small)"><!-- wp:post-date {"className":"is-style-default"} /-->

<!-- wp:paragraph -->
<p>·</p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false,"showBio":false,"className":"is-style-default"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":20} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":".5rem"},"fontSize":"extra-small"},"className":"has-extra-small-font-size","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group has-extra-small-font-size"><!-- wp:post-terms {"term":"category","className":"is-style-icecubo-oval-post-byline"} /-->

<!-- wp:post-terms {"term":"post_tag","className":"is-style-icecubo-oval-post-byline"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->