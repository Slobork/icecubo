<?php
// phpcs:ignore
/**
 * Title: Featured image aside.
 * Slug: icecubo/post-header-two-columns-featured-img-aside
 * Categories: icecubo-post-header
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--small)">
<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:post-featured-image /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:post-title {"level":1} /-->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

    <!-- wp:pattern {"slug":"icecubo/post-byline-oval"} /-->

</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
