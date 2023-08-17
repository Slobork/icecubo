<?php
// phpcs:ignore
/**
 * Title: 404 error content.
 * Slug: icecubo/404
 * Categories: hidden
 * Inserter: false
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"1px"}}}} -->
    <div class="wp-block-group" style="padding-top:1px">
        <!-- wp:heading {"level":1} -->
        <h1><?php echo esc_html__('Page not found, error 404', 'icecubo'); ?></h1>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->
<!-- wp:paragraph -->
<p><?php echo esc_html__('Oops, the page you are looking for does not exist or is no longer available. Please use the search form below to find your way out from here.', 'icecubo'); ?></p>
<!-- /wp:paragraph -->
<!-- wp:search {"width":80,"widthUnit":"%","showLabel":false,"buttonText":"Search"} /-->

</div>
<!-- /wp:group -->