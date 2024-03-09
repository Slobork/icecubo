<?php
// phpcs:ignore
/**
 * Title: Header with hero section. Background light glow from primary color to transparent.
 * Slug: icecubo/header-hero-gradient-rushly-primary-transparent
 * Categories: icecubo-header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:cover {"dimRatio":60,"gradient":"primary-to-transparent-rushly-radial","contentPosition":"center center","isDark":false,"tagName":"header","align":"full","style":{"spacing":{"padding":{"bottom":"5rem"}},"elements":{"link":{"color":{"text":"var:preset|color|darko-down"}}}},"textColor":"darko-down"} -->
<header class="wp-block-cover alignfull is-light has-darko-down-color has-text-color has-link-color" style="padding-bottom:5rem"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim has-background-gradient has-primary-to-transparent-rushly-radial-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|x-small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:site-logo /-->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:site-title {"level":0,"fontSize":"xl"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:navigation {"className":"is-style-icecubo-nav-mark-hovers","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right","orientation":"horizontal","flexWrap":"nowrap"},"style":{"spacing":{"margin":{"top":"0"},"blockGap":"var:preset|spacing|small"}}} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":1,"textColor":"classy-3","className":"is-style-default"} -->
<h1 class="wp-block-heading has-text-align-center is-style-default has-classy-3-color has-text-color">IceCubo WordPress Theme</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">A block-based WordPress theme. Use it as a starting point, just like adding ice to the glass, then pour it over to create thrilling Websites!</p>
<!-- /wp:paragraph -->

<!-- wp:media-text {"align":"","mediaPosition":"right","mediaType":"image","mediaSizeSlug":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|xx-large"}}}} -->
<div class="wp-block-media-text has-media-on-the-right is-stacked-on-mobile" style="margin-top:var(--wp--preset--spacing--xx-large)"><div class="wp-block-media-text__content"><!-- wp:heading {"textColor":"classy-3"} -->
<h2 class="wp-block-heading has-classy-3-color has-text-color">It's a Block Time!</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-default"} -->
<p class="is-style-default">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"classy-3","textColor":"white","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-classy-3-background-color has-text-color has-background has-link-color wp-element-button">Start now!</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div><figure class="wp-block-media-text__media"><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/ice-cubes.png')); ?>" alt="IceCubo placeholder image"/></figure></div>
<!-- /wp:media-text --></div>
<!-- /wp:group --></div></header>
<!-- /wp:cover -->