<?php
// phpcs:ignore
/**
 * Title: Background cover image and a banner box.
 * Slug: icecubo/hero-bg-img-inside-box
 * Categories: icecubo-hero
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/ice-cubes.png","alt":"Unicorn Wallpaper","dimRatio":20,"overlayColor":"primary","isUserOverlayColor":true,"contentPosition":"center center","sizeSlug":"large","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--xxx-large);padding-bottom:var(--wp--preset--spacing--xxx-large)"><img class="wp-block-cover__image-background size-large" alt="Unicorn Wallpaper" src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/ice-cubes.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-20 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|darko"}}},"spacing":{"padding":{"top":"var:preset|spacing|xxx-small","bottom":"var:preset|spacing|large"}}},"backgroundColor":"white-ice","textColor":"darko","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-darko-color has-white-ice-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--xxx-small);padding-bottom:var(--wp--preset--spacing--large)"><!-- wp:heading {"textAlign":"center","fontSize":"xl"} -->
<h2 class="wp-block-heading has-text-align-center has-xl-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Write title…"} -->
<p class="has-text-align-center">Viverra justo nec ultrices dui sapien. Bibendum ut tristique et egestas quis. Nulla posuere sollicitudin aliquam ultrices. Consequat id porta nibh venenatis. Vitae purus faucibus.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->