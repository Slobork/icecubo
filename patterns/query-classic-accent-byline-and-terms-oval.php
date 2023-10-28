<?php
// phpcs:ignore
/**
 * Title: Classic query of posts (Accent byline and terms).
 * Slug: icecubo/query-classic-accent-byline-and-terms-oval
 * Categories: icecubo-query
 * Inserter: true
 */
?>
<!-- wp:query {"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","type":"constrained","inherit":true,"perPage":10},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default","columnCount":2}} -->
<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xx-large"}},"border":{"width":"1px","radius":"3px"}},"backgroundColor":"white","className":"is-style-default","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-default has-white-background-color has-background" style="border-width:1px;border-radius:3px;margin-bottom:var(--wp--preset--spacing--xx-large)"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":".25rem"}},"layout":{"type":"flex","justifyContent":"space-between","orientation":"horizontal","verticalAlignment":"center","flexWrap":"nowrap"},"fontSize":"extra-small"} -->
<div class="wp-block-group has-extra-small-font-size"><!-- wp:post-date {"textAlign":"center","style":{"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"white-ice","className":"is-style-icecubo-oval-post-byline"} /-->

<!-- wp:post-author {"textAlign":"center","showAvatar":false,"style":{"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"white-ice","className":"is-style-icecubo-oval-post-byline"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"isLink":true} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":".5rem"},"fontSize":"extra-small"},"className":"has-extra-small-font-size is-style-default","layout":{"type":"flex","justifyContent":"left","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-extra-small-font-size is-style-default"><!-- wp:post-terms {"term":"category","textAlign":"center","separator":"  ","style":{"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"white-ice","className":"is-style-icecubo-oval-post-byline"} /-->

<!-- wp:post-terms {"term":"post_tag","textAlign":"center","separator":" ","style":{"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"white-ice","className":"is-style-icecubo-oval-post-byline"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"layout":{"inherit":false}} -->
<div class="wp-block-group"><!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->