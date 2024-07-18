<?php
// phpcs:ignore
/**
 * Title: Blog with featured image as a cover of each post.
 * Slug: icecubo/page-modal-blog-featured-img-cover
 * Categories: hidden
 * Inserter: false
 * Template Types: index
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large)">
    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}}} -->
    <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--large)"><!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"0"}}}} -->
    <h1 class="wp-block-heading" style="margin-top:0"><?php echo esc_html__('The latest posts', 'icecubo'); ?></h1>
    <!-- /wp:heading --></div>
    <!-- /wp:group -->
        <!-- wp:pattern {"slug":"icecubo/query-classic-featured-img-cover"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->