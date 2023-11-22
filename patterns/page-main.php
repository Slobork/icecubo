<?php
// phpcs:ignore
/**
 * Title: Main part of the page, for the page and alike-page templates.
 * Slug: icecubo/page-main
 * Categories: hidden
 * Inserter: false
 */
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0"}}}} -->
<main class="wp-block-group" style="margin-top:0;padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large)">
    <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|xxx-small"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--small)">
        <!-- wp:post-title {"level":1} /-->
        <!-- wp:post-featured-image {"aspectRatio":"auto","width":"","height":"350px"} /-->
</div>
    <!-- /wp:group -->

    <!-- wp:post-content {"layout":{"type":"constrained"}} /-->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:pattern {"slug":"icecubo/comments"} /-->
    </div>
    <!-- /wp:group -->
</main>
<!-- /wp:group -->