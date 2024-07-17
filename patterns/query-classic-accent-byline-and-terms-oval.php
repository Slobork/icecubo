<?php
// phpcs:ignore
/**
 * Title: Posts accenting byline and terms.
 * Slug: icecubo/query-classic-accent-byline-and-terms-oval
 * Categories: icecubo-query
 * Block Types: core/query
 */
?>
<!-- wp:query {"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","type":"constrained","inherit":false,"perPage":10},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default","columnCount":2}} -->
<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xx-large"},"padding":{"right":"var:preset|spacing|large","left":"var:preset|spacing|large","top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}},"border":{"radius":"3px","width":"3px"}},"borderColor":"white-ice","className":"is-style-default","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-default has-border-color has-white-ice-border-color" style="border-width:3px;border-radius:3px;margin-bottom:var(--wp--preset--spacing--xx-large);padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0"}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":".25rem"}},"layout":{"type":"flex","justifyContent":"space-between","orientation":"horizontal","verticalAlignment":"center","flexWrap":"nowrap"},"fontSize":"extra-small"} -->
<div class="wp-block-group has-extra-small-font-size"><!-- wp:post-date {"textAlign":"center","style":{"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"white-ice","className":"is-style-icecubo-oval-post-byline"} /-->

<!-- wp:post-author {"textAlign":"center","showAvatar":false,"style":{"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"white-ice","className":"is-style-icecubo-oval-post-byline"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"isLink":true,"style":{"border":{"width":"5px"}}} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":35} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":".5rem"},"fontSize":"extra-small"},"className":"has-extra-small-font-size is-style-default","layout":{"type":"flex","justifyContent":"left","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-extra-small-font-size is-style-default"><!-- wp:post-terms {"term":"category","textAlign":"center","separator":"  ","style":{"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"white-ice","className":"is-style-icecubo-oval-post-byline"} /-->

<!-- wp:post-terms {"term":"post_tag","textAlign":"center","separator":" ","style":{"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"white-ice","className":"is-style-icecubo-oval-post-byline"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:pattern {"slug":"icecubo/query-part-pagination-oval"} /-->
<!-- wp:pattern {"slug":"icecubo/query-part-no-results"} /-->
</div>
<!-- /wp:query -->