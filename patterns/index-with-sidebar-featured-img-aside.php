<?php
// phpcs:ignore
/**
 * Title: Blog with sidebar - featured image aside.
 * Slug: icecubo/index-with-sidebar-featured-img-aside
 * Categories: hiiden
 * Inserter: false
 * Template Types: front-page, home
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:1px"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php echo esc_html__('The latest posts', 'icecubo'); ?></h1>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%">
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|x-large"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;padding-bottom:var(--wp--preset--spacing--x-large)">
    <!-- wp:pattern {"slug":"icecubo/query-classic-featured-img-aside"} /-->
</main>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"backgroundColor":"white-ice"} -->
<div class="wp-block-column has-white-ice-background-color has-background" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);flex-basis:30%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p>Sidebar content</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->