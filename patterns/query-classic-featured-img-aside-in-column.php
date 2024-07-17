<?php
// phpcs:ignore
/**
 * Title: Posts with separator. High featured image aside in its column.
 * Slug: icecubo/query-classic-with-separator-featured-img-aside-in-column
 * Categories: icecubo-query
 * Block Types: core/query
 */
?>
<!-- wp:query {"query":{"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","type":"constrained","inherit":false,"perPage":10},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"is-style-default","layout":{"type":"default","columnCount":3}} -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"9/16","height":"","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"width":"0px","style":"none","radius":{"topLeft":"3px","topRight":"3px","bottomLeft":"3px","bottomRight":"3px"}}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"border":{"radius":"3px"},"dimensions":{"minHeight":""}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="border-radius:3px;padding-right:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0"}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":".25rem"}},"layout":{"type":"flex"},"fontSize":"extra-small"} -->
<div class="wp-block-group has-extra-small-font-size"><!-- wp:post-date {"backgroundColor":"white-ice","className":"is-style-icecubo-oval-post-byline"} /-->

<!-- wp:paragraph -->
<p>·</p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false,"backgroundColor":"white-ice","className":"is-style-icecubo-oval-post-byline"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":30} /--></div>
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
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"}}},"className":"is-style-dots"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-dots" style="margin-top:var(--wp--preset--spacing--xx-large);margin-bottom:var(--wp--preset--spacing--xx-large)"/>
<!-- /wp:separator -->
<!-- /wp:post-template -->

<!-- wp:pattern {"slug":"icecubo/query-part-pagination-oval"} /-->
<!-- wp:pattern {"slug":"icecubo/query-part-no-results"} /-->
</div>
<!-- /wp:query -->