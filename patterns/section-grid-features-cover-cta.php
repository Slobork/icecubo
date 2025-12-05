<?php
// phpcs:ignore
/**
 * Title: Grid - Cover image on one side, call to action on the other side.
 * Slug: icecubo/section-grid-features-cover-cta
 * Categories: icecubo-section
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
<div class="wp-block-group alignwide"><!-- wp:cover {"url":"<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/ice-orange-straw.jpeg","dimRatio":0,"minHeight":600,"minHeightUnit":"px","isDark":false} -->
<div class="wp-block-cover is-light" style="min-height:600px"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/ice-orange-straw.jpeg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|medium","left":"var:preset|spacing|medium","top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
<!-- wp:pattern {"slug":"icecubo/cta-common"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|medium","left":"var:preset|spacing|medium","top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"className":"is-style-default"} -->
<h2 class="wp-block-heading is-style-default">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Viverra justo nec ultrices dui sapien. Bibendum ut tristique et egestas quis. Nulla posuere sollicitudin aliquam ultrices. Consequat id porta nibh venenatis. Vitae purus faucibus.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-icecubo-highlight-up-button"} -->
<div class="wp-block-button is-style-icecubo-highlight-up-button"><a class="wp-block-button__link wp-element-button">Get Started Today </a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/ice-orange-shaker.jpeg","dimRatio":0,"minHeight":600,"minHeightUnit":"px","isDark":false} -->
<div class="wp-block-cover is-light" style="min-height:600px"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/ice-orange-shaker.jpeg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->