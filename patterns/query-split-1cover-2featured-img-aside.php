<?php
// phpcs:ignore
/**
 * Title: Offset split posts: 1st cover post. 2nd list with featured image aside.
 * Slug: icecubo/query-split-1cover-2featured-img-aside
 * Categories: icecubo-query
 * Inserter: true
 */
?>
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:query {"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"is-style-default","layout":{"type":"default","columnCount":3}} -->
<!-- wp:cover {"useFeaturedImage":true,"hasParallax":true,"dimRatio":50,"isDark":false,"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light has-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","flexWrap":"wrap","verticalAlignment":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":".25rem"}},"layout":{"type":"flex"},"fontSize":"extra-small"} -->
<div class="wp-block-group has-extra-small-font-size"><!-- wp:post-date {"className":"is-style-default"} /-->

<!-- wp:paragraph -->
<p>·</p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false,"showBio":false,"className":"is-style-default"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"showMoreOnNewLine":false} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":".5rem"},"fontSize":"extra-small"},"className":"has-extra-small-font-size","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group has-extra-small-font-size"><!-- wp:post-terms {"term":"category","className":"is-style-default"} /-->

<!-- wp:post-terms {"term":"post_tag","className":"is-style-default"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:query {"queryId":0,"query":{"pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","type":"constrained","inherit":false,"perPage":"3"},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"is-style-default","layout":{"type":"default","columnCount":3}} -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"width":"0px","style":"none","radius":{"topLeft":"3px","topRight":"3px","bottomLeft":"3px","bottomRight":"3px"}}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"border":{"radius":"3px"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="border-radius:3px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0"}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":".25rem"}},"layout":{"type":"flex"},"fontSize":"extra-small"} -->
<div class="wp-block-group has-extra-small-font-size"><!-- wp:post-date /-->

<!-- wp:paragraph -->
<p>·</p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":20} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":".5rem"},"fontSize":"extra-small"},"className":"has-extra-small-font-size","layout":{"type":"flex"}} -->
<div class="wp-block-group has-extra-small-font-size"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-terms {"term":"post_tag"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->