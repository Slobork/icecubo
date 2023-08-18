<?php
// phpcs:ignore
/**
 * Title: Featured image as a cover.
 * Slug: icecubo/post-header-featured-img-as-cover
 * Categories: icecubo-post-header
 */
?>
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"contentPosition":"bottom center","isDark":false,"align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|large"}},"color":{"duotone":"unset"}},"layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light has-custom-content-position is-position-bottom-center" style="margin-bottom:var(--wp--preset--spacing--large)">
<span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span>
<div class="wp-block-cover__inner-container">
    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0"},"blockGap":".25rem","padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"flex","orientation":"horizontal","justifyContent":"center"}} -->
        <div class="wp-block-group alignwide" style="margin-top:0;padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
            <!-- wp:post-title {"level":1,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} /-->
            <!-- wp:pattern {"slug":"icecubo/post-byline-basic"} /-->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
</div>
<!-- /wp:cover -->