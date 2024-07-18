<?php
// phpcs:ignore
/**
 * Title: Classic Blog - post's title first.
 * Slug: icecubo/template-index
 * Categories: hidden
 * Inserter: false
 */
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"3.5rem"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;padding-top:var(--wp--preset--spacing--medium);padding-bottom:3.5rem">
    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}}} -->
    <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--medium)"><!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"0"}}}} -->
    <h1 class="wp-block-heading" style="margin-top:0"><?php esc_html_e('The latest posts', 'icecubo');?></h1>
    <!-- /wp:heading --></div>
    <!-- /wp:group -->
    <!-- wp:pattern {"slug":"icecubo/query-classic-featured-img-beneath-title"} /-->
</main>
<!-- /wp:group -->