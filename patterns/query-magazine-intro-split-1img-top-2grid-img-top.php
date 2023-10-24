<?php
// phpcs:ignore
/**
 * Title: Offset split posts: 1st prominent post with image at the top. 2nd grid of posts.
 * Slug: icecubo/query-magazine-intro-split-1img-top-2grid-img-top
 * Categories: icecubo-query-magazine-intro
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"1px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:query {"query":{"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","type":"constrained","inherit":false,"perPage":"1"},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:post-featured-image {"isLink":true,"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"width":"0px","style":"none","radius":{"topLeft":"3px","topRight":"3px","bottomLeft":"0px","bottomRight":"0px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"margin":{"bottom":"1px"}},"border":{"radius":{"bottomLeft":"3px","bottomRight":"3px","topLeft":"0px","topRight":"0px"}}},"backgroundColor":"white-ice"} -->
<div class="wp-block-group has-white-ice-background-color has-background" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:3px;border-bottom-right-radius:3px;margin-bottom:1px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0"}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":".25rem"}},"layout":{"type":"flex"},"fontSize":"extra-small"} -->
<div class="wp-block-group has-extra-small-font-size"><!-- wp:post-date /-->

<!-- wp:paragraph -->
<p>·</p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":35} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":".5rem"},"fontSize":"extra-small"},"className":"has-extra-small-font-size","layout":{"type":"flex"}} -->
<div class="wp-block-group has-extra-small-font-size"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-terms {"term":"post_tag"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:query {"query":{"perPage":"4","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"1px"}},"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"auto","height":"250px","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"width":"0px","style":"none","radius":{"topLeft":"3px","topRight":"3px","bottomLeft":"0px","bottomRight":"0px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"margin":{"bottom":"1px"}},"border":{"radius":{"bottomLeft":"3px","bottomRight":"3px","topLeft":"0px","topRight":"0px"}}},"backgroundColor":"white-ice"} -->
<div class="wp-block-group has-white-ice-background-color has-background" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:3px;border-bottom-right-radius:3px;margin-bottom:1px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"xl"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":".25rem"}},"layout":{"type":"flex"},"fontSize":"extra-small"} -->
<div class="wp-block-group has-extra-small-font-size"><!-- wp:post-date /-->

<!-- wp:paragraph -->
<p>·</p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":15} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":".5rem"},"fontSize":"extra-small"},"className":"has-extra-small-font-size","layout":{"type":"flex"}} -->
<div class="wp-block-group has-extra-small-font-size"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-terms {"term":"post_tag"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->