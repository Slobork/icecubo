<?php
// phpcs:ignore
/**
 * Title: Posts wrapped in a group. Oval post wrap.
 * Slug: icecubo/query-section-oval
 * Categories: icecubo-query-section
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|xxx-large"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--xxx-large)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|large"},"padding":{"top":"0px","bottom":"0px"}},"border":{"radius":"40px"}},"backgroundColor":"white-ice","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide has-white-ice-background-color has-background" style="border-radius:40px;margin-bottom:var(--wp--preset--spacing--large);padding-top:0px;padding-bottom:0px"><!-- wp:heading {"className":"is-style-icecubo-underline-overline"} -->
<h2 class="wp-block-heading is-style-icecubo-underline-overline">TECHNOLOGY</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","type":"constrained","inherit":false,"perPage":"3"},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xx-large"}},"border":{"radius":"40px"}},"backgroundColor":"white-ice","className":"is-style-default"} -->
<div class="wp-block-group is-style-default has-white-ice-background-color has-background" style="border-radius:40px;margin-bottom:var(--wp--preset--spacing--xx-large)"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-featured-image {"isLink":true} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":".25rem"}},"layout":{"type":"flex"},"fontSize":"extra-small"} -->
<div class="wp-block-group has-extra-small-font-size"><!-- wp:post-date {"className":"is-style-default"} /-->

<!-- wp:paragraph -->
<p>·</p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false,"className":"is-style-default"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"showMoreOnNewLine":false} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":".5rem"},"fontSize":"extra-small"},"className":"has-extra-small-font-size","layout":{"type":"flex"}} -->
<div class="wp-block-group has-extra-small-font-size"><!-- wp:post-terms {"term":"category","className":"is-style-default"} /-->

<!-- wp:post-terms {"term":"post_tag","className":"is-style-default"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->