<?php
// phpcs:ignore
/**
 * Title: Blog page with sidebar.
 * Slug: icecubo/page-modal-blog-with-sidebar
 * Categories: hidden
 * Inserter: false
 * Template Types: index
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0"}}}} -->
<main class="wp-block-group" style="margin-top:0;padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large)">
    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|x-large"}}}} -->
    <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"0"}}}} -->
    <h1 class="wp-block-heading" style="margin-top:0"><?php echo esc_html__('The latest posts', 'icecubo'); ?></h1>
    <!-- /wp:heading --></div>
    <!-- /wp:group -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%">
    <!-- wp:pattern {"slug":"icecubo/query-classic-featured-img-beneath-title"} /-->
</div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"backgroundColor":"white-ice"} -->
<div class="wp-block-column has-white-ice-background-color has-background" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);flex-basis:30%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p>Sidebar content</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->