<?php
// phpcs:ignore
/**
 * Title: Present a features in group. Columns with large image aside and two small images.
 * Slug: icecubo/section-group-columns-large-img-aside-feature-two-small-images
 * Categories: icecubo-section
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xxx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"},"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="font-style:italic;font-weight:400">Lorem ipsum sit amet</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Bibendum ut tristique et egestas quis. Nulla posuere sollicitudin aliquam ultrices. Consequat id porta nibh venenatis. Vitae purus faucibus ornare.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="font-style:italic;font-weight:400">Nulla vitae lorem a neque</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-default"} -->
<p class="is-style-default">Lorem ipsum sit amet, consectetur a adipiscing. Nulla vitae lorem a neque imperdiet sagittis vivamus enim velit.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="font-style:italic;font-weight:400">Nulla vitae lorem a neque</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-default"} -->
<p class="is-style-default">Lorem ipsum sit amet, consectetur a adipiscing. Nulla vitae lorem a neque imperdiet sagittis vivamus enim velit.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image size-full is-style-default"><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/ice-orange-shaker.jpeg')); ?>" alt="" style="aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->