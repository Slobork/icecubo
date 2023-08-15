<?php
// phpcs:ignore
/**
 * Title: Query with Blog title for index page.
 * Slug: icecubo/index
 * Categories: hidden
 * Inserter: false
 */
?>
<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group">
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"1px"}}}} -->
    <div class="wp-block-group" style="padding-top:1px">
    <!-- wp:heading {"level":1} --><h1 class="wp-block-heading"><?php esc_html_e('The latest posts', 'icecubo');?></h1><!-- /wp:heading -->
    </div>
    <!-- /wp:group -->
    <!-- wp:pattern {"slug":"icecubo/query-blog"} /-->
</main>
<!-- /wp:group -->