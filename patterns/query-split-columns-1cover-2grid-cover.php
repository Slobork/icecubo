<?php
// phpcs:ignore
/**
 * Title: Offset split posts: 1st cover column. 2nd grid as cover posts.
 * Slug: icecubo/query-split-columns-1cover-2grid-cover
 * Categories: icecubo-query
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:columns {"verticalAlignment":"top","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"px"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:query {"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","type":"constrained","inherit":false,"perPage":"2"},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"is-style-default","layout":{"type":"default","columnCount":3}} -->
<!-- wp:cover {"useFeaturedImage":true,"hasParallax":true,"dimRatio":0,"isDark":false,"layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","flexWrap":"wrap","verticalAlignment":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"default"}} -->
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
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:query {"query":{"pages":"0","offset":"2","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","type":"constrained","inherit":false,"perPage":"2"},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"is-style-default","layout":{"type":"grid","columnCount":2}} -->
<!-- wp:cover {"useFeaturedImage":true,"hasParallax":true,"dimRatio":0,"isDark":false,"layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","flexWrap":"wrap","verticalAlignment":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"default"}} -->
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
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->