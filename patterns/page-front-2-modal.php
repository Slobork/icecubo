<?php
// phpcs:ignore
/**
 * Title: Basic Layout front page (2). Header-Hero plus features and testimonials sections.
 * Slug: icecubo/page-front-2-modal
 * Categories: hidden
 * Inserter: false
 * Template Types: front-page
 */
?>
<!-- wp:group {"metadata":{"name":"Header"},"tagName":"header","align":"full","layout":{"type":"default"}} -->
<header class="wp-block-group alignfull">
    <!-- wp:pattern {"slug":"icecubo/header-hero-gradient-rushly-primary-transparent"} /-->
</header>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Main"},"tagName":"main","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--x-large)">
    <!-- wp:pattern {"slug":"icecubo/page-front-2-main"} /-->
</main>
<!-- /wp:group -->
<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->