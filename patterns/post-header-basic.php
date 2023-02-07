<?php
// phpcs:ignore
/**
 * Title: Basic - Featured image at bottom.
 * Slug: icecubo/post-header-basic
 * Categories: icecubo-post-header
 */
?>
<!-- wp:group {"layout":{"type":"constrained"},"style":{"spacing":{"blockGap":"10px"}}} -->
<div class="wp-block-group">
    <!-- wp:post-title {"level":1} /-->
    <!-- wp:group {"layout":{"type":"flex"},"style":{"spacing":{"blockGap":"5px"}}} -->
    <div class="wp-block-group">
        <!-- wp:post-date /-->
        <!-- wp:paragraph -->
        <p>·</p>
        <!-- /wp:paragraph -->
        <!-- wp:post-author {"showAvatar":false} /-->
    </div>
    <!-- /wp:group -->
    <!-- wp:post-featured-image /-->
</div>
<!-- /wp:group -->