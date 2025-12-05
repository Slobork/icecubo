<?php
// phpcs:ignore
/**
 * Title: Background cover image and a testimonial box.
 * Slug: icecubo/hero-bg-img-inside-box-testimonial
 * Categories: icecubo-hero
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/ice-cubes.png","alt":"Unicorn Wallpaper","dimRatio":20,"overlayColor":"primary","isUserOverlayColor":true,"contentPosition":"center center","sizeSlug":"large","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--xxx-large);padding-bottom:var(--wp--preset--spacing--xxx-large)"><img class="wp-block-cover__image-background size-large" alt="Unicorn Wallpaper" src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/ice-cubes.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-20 has-background-dim"></span><div class="wp-block-cover__inner-container">
<!-- wp:pattern {"slug":"icecubo/testimonial-box"} /-->
</div></div>
<!-- /wp:cover -->