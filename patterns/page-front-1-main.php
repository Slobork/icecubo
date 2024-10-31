<?php
// phpcs:ignore
/**
 * Title: Basic Layout used on the front page (1). Project sections with a call to action at the end.
 * Slug: icecubo/page-front-1-main
 * Categories: icecubo-section
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"5rem","bottom":"8rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:5rem;margin-bottom:8rem"><!-- wp:heading {"textAlign":"center","className":"is-style-icecubo-mix-colors-focus","fontSize":"xxxl"} -->
<h2 class="wp-block-heading has-text-align-center is-style-icecubo-mix-colors-focus has-xxxl-font-size">Lorem ipsum sit amet, consectetur a adipiscing</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum sit amet, consectetur a adipiscing. Nulla vitae lorem a neque imperdiet sagittis vivamus enim velit.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:media-text {"align":"wide","mediaType":"image","style":{"spacing":{"margin":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large"}}}} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile" style="margin-top:var(--wp--preset--spacing--xxx-large);margin-bottom:var(--wp--preset--spacing--xxx-large)"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/ice-cubes.png')); ?>" alt="IceCubo placeholder image"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Project 1</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum sit amet, consectetur a adipiscing. Nulla vitae lorem a neque imperdiet sagittis vivamus enim velit.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text -->

<!-- wp:media-text {"align":"wide","mediaPosition":"right","mediaType":"image","style":{"spacing":{"margin":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large"}}}} -->
<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile" style="margin-top:var(--wp--preset--spacing--xxx-large);margin-bottom:var(--wp--preset--spacing--xxx-large)"><div class="wp-block-media-text__content"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Project 2</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum sit amet, consectetur a adipiscing. Nulla vitae lorem a neque imperdiet sagittis vivamus enim velit.</p>
<!-- /wp:paragraph --></div><figure class="wp-block-media-text__media"><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/ice-cubes.png')); ?>" alt="IceCubo placeholder image"/></figure></div>
<!-- /wp:media-text -->

<!-- wp:media-text {"align":"wide","mediaType":"image","style":{"spacing":{"margin":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large"}}}} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile" style="margin-top:var(--wp--preset--spacing--xxx-large);margin-bottom:var(--wp--preset--spacing--xxx-large)"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/ice-cubes.png')); ?>" alt="IceCubo placeholder image"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Project 3</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum sit amet, consectetur a adipiscing. Nulla vitae lorem a neque imperdiet sagittis vivamus enim velit.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text -->

<!-- wp:pattern {"slug":"icecubo/box-cta-circled-cover"} /-->