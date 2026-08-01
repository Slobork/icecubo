<?php
// phpcs:ignore
if (! defined('ABSPATH') ) {
    exit;
}
/**
 * Title: Basic layout front page (3). Header-Hero plus achievement in numbers, features partners logo, pricing, and testimonials sections.
 * Slug: icecubo/page-front-3-incontent
 * Categories: icecubo-page-front
 */
?>
<!-- wp:group {"metadata":{"name":"Header"},"tagName":"header","align":"full","layout":{"type":"default"}} -->
<header class="wp-block-group alignfull">
    <!-- wp:pattern {"slug":"icecubo/header-hero-cover-cta-above-wide-img"} /-->
</header>
<!-- /wp:group -->
<!-- wp:group {"metadata":{"name":"Main"},"tagName":"main","align":"full","style":{"spacing":{"padding":{"bottom":"3.5rem"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull" style="padding-bottom:3.5rem">
    <!-- wp:pattern {"slug":"icecubo/page-front-3-main"} /-->
</main>
<!-- /wp:group -->
 <!-- wp:group {"tagName":"footer","metadata":{"name":"Footer"},"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|0","bottom":"var:preset|spacing|0"}}},"layout":{"type":"default"}} -->
<footer class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--0);margin-bottom:var(--wp--preset--spacing--0)">
    <!-- wp:pattern {"slug":"icecubo/footer-2floors-primary-dark-bg-border-top"} /-->
</footer>
<!-- /wp:group -->