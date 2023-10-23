<?php
// phpcs:ignore
/**
 * Title: Posts wrapped in a group. Accent byline and terms.
 * Slug: icecubo/query-section-accent-byline-terms
 * Categories: icecubo-query-section
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|xxx-large"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--xxx-large)"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"spacing":{"margin":{"right":"0","left":"0","bottom":"var:preset|spacing|large"}}},"backgroundColor":"primary","textColor":"white-ice","className":"is-style-icecubo-tearbox-left-p"} -->
<p class="is-style-icecubo-tearbox-left-p has-white-ice-color has-primary-background-color has-text-color has-background" style="margin-right:0;margin-bottom:var(--wp--preset--spacing--large);margin-left:0">TECHNOLOGY</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","type":"constrained","inherit":false,"perPage":"3"},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"className":"is-style-default","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xx-large"}},"border":{"width":"1px","radius":"3px"}},"backgroundColor":"white","className":"is-style-default","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-default has-white-background-color has-background" style="border-width:1px;border-radius:3px;margin-bottom:var(--wp--preset--spacing--xx-large)"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}},"fontSize":"large"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":".25rem"}},"layout":{"type":"flex","justifyContent":"space-between","orientation":"horizontal","verticalAlignment":"center","flexWrap":"nowrap"},"fontSize":"extra-small"} -->
<div class="wp-block-group has-extra-small-font-size"><!-- wp:post-date {"textAlign":"center","style":{"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"white-ice","className":"is-style-icecubo-oval-post-meta"} /-->

<!-- wp:post-author {"textAlign":"center","showAvatar":false,"style":{"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"white-ice","className":"is-style-icecubo-oval-post-meta"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"isLink":true,"height":"120px","style":{"border":{"width":"4px"}}} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":20} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":".5rem"},"fontSize":"extra-small"},"className":"has-extra-small-font-size is-style-default","layout":{"type":"flex","justifyContent":"left","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-extra-small-font-size is-style-default"><!-- wp:post-terms {"term":"category","textAlign":"center","separator":"  ","style":{"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"white-ice","className":"is-style-icecubo-oval-post-meta"} /-->

<!-- wp:post-terms {"term":"post_tag","textAlign":"center","separator":" ","style":{"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"white-ice","className":"is-style-icecubo-oval-post-meta"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:paragraph {"align":"right"} -->
<p class="has-text-align-right">→See more from <a href="#">TECHNOLOGY</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->