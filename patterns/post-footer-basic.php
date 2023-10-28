<?php
// phpcs:ignore
/**
 * Title: Byline basic.
 * Slug: icecubo/post-footer-basic
 * Categories: hidden
 * Inserter: false
 */
?>
<!-- wp:group {"layout":{"type":"constrained"},"fontSize":"extra-small","style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-group has-extra-small-font-size post-footer">
    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"},"style":{"spacing":{"blockGap":".25rem"}}} -->
    <div class="wp-block-group">
        <!-- wp:paragraph {"fontSize":"small"} -->
        <p class="terms has-small-font-size"><?php echo esc_html__('Categories:', 'icecubo'); ?></p>
        <!-- /wp:paragraph -->
        <!-- wp:post-terms {"term":"category","backgroundColor":"white-ice","className":"is-style-icecubo-oval-post-byline"} /-->
    </div>
    <!-- /wp:group -->
    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"},"style":{"spacing":{"blockGap":".25rem","margin":{"top":".5rem"}}}} -->
    <div class="wp-block-group" style="margin-top:.5rem;">
        <!-- wp:paragraph {"fontSize":"small"} -->
        <p class="terms has-small-font-size"><?php echo esc_html__('Tags:', 'icecubo'); ?></p>
        <!-- /wp:paragraph -->
        <!-- wp:post-terms {"term":"post_tag","backgroundColor":"white-ice","className":"is-style-icecubo-oval-post-byline"} /-->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->