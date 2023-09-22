<?php
// phpcs:ignore
/**
 * Title: Blog with sidebar - featured image as a cover of each post.
 * Slug: icecubo/index-with-sidebar-cover-featured-img
 * Categories: hidden
 * Inserter: false
 * Template Types: front-page, home
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"1px"}}}} -->
<div class="wp-block-group" style="padding-top:1px"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php echo esc_html__('The latest posts', 'icecubo'); ?></h1>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%">
        <!-- wp:pattern {"slug":"icecubo/query-classic-featured-img-cover"} /-->
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