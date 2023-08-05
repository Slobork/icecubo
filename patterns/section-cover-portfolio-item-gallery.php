<?php
// phpcs:ignore
/**
 * Title: Cover - with portfolio item and gallery.
 * Slug: icecubo/section-cover-portfolio-gallery
 * Categories: icecubo-section
 */
?>
<!-- wp:cover {"overlayColor":"primary","isDark":false,"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|large"}}}} -->
<div class="wp-block-cover is-light" style="padding-bottom:var(--wp--preset--spacing--large)"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0","padding":{"bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-bottom:0"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading -->
<h2 class="wp-block-heading">Sample project</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing dignissim. Quisque vitae mauris pellentesque arcu fermentum, vestibulum malesuada elit condimentum. Vivamus et enim diam velit.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|gray-friend-dark"}}}}} -->
<p class="has-link-color"><a href="#">Visit project→</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:gallery {"linkTo":"none"} -->
<figure class="wp-block-gallery has-nested-images columns-default is-cropped"></figure>
<!-- /wp:gallery --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->