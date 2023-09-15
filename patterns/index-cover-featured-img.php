<?php
// phpcs:ignore
/**
 * Title: Query with featured image as a cover of each post.
 * Slug: icecubo/index-cover-featured-img
 * Categories: hidden
 * Inserter: false
 * Template Types: front-page, home
 */
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|x-large"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;padding-bottom:var(--wp--preset--spacing--x-large)">
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"1px"}}}} -->
    <div class="wp-block-group" style="padding-top:1px">
    <!-- wp:heading {"level":1} --><h1 class="wp-block-heading"><?php esc_html_e('The latest posts', 'icecubo');?></h1><!-- /wp:heading -->
    </div>
    <!-- /wp:group -->
        <!-- wp:pattern {"slug":"icecubo/query-cover-featured-img"} /-->
</main>
<!-- /wp:group -->