<?php
// phpcs:ignore
/**
 * Title: Classic Blog - post's title first.
 * Slug: icecubo/index
 * Categories: hidden
 * Inserter: false
 */
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-small","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;padding-top:var(--wp--preset--spacing--xxx-small);padding-bottom:var(--wp--preset--spacing--x-large)">
    <!-- wp:group -->
    <div class="wp-block-group">
    <!-- wp:heading {"level":1} --><h1 class="wp-block-heading"><?php esc_html_e('The latest posts', 'icecubo');?></h1><!-- /wp:heading -->
    </div>
    <!-- /wp:group -->
    <!-- wp:pattern {"slug":"icecubo/query-classic-featured-img-beneath-title"} /-->
</main>
<!-- /wp:group -->