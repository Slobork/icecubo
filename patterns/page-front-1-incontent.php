<?php
// phpcs:ignore
if (! defined('ABSPATH') ) {
    exit;
}
/**
 * Title: Basic Layout front page (1). Header-Hero plus project sections with a call to action at the end.
 * Slug: icecubo/page-front-1-incontent
 * Categories: icecubo-page-front
 */
?>
<!-- wp:group {"metadata":{"name":"Header"},"tagName":"header","align":"full","layout":{"type":"default"}} -->
<header class="wp-block-group alignfull">
    <!-- wp:pattern {"slug":"icecubo/header-hero-gradient-gradual-dark-primary"} /-->
</header>
<!-- /wp:group -->
<!-- wp:group {"metadata":{"name":"Main"},"tagName":"main","align":"wide","style":{"spacing":{"padding":{"bottom":"3.5rem"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignwide" style="padding-bottom:3.5rem">
    <!-- wp:pattern {"slug":"icecubo/page-front-1-main"} /-->
</main>
<!-- /wp:group -->
<!-- wp:group {"tagName":"footer","metadata":{"name":"Footer"},"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|0","bottom":"var:preset|spacing|0"}}},"layout":{"type":"default"}} -->
<footer class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--0);margin-bottom:var(--wp--preset--spacing--0)">
    <!-- wp:pattern {"slug":"icecubo/footer-logo-nav-soc"} /-->
</footer>
<!-- /wp:group -->