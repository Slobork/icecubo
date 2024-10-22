<?php
// phpcs:ignore
/**
 * Title: Query of posts (Featured image first).
 * Slug: icecubo/query-classic-featured-img-top
 * Categories: icecubo-query
 * Block Types: core/query
 */
?>
<!-- wp:query {"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","type":"constrained","inherit":false,"perPage":10},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:post-featured-image {"isLink":true,"height":"350px","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"width":"0px","style":"none","radius":{"topLeft":"3px","topRight":"3px","bottomLeft":"0px","bottomRight":"0px"}}}} /-->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"margin":{"bottom":"var:preset|spacing|xx-large"}},"border":{"radius":{"bottomLeft":"3px","bottomRight":"3px","topLeft":"0px","topRight":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"backgroundColor":"white-ice","textColor":"darko-down-bottom"} -->
<div class="wp-block-group has-darko-down-bottom-color has-white-ice-background-color has-text-color has-background has-link-color" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:3px;border-bottom-right-radius:3px;margin-bottom:var(--wp--preset--spacing--xx-large);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0"}}}} /-->


<!-- wp:pattern {"slug":"icecubo/post-byline-basic"} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":".5rem"},"fontSize":"extra-small"},"className":"has-extra-small-font-size","layout":{"type":"flex"}} -->
<div class="wp-block-group has-extra-small-font-size"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-terms {"term":"post_tag"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:pattern {"slug":"icecubo/query-part-pagination-oval"} /-->
<!-- wp:pattern {"slug":"icecubo/query-part-no-results"} /-->
</div>
<!-- /wp:query -->