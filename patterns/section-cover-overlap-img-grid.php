<?php
// phpcs:ignore
/**
 * Title: Cover overlapping section - image grid (with wide layout).
 * Slug: icecubo/section-cover-overlap-img-grid
 * Categories: icecubo-section
 */
?>
<!-- wp:cover {"minHeightUnit":"px","gradient":"primary-transparent-sharp-stack","align":"full","style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|medium","bottom":"5rem"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:5rem"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-primary-transparent-sharp-stack-gradient-background"></span><div class="wp-block-cover__inner-container">
<!-- wp:group {"lock":{"remove":true,"move":true},"style":{"dimensions":{"minHeight":""}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Note: Background's Overlapping Point Depends on the Content Height. Still, the Overlapping Point Can Be Trimmed by Adjusting the Padding on the Wrapper Cover Block.</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"lock":{"remove":true,"move":true},"style":{"position":{"type":""},"spacing":{"margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--medium)">
<!-- wp:pattern {"slug":"icecubo/section-columns-features-img-grid"} /-->
</div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->