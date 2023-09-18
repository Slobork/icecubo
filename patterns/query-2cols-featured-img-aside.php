<?php
// phpcs:ignore
/**
 * Title: Query in two columns title/meta and featured image aside.
 * Slug: icecubo/query-featured-img-aside-2columns
 * Categories: hidden
 * Inserter: false
 */
?>

<!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","type":"constrained","inherit":true,"perPage":10},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"is-style-default","layout":{"type":"default"}} -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","width":"","height":"","style":{"layout":{"selfStretch":"fit","flexSize":null}}} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:post-title {"isLink":true,"className":"is-style-default"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":".25rem"}},"layout":{"type":"flex"},"fontSize":"extra-small"} -->
<div class="wp-block-group has-extra-small-font-size"><!-- wp:post-date {"className":"is-style-icecubo-oval-post-meta"} /-->

<!-- wp:paragraph -->
<p>·</p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false,"showBio":false,"className":"is-style-icecubo-oval-post-meta"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"showMoreOnNewLine":false} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":".5rem"},"fontSize":"extra-small"},"className":"has-extra-small-font-size","layout":{"type":"flex"}} -->
<div class="wp-block-group has-extra-small-font-size"><!-- wp:post-terms {"term":"category","className":"is-style-icecubo-oval-post-meta"} /-->

<!-- wp:post-terms {"term":"post_tag","className":"is-style-icecubo-oval-post-meta"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:group {"layout":{"inherit":false}} -->
<div class="wp-block-group"><!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:query -->