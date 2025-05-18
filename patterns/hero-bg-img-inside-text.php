<?php
// phpcs:ignore
/**
 * Title: Background cover image and a text message (heading and a paragraph).
 * Slug: icecubo/hero-bg-img-inside-text
 * Categories: icecubo-hero
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/ice-orange-straw.jpeg","alt":"Unicorn Wallpaper","dimRatio":20,"overlayColor":"primary","isUserOverlayColor":true,"contentPosition":"bottom center","sizeSlug":"large","align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-center"><img class="wp-block-cover__image-background size-large" alt="Unicorn Wallpaper" src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/ice-orange-straw.jpeg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-20 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","fontSize":"xl"} -->
<h2 class="wp-block-heading has-text-align-center has-xl-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">Viverra justo nec ultrices dui sapien. Bibendum ut tristique et egestas quis. Nulla posuere sollicitudin aliquam ultrices. Consequat id porta nibh venenatis. Vitae purus faucibus.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->