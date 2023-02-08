<?php
// phpcs:ignore
/**
 * Title: Byline.
 * Slug: icecubo/post-footer-basic
 * Categories: hidden
 * Inserter: false
 */
?>
<!-- wp:group {"layout":{"type":"constrained"},"style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-group">
    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"},"style":{"spacing":{"blockGap":"5px"}}} -->
    <div class="wp-block-group">
        <!-- wp:paragraph -->
        <p>In:</p>
        <!-- /wp:paragraph -->
        <!-- wp:post-terms {"term":"category"} /-->
    </div>
    <!-- /wp:group -->
    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"},"style":{"spacing":{"blockGap":"5px"}}} -->
    <div class="wp-block-group">
        <!-- wp:paragraph -->
        <p>Tags:</p>
        <!-- /wp:paragraph -->
        <!-- wp:post-terms {"term":"post_tag"} /-->
    </div>
    <!-- /wp:group -->
</div>