<?php
// phpcs:ignore
/**
 * Title: 404 error content.
 * Slug: icecubo/404
 * Categories: icecubo-404
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    <!-- wp:group -->
    <div class="wp-block-group">
        <!-- wp:heading {"level":1} -->
        <h1><?php echo esc_html__('Page Not Found - Error 404', 'icecubo'); ?></h1>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->
<!-- wp:paragraph -->
<p><?php echo esc_html__('Oops, the page you are looking for does not exist or is no longer available. Please use the search form below to find your way out from here.', 'icecubo'); ?></p>
<!-- /wp:paragraph -->
<!-- wp:search {"showLabel":false,"placeholder":"Search...","width":75,"widthUnit":"%","buttonText":"Search","align":"center"} /-->
</div>
<!-- /wp:group -->